<?php
/*
Template Name: dashboard-orders
*/
// Get the current page's query string (if any)
$paged = $_GET['paged'] ?? 1;

// Define the columns we want to display
$columns = array(
    'date' => __( 'Date', 'woocommerce' ),
    'product_name' => __( 'Product', 'woocommerce' ),
    'quantity' => __( 'Quantity', 'woocommerce' ),
    'total' => __( 'Total', 'woocommerce' ),
);

// Create a form with a dropdown list of products
?>
    <form action="<?php echo esc_url( get_permalink() ); ?>" method="get">
    <select name="filter_product" id="filter_product">
    <?php $args = array(
        'post_type'      => 'product',
        'posts_per_page'  => -1,
        'fields'         => 'ids'
    );
    
    // Get the products for the filter dropdown
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
        <button type="submit">Filter</button>
    </form>

<?php
// Get the orders
if ( isset( $_GET['filter_product'] ) && ! empty( $_GET['filter_product'] ) ) {
    $product_id = $_GET['filter_product'];
} else {
    $product_id = '';
}

$orders = wc_get_orders( array(
    'status'   => array( 'processing', 'completed' ),
    // only show processing or completed orders
    'limit'    => 20,
    // display 20 orders per page
    'meta_query' => array(
        array(
            'key'     => '_line_items',
            'value'   => $product_id,
            'compare' => '='
        )
    ),
) );

// Check if $orders is not empty
if ( $orders ) { ?>
    
    <h1>List Orders LLM</h1>
    
    <?php 
    // Get the columns we want to display
    $columns = array(
        'date' => __( 'Date', 'woocommerce' ),
        'product_name' => __( 'Product', 'woocommerce' ),
        'quantity' => __( 'Quantity', 'woocommerce' ),
        'total' => __( 'Total', 'woocommerce' ),
    );
    // Loop through the orders and display them in a table
    ?>
    <table>
        <tr>
            <?php foreach ( $columns as $column ) : ?>
                <th><?php echo esc_html( $column ); ?></th>
            <?php endforeach; ?>
        </tr>
        
        <?php foreach ( $orders as $order ) { 
            $items = $order->get_items();
            foreach ( $items as $item ) {
                if ($item->get_product_id() == $product_id) { 
                    ?>
                    <tr>
                        <td><?php echo esc_html( $order->get_date_created()->date_i18n('d M Y') ); ?></td>
                        <td><?php echo esc_html( $item->get_name() ); ?></td>
                        <td><?php echo esc_html( $item->get_quantity() ); ?></td>
                        <td><?php echo esc_html( wc_price( $item->get_total() ) ); ?></td>
                    </tr>
                    <?php
                }
            } 
        } ?>
    </table>
    
<?php } else { ?>
    <p>No orders found.</p>
<?php } ?>
