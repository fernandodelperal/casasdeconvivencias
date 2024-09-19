<?php
/*
Template Name: Lista de Productos
*/
if (!is_user_logged_in() || !current_user_can('manage_woocommerce')) wp_die('Esta página es privada.');

get_header();
?>

<div id="content" class="container">
    <div class="row">
        <div class="main col-lg-12" role="main">
            <div class="entry-content">
                <h1>Lista de Productos</h1>

                <?php
                // Function to format date - moved outside the loop
                function format_date($date) {
                    if (!$date) return '';
                    $date_obj = DateTime::createFromFormat('d/m/Y', $date);
                    return $date_obj ? $date_obj->format('d-M-Y') : '';
                }

                function get_total_stock($product) {
                    if ($product->is_type('variable')) {
                        $variations = $product->get_available_variations();
                        $total_stock = 0;
                        foreach ($variations as $variation) {
                            $variation_obj = wc_get_product($variation['variation_id']);
                            $total_stock += $variation_obj->get_stock_quantity();
                        }
                        return $total_stock;
                    } else {
                        return $product->get_stock_quantity();
                    }
                }

                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => -1,
                    'meta_query'     => array(
                        'relation' => 'OR',
                        array(
                            'key'     => 'fecha_inicio',
                            'compare' => 'EXISTS',
                        ),
                        array(
                            'key'     => 'fecha_inicio',
                            'compare' => 'NOT EXISTS',
                        ),
                    ),
                    'orderby'  => array(
                        'meta_value' => 'ASC',
                        'date'       => 'DESC',
                    ),
                    'meta_key' => 'fecha_inicio',
                    'meta_type' => 'DATE',
                );

                $loop = new WP_Query($args);

                if ($loop->have_posts()) :
                ?>
                    <table>
                        <tr>
                            <th>Nombre</th>
                            <th>Fecha Inicio</th> <!-- New column for start date -->
                            <th>Fecha Fin</th> <!-- New column for end date -->
                            <th>Vacantes</th>
                            <th>Notas</th>
                        </tr>
                        <?php
                        while ($loop->have_posts()) : $loop->the_post();
                            global $product;
                            $fecha_inicio = get_post_meta($product->get_id(), 'fecha_inicio', true);
                            $fecha_fin = get_post_meta($product->get_id(), 'fecha_fin', true);

                            ?>
                            <tr>
                                <td><?php echo $product->get_name(); ?></td>
                                <td><?php echo format_date($fecha_inicio); ?></td>
                                <td><?php echo format_date($fecha_fin); ?></td>
                                <td><?php echo $product->get_total_stock($product); ?></td>
                                <td><?php echo get_post_meta($product->get_id(), 'Fechas', true); ?></td>
                            </tr>
                        <?php
                        endwhile;
                        ?>
                    </table>
                <?php
                else :
                    echo '<p>No se encontraron productos.</p>';
                endif;

                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>