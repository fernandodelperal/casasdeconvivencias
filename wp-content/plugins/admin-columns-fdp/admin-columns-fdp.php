<?php
/**
 * Plugin Name: Admin Columns fdp
 * Plugin URI: https: no
 * Description: A plugin to add columns in backend
 * Version: 1.0
 * Author: Fernando del Peral
 * Author URI: no
 **/
/*
 * Add columns to exhibition post list
 */

add_filter('manage_edit-shop_order_columns', 'MY_COLUMNS_FUNCTION');
function MY_COLUMNS_FUNCTION($columns)
{
    $new_columns = (is_array($columns)) ? $columns : array();
    unset($new_columns['order_actions']);
    //unset( $new_columns[ 'order_number' ] ); needed by shop manager to see name. fdp

    //edit this for your column(s)
    //all of your columns will be added before the actions column
    $new_columns['Actividad'] = 'Actividad';
    $new_columns['Régimen_especial'] = 'Régimen especial';
    $new_columns['Llega_tarde'] = 'Llega tarde';
    $new_columns['Comentarios'] = 'Comentarios Asistente';
    $new_columns['subscription_id'] = 'subscription_id';

    //stop editing
    $new_columns['order_actions'] = $columns['order_actions'];

    return $new_columns;

    //'order-number'
    //'order-date'
    //'order-status'
    //'order-total'
    //'order-actions'
}

// do sortable

add_filter("manage_edit-shop_order_sortable_columns", 'MY_COLUMNS_SORT_FUNCTION');
function MY_COLUMNS_SORT_FUNCTION($columns)
{
    $custom = array(
        'Actividad' => 'Actividad',
        'Régimen_especial' => 'Régimen_especial',
        'Llega_tarde' => 'Llega_tarde',
        'Comentarios' => 'Comentarios',

    );
    return wp_parse_args($custom, $columns);
}

// add custom fields to columns

add_action('manage_shop_order_posts_custom_column', 'MY_COLUMNS_VALUES_FUNCTION', 2);
function MY_COLUMNS_VALUES_FUNCTION($column)
{
    global $post;
    $data = get_post_meta($post->ID);

    //start editing, I was saving my fields for the orders as custom post meta
    //if you did the same, follow this code

    if ($column == 'Actividad') {
        echo (isset($data['Actividad'][0]) ? $data['Actividad'][0] : '');
    }

    if ($column == 'Régimen_especial') {
        echo (isset($data['Régimen_especial'][0]) ? $data['Régimen_especial'][0] : '');
    }

    if ($column == 'Llega_tarde') {
        echo (isset($data['Llega_tarde'][0]) ? $data['Llega_tarde'][0] : '');
    }

    if ($column == 'Comentarios') {
        echo (isset($data['Comentarios'][0]) ? $data['Comentarios'][0] : '');
    }

    if ($column == 'subscription_id') {
        echo (isset($data['subscription_id'][0]) ? $data['subscription_id'][0] : '');
    }

}

//from now on, product seo configuration
add_filter('manage_edit-product_columns', 'show_product_order', 15);
function show_product_order($columns)
{

    //remove column
    unset($columns['product_tag']);
    unset($columns['product_type']);
    unset($columns['date']);
    unset($columns['product_cat']);
    unset($columns['thumb']);
    unset($columns['sku']);
    unset($columns['featured']);
    unset($columns['is_in_stock']);
//posibles columns:
    //$columns['cb']
    //$columns['thumb']
    //$columns['name']
    //$columns['sku']
    //$columns['is_in_stock']
    //$columns['price']
    //$columns['product_cat']
    //$columns['product_tag']
    //$columns['featured']
    //$columns['product_type']
    //$columns['date']

    //add column
    $columns['Fechas'] = __('Fechas');
    $columns['Inscripciones'] = __('Inscripciones');
    $columns['Disponibilidad'] = __('Disponibilidad');
    $columns['Organiza'] = __('Organiza');
    $columns['Notificaciones'] = __('Notificaciones');

    return $columns;
}

add_action('manage_product_posts_custom_column', 'wpso23858236_product_column_offercode', 10, 2);

function wpso23858236_product_column_offercode($column, $postid)
{
    if ($column == 'Fechas') {
        echo get_post_meta($postid, 'Fechas', true);
    }
    if ($column == 'Organiza') {
        echo get_post_meta($postid, 'Organiza', true);

    }
    if ($column == 'Notificaciones') {
        echo get_post_meta($postid, 'Notificaciones', true);
    }

    if ($column == 'Inscripciones') {

        $product = wc_get_product($postid);
        $total_sales = $product->total_sales;
        $current_site_network = get_home_url();
        $link = '<a href="' . get_home_url() . '/listado/?activ=' . $product->sku . '&act=' . $product->id . '" class="button success">' . 'Administrar (' . $total_sales . ')</a>';

        $link2 = '<a href="' . $current_site_network . '/wp-admin/edit.php?s&post_status=all&post_type=shop_order&action=-1&m=0&_customer_user&search_by_sku_order_type_filter=' . $product->sku . '&filter_action=Filter&action2=-1&orderby=Actividad&order=asc">' . '(+)</a>';

        echo $link . $link2;
    }
    if ($column == 'Disponibilidad') {

        $product = wc_get_product($postid);
        if ($product->is_type('simple')) {
            $product_qty = $product->stock;

        } elseif ($product->is_type('variable')) {
            global $wpdb;
            $query = "SELECT sum(meta_value)
                          FROM $wpdb->posts AS p, $wpdb->postmeta AS s
                          WHERE p.post_parent = %d
                          AND p.post_type = 'product_variation'
                          AND p.post_status = 'publish'
                          AND p.id = s.post_id
                          AND s.meta_key = '_stock'";

            $product_qty = $wpdb->get_var($wpdb->prepare($query, $postid));
            if (empty($product_qty)) {
                $product_qty = $product->stock;
            }
        }

        if ($product_qty) {
            echo '<center>' . $product_qty . '</center>';
        }

    }
}

/**
 * This snippet will add cancel order button to all (not cancelled) orders.
 */
add_filter('woocommerce_admin_order_actions', 'add_cancel_order_actions_button', PHP_INT_MAX, 2);
function add_cancel_order_actions_button($actions, $the_order)
{
    if (!$the_order->has_status(array('cancelled'))) {
        // if order is not cancelled yet...
        $actions['cancel'] = array(
            'url' => wp_nonce_url(admin_url('admin-ajax.php?action=woocommerce_mark_order_status&status=cancelled&order_id=' . $the_order->id), 'woocommerce-mark-order-status'),
            'name' => __('Cancel', 'woocommerce'),
            'action' => "view cancel", // setting "view" for proper button CSS
        );
    }
    return $actions;
}
add_action('admin_head', 'add_cancel_order_actions_button_css');
function add_cancel_order_actions_button_css()
{
    echo '<style>.view.cancel::after { content: "\e013" !important; }</style>';
}
