<?php
/*
Template Name: dashboard-orders
*/
// Get the current page's query string (if any)
$paged = $_GET['paged'] ?? 1;

// Define the columns we want to display
$columns = array(
    'No' => __( 'No', 'woocommerce' ),
    'Nombre' => __( 'Nombre', 'woocommerce' ),
    'Email' => __( 'Email', 'woocommerce' ),
    'Teléfono' => __( 'Teléfono', 'woocommerce' ),
    'Estado del Pago' => __( 'Estado del Pago', 'woocommerce' ),
    'Forma de Pago' => __( 'Forma de Pago', 'woocommerce' ),
    'Tipo' => __( 'Tipo', 'woocommerce' ),
    'Régimen especial' => __( 'Régimen especial', 'woocommerce' ),
    'Procedencia' => __( 'Procedencia', 'woocommerce' ),
    'Llega tarde?' => __( 'Llega tarde?', 'woocommerce' ),
    'Comentarios' => __( 'Comentarios', 'woocommerce' ),
);

// Create a form with a dropdown list of products
?>
    <h1>Pedidos</h1>
    <form action="<?php echo esc_url( get_permalink() ); ?>" method="get">
        <select name="filter_product" id="filter_product">
            <?php
                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page'  => -1,
                    'fields'         => 'ids'
                );
                $query = new WP_Query( $args );
            ?>
            <option value="">All Products</option>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php
                    $fecha_inicio = get_post_meta(get_the_ID(), 'fecha_inicio', true);
                    if ($fecha_inicio) {
                        $option_value = get_the_ID();
                        $option_text = date('d M Y', strtotime($fecha_inicio)) . " - " . esc_html( get_the_title() );
                    } else {
                        $option_value = get_the_ID();
                        $option_text = esc_html( get_the_title() );
                    }
                ?>
                <option value="<?php echo esc_attr( $option_value ); ?>"<?php if ( $_GET['filter_product'] == $option_value ) { echo ' selected'; } ?>>
                    <?php echo $option_text; ?>
                </option>
            <?php endwhile; wp_reset_query(); ?>
        </select>
        <input type="hidden" name="paged" value="<?php echo $paged; ?>">
        <input type="hidden" name="section" value="dashboard-orders">
        <button type="submit">Filter</button>
    </form>

<?php
// Get the orders
if ( isset( $_GET['filter_product'] ) && ! empty( $_GET['filter_product'] ) ) {
    $product_id = $_GET['filter_product'];
    $meta_query = array(
        array(
            'key'     => '_line_items',
            'value'   => $product_id,
            'compare' => '='
        )
    );
} else {
    $product_id = '';
    $meta_query = array(); // No meta query if no product filter
}

$orders = wc_get_orders( array(
    'status'   => 'any',
    'limit'    => 20,
    'meta_query' => $meta_query,
) );

// Calculate total orders for the filtered product
$total_orders = 0;
foreach ( $orders as $order ) {
    $items = $order->get_items();
    foreach ( $items as $item ) {
        if (empty($product_id) || $item->get_product_id() == $product_id) {
            $total_orders++;
            break; // Count each order only once
        }
    }
}

// Display total number of orders
echo '<p>Total de pedidos: ' . esc_html($total_orders) . '</p>';

// Check if $orders is not empty
if ( $orders ) { ?>
    
    <?php 
    // Loop through the orders and display them in a table
    ?>
    <table>
        <tr>
            <?php foreach ( $columns as $column_key => $column ) : ?>
                <th><?php echo esc_html( $column ); ?></th>
            <?php endforeach; ?>
        </tr>
        
        <?php 
        $num = 0;
        foreach ( $orders as $order ) { 
            $items = $order->get_items();
            foreach ( $items as $item ) {
                if (empty($product_id) || $item->get_product_id() == $product_id) { 
                    $num++;
                    ?>
                    <tr>
                        <td><?php echo esc_html( $num ); ?></td>
                        <td><?php echo esc_html( $order->get_billing_first_name() . ' ' . $order->get_billing_last_name() ); ?></td>
                        <td><?php echo esc_html( $order->get_billing_email() ); ?></td>
                        <td><?php echo esc_html( $order->get_billing_phone() ); ?></td>
                        <td><?php
                            echo esc_html( wc_get_order_status_name( $order->get_status() ) );

                            if ($order->payment_method == 'woo-mercado-pago-basic') {
                                echo ' (de <a href="https://www.mercadopago.com.ar">'.'MercadoPago</a>)';
                            } else {

                                if ($order->get_status() != 'cancelled') {
                                    if ($order->get_status() != 'completed') {
                                        $url_completed = wp_nonce_url( admin_url( 'admin-ajax.php?action=woocommerce_mark_order_status&status=completed&order_id=' . $order->id ), 'woocommerce-mark-order-status' );
                                        echo ' <a href="' . $url_completed. '">'.'Completar</a>';

                                    }

                                        $url_cancel = wp_nonce_url( admin_url( 'admin-ajax.php?action=woocommerce_mark_order_status&status=cancelled&order_id=' . $order->id ), 'woocommerce-mark-order-status' );
                                        echo ' <a href="' . $url_cancel. '">'.'Cancelar</a>';
                                    } else {


                                        $url_delete = get_delete_post_link( $order->id);

                                        $url_processing = wp_nonce_url( admin_url( 'admin-ajax.php?action=woocommerce_mark_order_status&status=processing&order_id=' . $order->id ), 'woocommerce-mark-order-status' );
                                        echo ' <a href="' . $url_delete. '">'.'Eliminar</a>' . ' <a href="' . $url_processing. '">'.'Reactivar</a>';

                                }
                            }
                            ?>
				        </td>
                        <td><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></td>
                        <td><?php echo esc_html( $item->get_name() ); ?></td>
                        <td><?php echo esc_html( get_post_meta( $order->get_id(), 'Régimen_especial', true ) ); ?></td>
                        <td><?php echo esc_html( get_post_meta( $order->get_id(), 'Procedencia', true ) ); ?></td>
                        <td><?php echo esc_html( get_post_meta( $order->get_id(), 'Llega_tarde', true ) ); ?></td>
                        <td><?php echo esc_html( get_post_meta( $order->get_id(), 'Comentarios', true ) ); ?></td>
                    </tr>
                    <?php
                }
            } 
        } ?>
    </table>
    
<?php } else { ?>
    <p>No orders found.</p>
<?php } ?>
