<?php
/**
* Plugin Name: Custom emails FDP
* Plugin URI: https: no
* Description: A plugin to change emails
* Version: 1.0
* Author: Fernando del Peral
* Author URI: no
**/


// Change new order email subject 
function wc_change_admin_new_order_email_subject( $subject, $order ) {

        //$blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);
        //$subject = sprintf( '[%s] New Customer Order (%s) from %s %s', $blogname, $order->get_order_number(), $order->billing_first_name, $order->billing_last_name );
    	$subject = 'Nuevo pedido de inscripción de ' . $order->billing_first_name. ' ' . $order->billing_last_name;

    return $subject;
}
 
add_filter('woocommerce_email_subject_new_order', 'wc_change_admin_new_order_email_subject', 1, 2);

// Change new order email recipient
function wc_change_admin_new_order_email_recipient( $recipient, $order ) {
		
	$items = $order->get_items(); 
        foreach ( $items as $item ) {
         
            $product = wc_get_product( $item['product_id'] );
            $Notificaciones = get_post_meta( $product->get_id(), 'Notificaciones', true );
		    if ( !empty($Notificaciones)) {
		        $recipient = $recipient. ', '. $Notificaciones;

	        }
    	}
    return $recipient;
}

add_filter('woocommerce_email_recipient_new_order', 'wc_change_admin_new_order_email_recipient', 1, 2);
 
?>