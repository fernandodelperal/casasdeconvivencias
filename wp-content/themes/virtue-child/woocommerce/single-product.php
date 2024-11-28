<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php
			$fecha_inicio = get_post_meta($product->get_id(), 'fecha_inicio', true);
			$fecha_fin = get_post_meta($product->get_id(), 'fecha_fin', true);
			?>

			<?php
			function format_date($date) {
				if (!$date) return '';
				$date_obj = DateTime::createFromFormat('Y-m-d', $date);
				return $date_obj ? datefmt_format_object($date_obj, 'dd-MMMM-yy', 'es_ES') : null;
			}
			?>

			<?php
			$fecha_inicio_formated = format_date($fecha_inicio);
			$fecha_fin_formated = format_date($fecha_fin);
			?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

			<div class="product-info">
				<h2 style="margin-left: 20px;">Información de la actividad</h2>
				<p style="margin-left: 20px;">Fecha de inicio: <?php echo $fecha_inicio_formated; ?></p>
				<p style="margin-left: 20px;">Fecha de fin: <?php echo $fecha_fin_formated; ?></p>
			</div>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
