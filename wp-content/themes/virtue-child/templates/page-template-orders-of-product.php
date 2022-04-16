<?php
/*
Template Name: Print Orders by product :)FDP
*/
if (!is_user_logged_in() || !current_user_can('manage_woocommerce')) wp_die('This page is private.');
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php _e('Processing Orders'); ?></title>
	<style>
		body { background:white; color:black; width: 95%; margin: 0 auto; }

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

article { border-top: 2px dashed #000; padding: 20px 0; }

/*
from here style for grey color of font
*/

tr.strikeout {

  color: #b9b9b9;

}


</style>

</head>
<body>
	<header>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    <h1 class="title"><?php the_title(); ?></h1>

			<?php the_content(); ?>

		<?php endwhile; endif; ?>
	</header>
<?php

				$act = get_query_var( 'act' );
				if (!empty($act)) {

					 $product = wc_get_product( $act);
					 echo '<h2 class="email-upsell-title">Actividad: '.$product->name.'</h2>';
					 	/* completar stock después FDP
					 	if( $product->is_type( 'simple' ) ){
                			$product_qty = $product->stock;

		            	} elseif( $product->is_type( 'variable' ) ){
			                global $wpdb;
			                $query = "SELECT sum(meta_value)
			                          FROM $wpdb->posts AS p, $wpdb->postmeta AS s
			                          WHERE p.post_parent = %d
			                          AND p.post_type = 'product_variation'
			                          AND p.post_status = 'publish'
			                          AND p.id = s.post_id
			                          AND s.meta_key = '_stock'";

			                $product_qty = $wpdb->get_var($wpdb->prepare($query,$postid));

		            	}
						if ($product_qty) echo 'Lugares disponibles: '. $product_qty;
						*/
				}

?>

<p class="email-upsell-p"> Para imprimir <a href="javascript:window.print()">Click aquí</a>. Sino seleccionar el cuadro y copiar en Excel.</p>

	<section>

			<table>
			  <tr>
			    <th>No</th>
			    <th>Nombre</th>
				<th>Email</th>
			    <th>Estado del Pago</th>
			    <th>Forma de Pago</th>
			    <th>Actividad</th>
			    <th>Régimen especial</th>
			    <th>Llega tarde?</th>
			    <th>Comentarios</th>

			  </tr>
				<?php global $woocommerce;

				$activ = get_query_var( 'activ' );

				if (!empty($activ)) {

					$args = array(
						'post_type' => 'shop_order',
						'post_status' => 'any',
						'orderby'   => 'order_id',
        				'order' => 'DESC',
						'meta_key'		=> 'nsku',
						'meta_value'	=> $activ,
						'posts_per_page' => -1
					);
				} else {

					$args = array(
						'post_type' => 'shop_order',
						'post_status' => array ('any'),
						'posts_per_page' => -1
					);
				}

				$num = 0;
				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post();

					$order_id = $loop->post->ID;

					$order = new WC_Order($order_id);
					$status = $order->status;


				?>

			  	<?php

			    	if ($order->get_status() != 'pending' and $order->get_status() != 'cancelled') {
						$num = $num + 1;
						echo ' <tr> <td>';
						echo $num;
					}
					else {
						echo ' <tr class = "strikeout"> <td>';
					}
			    	?>
				</td>
			    <td><?php echo  $order->billing_first_name. ' ' . $order->billing_last_name;?>
				</td>
				<td><?php echo  $order->billing_email;?>
				</td>
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
				</td>
				<td><?php echo wp_kses_post( $order->get_payment_method_title() );?>
				</td>
				<td><?php echo get_post_meta( $order->id, 'Actividad', true )?>
				</td>
				<td><?php echo get_post_meta( $order->id, 'Régimen_especial', true )?>
				</td>
				<td><?php echo get_post_meta( $order->id, 'Llega_tarde', true )?>
				</td>
				<td><?php echo get_post_meta( $order->id, 'Comentarios', true );?>
				</td>

			  </tr>

				<?php endwhile;?>
			</table>

	</section>


</body>
</html>
