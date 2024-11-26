<div id="content" class="container">
    <div class="row">
        <div class="main col-lg-12" role="main">
            <div class="entry-content">
                <h1>Actividades</h1>

                <?php
                // Function to format date - moved outside the loop
                function format_date($date) {
                    if (!$date) return '';
                    $date_obj = DateTime::createFromFormat('Y-m-d', $date);
                    return $date_obj ? datefmt_format_object($date_obj, 'dd-MMMM-yy', 'es_ES') : null;
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
                    'meta_key'       => 'fecha_inicio',
                    'orderby'        => 'meta_value',
                    'order'          => 'ASC',
                    'meta_type'      => 'DATE'
                );
                

                $loop = new WP_Query($args);

                if ($loop->have_posts()) :
                ?>
                    <table>
                        <tr>
                            <th>Pedidos</th>
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
                                <td><a href="<?php echo site_url(pathinfo($_SERVER['REQUEST_URI'], PATHINFO_DIRNAME)) . '?section=dashboard-orders&filter_product=' . $product->get_id(); ?>" class="btn btn-primary">Ver</a></td>
                                <td>    
                                    <a href="<?php echo get_permalink($product->get_id()); ?>" target="_blank">
                                        <?php echo $product->get_name(); ?>
                                    </a>    
                                </td>
                                <td><?php echo format_date($fecha_inicio); ?></td>
                                <td><?php echo format_date($fecha_fin); ?></td>
                                <td><?php echo $product->get_total_stock($product); ?></td>
                                <td><?php echo get_post_meta($product->get_id(), 'Notas', true); ?></td>
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