<?php

//Enqueue style.css for loading the child theme
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

}

// Add Favicon
function favicon()
{
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . get_stylesheet_directory_uri() . '/favicon/favicon.png" />';
}
add_action('wp_head', 'favicon');

// Hook in to remove fields frome checkout
add_filter('woocommerce_checkout_fields', 'remove_checkout_fields');

// Our hooked in function - $fields is passed via the filter!
function remove_checkout_fields($fields)
{
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['order']['order_comments']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_state']);

    return $fields;
}

//removes Order Notes Title - Additional Information
add_filter('woocommerce_enable_order_notes_field', '__return_false');

//* Add select field to the checkout page
add_action('woocommerce_after_order_notes', 'wps_add_select_checkout_field');
function wps_add_select_checkout_field($checkout)
{
//insert Title Notas opcionales
    echo '<h2>' . __('Notas de mi inscripción') . '</h2>';
//insert text
    woocommerce_form_field('tarde', array(
        'type' => 'text',
        'class' => array('my-field-class form-row-wide'),
        'label' => __('Qué día llegaré?'),
        'required' => true,
        'placeholder' => __('Indique día y hora de su llegada'),
    ), $checkout->get_value('tarde'));

    //insert text
    woocommerce_form_field('DNI/CUIL', array(
        'type' => 'text',
        'class' => array('my-field-class form-row-wide'),
        'label' => __('DNI o CUIL o Pasaporte para Factura'),
        'required' => true,
        'placeholder' => __('Para realizarle la factura'),
    ), $checkout->get_value('DNI/CUIL'));

    //insert select
    woocommerce_form_field('dieta_especial', array(
        'type' => 'select',
        'class' => array('wps-drop'),
        'label' => __('Dieta especial'),
        'options' => array(
            '' => __('Si lo necesita, indíquenos tipo de régimen', 'wps'),
            'hiposodico' => __('Régimen hiposódicos estrictos', 'wps'),
            // 'hepatico' => __('Régimen hepático', 'wps'),
            'celiaco' => __('Régimen celíaco', 'wps'),
            'diabetes' => __('Régimen de diabetes', 'wps'),
            // 'gastritis' => __('Régimen de gastritis', 'wps'),
            // 'coleterol' => __('Régimen de colesterol', 'wps'),
            // 'int-blando' => __('Régimen intestino (blando)', 'wps'),
            // 'int-astringente' => __('Régimen intestino (astringente)', 'wps'),
            // 'otro' => __('Otro (indicar en Alimentos especiales)', 'wps'),
        ),
    ),
        $checkout->get_value('dieta_especial'));
//insert text
woocommerce_form_field('procedencia', array(
    'type' => 'text',
    'class' => array('my-field-class form-row-wide'),
    'label' => __('Ciudad o Centro de procedencia'),
), $checkout->get_value('procedencia'));


//insert text
    woocommerce_form_field('comentarios', array(
        'type' => 'textarea',
        'class' => array('comentarios'),
        'label' => __('Comentarios'),
        'placeholder' => __('Indicar en caso de movilidad reducida, necesita u ofrece transporte, etc.'),
    ), $checkout->get_value('comentarios'));
}

/**
 * Doing custom fields required during checkout process
 */
add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');

function my_custom_checkout_field_process()
{
    // Check if set, if its not set add an error.
    if (!$_POST['DNI/CUIL']) {
        wc_add_notice(__('Por favor complete el campo obligatorio que está resaltado'), 'error');
    }

    // Check if set, if its not set add an error.
    if (!$_POST['tarde']) {
        wc_add_notice(__('Por favor complete el campo obligatorio que está resaltado'), 'error');
    }


}

/**
 * Update the order meta with field value
 */
add_action('woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta');

function my_custom_checkout_field_update_order_meta($order_id)
{
    if (!empty($_POST['dieta_especial']) or !empty($_POST['alimentos'])) {
        if (!empty($_POST['alimentos'])) {

            $separate = ' || ';
        } else {
            $separate = '';
        }

        update_post_meta($order_id, 'Régimen_especial', sanitize_text_field($_POST['dieta_especial']) . $separate . sanitize_text_field($_POST['alimentos']));
    }
    if (!empty($_POST['tarde'])) {
        update_post_meta($order_id, 'Llega_tarde', sanitize_text_field($_POST['tarde']));
    }
    if (!empty($_POST['comentarios'])) {
        update_post_meta($order_id, 'Comentarios', sanitize_text_field($_POST['comentarios']));
    }
    if (!empty($_POST['procedencia'])) {
        update_post_meta($order_id, 'Procedencia', sanitize_text_field($_POST['procedencia']));
    }
    if (!empty($_POST['DNI/CUIL'])) {
        update_post_meta($order_id, 'DNI/CUIL', sanitize_text_field($_POST['DNI/CUIL']));
    }
}

// update custom field actividad
add_action('woocommerce_checkout_update_order_meta', 'my_custom_field_actividad');

function my_custom_field_actividad($order_id)
{
    $order = new WC_Order($order_id);
    if (!empty($order)) {

        $items = $order->get_items();

        foreach ($items as $item) {

            $product = wc_get_product($item['product_id']);

            $variation_id = $item['variation_id'];
            if (!empty($variation_id)) {

                $variation = wc_get_product($variation_id);
                $product_name = $variation->get_formatted_name();
            } else {
                $product_name = $product->get_name();

            }

            $Fechas = get_post_meta($product->get_id(), 'Fechas', true);
            $Actividad = $product_name . ' - ' . $Fechas;
            update_post_meta($order_id, 'Actividad', $Actividad);
            update_post_meta($order_id, 'nsku', $product->sku);
            update_post_meta($order_id, 'act', $product->id);
            //I leave act for the future. next year base querys in act an forget of nsku. fdp 2018
        }
    }
}

// Display field value on the order edit page

add_action('woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1);

function my_custom_checkout_field_display_admin_order_meta($order)
{
    echo '<p><strong>' . __('Actividad') . ':</strong> ' . get_post_meta($order->id, 'Actividad', true) . '</p>';
    echo '<p><strong>' . __('Régimen_especial') . ':</strong> ' . get_post_meta($order->id, 'Régimen_especial', true) . '</p>';
    echo '<p><strong>' . __('Llega_tarde') . ':</strong> ' . get_post_meta($order->id, 'Llega_tarde', true) . '</p>';
    echo '<p><strong>' . __('Comentarios') . ':</strong> ' . get_post_meta($order->id, 'Comentarios', true) . '</p>';
    echo '<p><strong>' . __('Procedencia') . ':</strong> ' . get_post_meta($order->id, 'Procedencia', true) . '</p>';
    echo '<p><strong>' . __('DNI/CUIL') . ':</strong> ' . get_post_meta($order->id, 'DNI/CUIL', true) . '</p>';
}

/* To use: adding customs field in emails
1. Add this snippet to your theme's functions.php file
2. Change the meta key names in the snippet
3. Create a custom field in the order post - e.g. key = "Tracking Code" value = abcdefg
4. When next updating the status, or during any other event which emails the user, they will see this field in their email
 */
add_filter('woocommerce_email_order_meta_keys', 'my_custom_order_meta_keys_4');

function my_custom_order_meta_keys_4($keys_4)
{
    $keys_4[] = 'Actividad'; // This will look for a custom field called 'Actividad' and add it to emails
    return $keys_4;
}

add_filter('woocommerce_email_order_meta_keys', 'my_custom_order_meta_keys_1');

function my_custom_order_meta_keys_1($keys_1)
{
    $keys_1[] = 'Régimen_especial'; // This will look for a custom field called 'Régimen_especial' and add it to emails
    return $keys_1;
}
add_filter('woocommerce_email_order_meta_keys', 'my_custom_order_meta_keys_2');

function my_custom_order_meta_keys_2($keys_2)
{
    $keys_2[] = 'Llega_tarde'; // This will look for a custom field called 'Régimen_especial' and add it to emails
    return $keys_2;
}
add_filter('woocommerce_email_order_meta_keys', 'my_custom_order_meta_keys_3');

function my_custom_order_meta_keys_3($keys_3)
{
    $keys_3[] = 'Comentarios'; // This will look for a custom field called 'Régimen_especial' and add it to emails
    return $keys_3;
}
add_filter('woocommerce_email_order_meta_keys', 'my_custom_order_meta_keys_5');

function my_custom_order_meta_keys_5($keys_5)
{
    $keys_5[] = 'DNI/CUIL'; // This will look for a custom field called 'DNI/CUIL' and add it to emails
    return $keys_5;
}

add_filter('woocommerce_email_order_meta_keys', 'my_custom_order_meta_keys_6');

function my_custom_order_meta_keys_6($keys_6)
{
    $keys_6[] = 'Procedencia'; // This will look for a custom field called 'Procedencia' and add it to emails
    return $keys_6;
}

//Remove image from single product
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);

//remember: I have tried to do remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 ); but didn't word. So, I have remove filter in product shop page, using css, .woocommerce-ordering {display: none;} see snipped code addide via theme options. fdp

//remove thumbnail from shop page...doesn't work. I remove the action directly in the template of the child theme content-product.php. Line 63: //do_action( 'woocommerce_before_shop_loop_item_title' ); I removed this action manually because the hook didn't work. FDP

//borro próximosremove_action, o sea que muestre días, porque vuelvo atrás con layout shop
//removes standard date printed by woo event manager, because I want to show it before the title (look content-product.php, I have added the dates). FDP
//remove_action( 'woocommerce_after_shop_loop_item_title','display_event_date',0 );

//removes add to cart button, function done by woo event manager
remove_action('woocommerce_after_shop_loop_item', 'replace_add_to_cart');

//removes meta data category sky and tags from single page product
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

//if (get_site_url() != network_site_url()){
//$network_site = network_site_url();
//wp_redirect( $network_site, 301 ); I wanted to redirect home of subdirectories to network site home. I save this just in case (i solved it via 301 simple redirect plugin)

//remove_action( 'admin_page_access_denied', '_access_denied_splash', 99 ); this didn't work but I solved it adding a new custom function below, i think it is not need to remove before, due to de wp-die at the end.

add_action('admin_page_access_denied', 'my_plugin_log_permission_error');

function my_plugin_log_permission_error()
{
    if (!is_user_logged_in() || is_network_admin()) {
        return;
    }

    $blogs = get_blogs_of_user(get_current_user_id());

    if (wp_list_filter($blogs, array('userblog_id' => get_current_blog_id()))) {
        return;
    }

    $blog_name = get_bloginfo('name');

    if (empty($blogs)) {
        wp_die(sprintf(__('You attempted to access the "%1$s" dashboard, but you do not currently have privileges on this site. If you believe you should be able to access the "%1$s" dashboard, please contact your network administrator.'), $blog_name), 403);
    }

    //$output = '<p>' . sprintf( __( 'You attempted to access the "%1$s" dashboard, but you do not currently have privileges on this site. If you believe you should be able to access the "%1$s" dashboard, please contact your network administrator.' ), $blog_name ) . '</p>';
    //$output .= '<p>' . __( 'If you reached this screen by accident and meant to visit one of your own sites, here are some shortcuts to help you find your way.' ) . '</p>';

    $output .= '<h3>' . __('Tus Módulos Activos') . '</h3>';
    $output .= '<table>';

    foreach ($blogs as $blog) {
        $output .= '<tr>';
        $output .= "<td>{$blog->blogname}</td>";
        //$output .= '<td><a href="' . esc_url( get_admin_url( $blog->userblog_id ) ) . '">' . __( 'Visit Dashboard' ) .'</a> | ' .
        //    '<a href="' . esc_url( get_home_url( $blog->userblog_id ) ). '">' . __( 'View Site' ) . '</a></td>';
        //$output .= '</tr>';
        $output .= '<td><a href="' . esc_url(get_admin_url($blog->userblog_id)) . '">' . __('Visit Dashboard') . ('-Administrar') . '</a>   ' .
            '</td>';
        $output .= '</tr>';

    }

    $output .= '</table>';
    //$output .= 'Para acceder a nuevos módulos, por favor contacte al administrador de la red'; confusing...

    wp_die($output, 403);
}

// Mark bacs or transfer gateway as processing
add_action('woocommerce_thankyou_bacs', 'markprocessing');

function markprocessing($order_id)
{
    $bacs_order = new WC_Order($order_id);

    if (!empty($bacs_order)) {
        //Possible values: processing, on-hold, cancelled, completed, failed
        $bacs_order->update_status('processing');

    }
}

//customized email instructions by FDP
add_action('woocommerce_email_before_order_table', 'add_order_email_instructions', 10, 2);

function add_order_email_instructions($order, $sent_to_admin)
{

    if (!$sent_to_admin && 'bacs' === $order->payment_method && $order->has_status('processing')) {
        $gw = new WC_Gateway_BACS();

        $reflector = new ReflectionObject($gw);
        $method = $reflector->getMethod('bank_details');
        $method->setAccessible(true);

        $result = $method->invoke($gw, $order->id);
    }

    if (!$sent_to_admin && 'woo-tucuota' == $order->payment_method && $order->has_status('processing')) {

        $total_order = $order->get_total();
        $Cantidad_de_cuotas = get_post_meta($order->id, 'Cantidad de cuotas', true);
        $Monto_de_cuota = get_post_meta($order->id, 'Monto de cuota', true);
        $Precio_Final = get_post_meta($order->id, 'Precio Final', true);

        echo ('<p>Se ha configurado un débito automático para el pago de esta actividad (' . $Cantidad_de_cuotas . ' x $' . $Monto_de_cuota . ' - Precio Final: $' . $Precio_Final . '). No es un pago instantáneo, se debitará en los próximos días.</p>');
    }

    if ($sent_to_admin) {
        //echo '<h2 class="email-upsell-title">Get 20% off</h2><p class="email-upsell-p">Thank you for making this purchase! Come back and use the code "<strong>Back4More</strong>" to receive a 20% discount on your next purchase! Click here to continue shopping.</p>'. $order->payment_method;
        echo '<a href="' . get_home_url() . '/listado/?activ=' . get_post_meta($order->get_id(), 'nsku', true) . '">' . __('VER LISTADO COMPLETO Y ADMINISTRAR') . ('-Administrar') . '</a>';
        //echo '<br>'; NO SE COMO AGREGAR UNA LINEA!
    }
}

//pass variable act to indicate actividad through url i.e .org.ar/?act=actividadej, invoque with the following code
//$activ = get_query_var( 'activ' );

add_action('init', 'add_get_val');
function add_get_val()
{
    global $wp;
    $wp->add_query_var('activ');
    $wp->add_query_var('act');
    $wp->add_query_var('gat');
    $wp->add_query_var('section');
}

//solo un producto en el carrito, si ya existe uno, lo borra al anterior al agregar uno nuevo
add_filter('woocommerce_add_cart_item_data', 'woo_custom_add_to_cart');

function woo_custom_add_to_cart($cart_item_data)
{

    global $woocommerce;
    $woocommerce->cart->empty_cart();

    // Do nothing with the data and return
    return $cart_item_data;
}

// define the wc_add_to_cart_message
function empty_wc_add_to_cart_message($message, $product_id)
{
    return '';
};

// add the filter
add_filter('wc_add_to_cart_message', 'empty_wc_add_to_cart_message', 10, 2);
add_filter('manage_edit-shop_order_columns', 'custom_shop_order_column', 90);
function custom_shop_order_column($columns)
{
    $ordered_columns = array();

    foreach ($columns as $key => $column) {
        $ordered_columns[$key] = $column;
        if ('order_date' == $key) {
            $ordered_columns['order_notes'] = __('Notes', 'woocommerce');
        }
    }

    return $ordered_columns;
}

//The following will enable back the display of Order Notes in WooCommerce 3.3+ admin orders list
add_action('manage_shop_order_posts_custom_column', 'custom_shop_order_list_column_content', 10, 1);
function custom_shop_order_list_column_content($column)
{
    global $post, $the_order;

    $customer_note = $post->post_excerpt;

    if ($column == 'order_notes') {

        if ($the_order->get_customer_note()) {
            echo '<span class="note-on customer tips" data-tip="' . wc_sanitize_tooltip($the_order->get_customer_note()) . '">' . __('Yes', 'woocommerce') . '</span>';
        }

        if ($post->comment_count) {

            $latest_notes = wc_get_order_notes(array(
                'order_id' => $post->ID,
                'limit' => 1,
                'orderby' => 'date_created_gmt',
            ));

            $latest_note = current($latest_notes);

            if (isset($latest_note->content) && 1 == $post->comment_count) {
                echo '<span class="note-on tips" data-tip="' . wc_sanitize_tooltip($latest_note->content) . '">' . __('Yes', 'woocommerce') . '</span>';
            } elseif (isset($latest_note->content)) {
                // translators: %d: notes count
                echo '<span class="note-on tips" data-tip="' . wc_sanitize_tooltip($latest_note->content . '<br/><small style="display:block">' . sprintf(_n('Plus %d other note', 'Plus %d other notes', ($post->comment_count - 1), 'woocommerce'), $post->comment_count - 1) . '</small>') . '">' . __('Yes', 'woocommerce') . '</span>';
            } else {
                // translators: %d: notes count
                echo '<span class="note-on tips" data-tip="' . wc_sanitize_tooltip(sprintf(_n('%d note', '%d notes', $post->comment_count, 'woocommerce'), $post->comment_count)) . '">' . __('Yes', 'woocommerce') . '</span>';
            }
        }
    }
}

// Set Here the WooCommerce icon for your action button
add_action('admin_head', 'add_custom_order_status_actions_button_css');
function add_custom_order_status_actions_button_css()
{
    echo '<style>
    td.order_notes > .note-on { display: inline-block !important;}
    span.note-on.customer { margin-right: 4px !important;}
    span.note-on.customer::after { font-family: woocommerce !important; content: "\e026" !important;}
    </style>';
}

// add a reply to email in case of not being new order email. this is because the from now is a generic noreply@casasdeconvivencias.org.ar
add_filter('woocommerce_email_headers', 'add_reply_to_wc_admin_new_order', 10, 3);

function add_reply_to_wc_admin_new_order($headers = '', $id = '', $order)
{
    if ($id != 'new_order') {

        $reply_to_email = get_option('admin_email');

        $headers .= "Reply-to: <$reply_to_email>\r\n";
    }
    return $headers;
}

/**
 * @snippet       Disable Payment Method for Specific Category
 * @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
 * @sourcecode    https://businessbloomer.com/?p=19892
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 3.5.1
 */

//si se marca con categoría "sin_tarjetas" solamente (destildar cualquier otra como “uncategorized”), la actividad no admite pago con tarjeta.
/**
 * @snippet       Disable Payment Method for Specific Category
 * @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
 * @sourcecode    https://businessbloomer.com/?p=19892
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 3.5.1
 */

add_filter('woocommerce_available_payment_gateways', 'bbloomer_unset_gateway_by_category');

function bbloomer_unset_gateway_by_category($available_gateways)
{
    global $woocommerce;
    $unset = 'nada';
    if ( ! empty( $woocommerce->cart->cart_contents ) ){
        foreach ($woocommerce->cart->cart_contents as $key => $values) {
            $terms = get_the_terms($values['product_id'], 'product_cat');
            foreach ($terms as $term) {
                $term2 = get_term_by('id', $term->term_id, 'product_cat');
                if ($term2->name == 'sin_tarjetas') {
                    $unset = "sin_tarjetas";
    
                } elseif ($term2->name == 'combo') {
                    $unset = "sin_combo";
    
                } elseif ($term2->name == 'sin_efectivo') {
                    $unset = "sin_efectivo";
    
                }
            }
        }
        if ($unset == 'sin_tarjetas') {
            unset($available_gateways['cheque']);
            unset($available_gateways['woo-mercado-pago-basic']);
            unset($available_gateways['other_payment']);
            unset($available_gateways['woo-tucuota']);
        } elseif ($unset == 'sin_efectivo') {
            unset($available_gateways['cod']);
        } elseif ($unset == 'sin_combo') {
            unset($available_gateways['other_payment']);
        }
        return $available_gateways;
    
        if ($unset == 'sin_tarjetas') {
            unset($available_gateways['cheque']);
            unset($available_gateways['woo-mercado-pago-basic']);
            unset($available_gateways['other_payment']);
            unset($available_gateways['woo-tucuota']);
        } elseif ($unset == 'sin_efectivo') {
            unset($available_gateways['cod']);
        }
        return $available_gateways;
        }
    }
    

add_filter('auth_cookie_expiration', 'keep_me_logged_in_for_1_year');

function keep_me_logged_in_for_1_year($expirein)
{
    return 31556926; // 1 year in seconds
}

//avoid duplicate orders to the same activity
add_action('woocommerce_after_checkout_validation', 'post_validate_checkout');

function post_validate_checkout()
{

    global $woocommerce;

    $items = $woocommerce->cart->get_cart();

    $email = $woocommerce->customer->get_billing_email();

    foreach ($items as $item => $values) {
        $_product = wc_get_product($values['data']->get_id());
        $product_id = $_product->get_id();
    }
    // $name = $woocommerce->customer->get_billing_last_name() . ', ' . $woocommerce->customer->get_billing_first_name();
    if (wc_customer_bought_product($email, '', $product_id)) {
        $string = 'Esta dirección de correo electrónico (' . $email . ') ya se inscribió en esta actividad y es probable que haya pagado. Si está seguro de no haber terminado el pago, elija otra dirección de correo electrónico válida y podrá ingresar nuevamente el pago. Si no está seguro de haber pagado, consulte al administrador de la actividad o verifique correos electrónicos recibidos previamente, para evitar pagos duplicados.';
        wc_add_notice($string, 'error');
    }

}

// add_action('woocommerce_process_product_meta', 'validate_start_date');

// function validate_start_date($post_id) {
//     // Get the value of the custom field
//     $start_date = get_post_meta($post_id, 'fecha_inicio', true);
    
//     // Validate the date format
//     if ($start_date && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $start_date)) {
//         // If not valid, show an error
//         wc_add_notice(__('The format of "fecha_inicio" must be "yyyy-mm-dd".', 'your-text-domain'), 'error');
//     }
// }

add_action('woocommerce_process_product_meta', 'validate_dates');

function validate_dates($post_id) {
    // Get the values of the custom fields
    $start_date = get_post_meta($post_id, 'fecha_inicio', true);
    $end_date = get_post_meta($post_id, 'fecha_fin', true);
    
    // Validate the date format for fecha_inicio
    if ($start_date && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $start_date)) {
        // Add a custom message to indicate the saving process should stop
        wp_die(__('El producto no se puede guardar por un error. Corregir y volver a intentar: fecha_inicio debe tener el formato "yyyy-mm-dd". Por ejemplo 4 de enero de 2024 se debe cargar como 2024-01-04', 'your-text-domain'));
    }

    // Validate the date format for fecha_fin
    if ($end_date && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $end_date)) {
        // Add a custom message to indicate the saving process should stop
        wp_die(__('El producto no se puede guardar por un error. Corregir y volver a intentar: fecha_fin debe tener el formato "yyyy-mm-dd". Por ejemplo 4 de enero de 2024 se debe cargar como 2024-01-04', 'your-text-domain'));
    }
}

add_action('woocommerce_account_navigation', 'agregar_boton_mi_cuenta', 10);
function agregar_boton_mi_cuenta() {
    echo '<a href="' . site_url('/dashboard?section=dashboard-products') . '" class="btn btn-primary" style="float: right; margin-right: 10px; padding: 10px 20px; background-color: #0071a1; color: white; border-radius: 5px; text-decoration: none;">Panel Administrador</a>';  
}



// Agregar checkbox de apellido de casada
function agregar_checkbox_ajustes_woocommerce($settings) {
    $new_settings = array();
    foreach ($settings as $setting) {
        $new_settings[] = $setting;
        if (isset($setting['id']) && $setting['id'] === 'woocommerce_default_customer_address') {
            $new_settings[] = array(
                'title'    => __('Apellido de casada', 'storefront-child'),
                'desc'     => __('Activar para usar el apellido de casada en la inscripción', 'storefront-child'),
                'id'       => 'mi_checkbox_personalizado',
                'default'  => 'no',
                'type'     => 'checkbox',
                'section'  => 'general'
            );
        }
    }
    return $new_settings;
}
add_filter('woocommerce_general_settings', 'agregar_checkbox_ajustes_woocommerce');