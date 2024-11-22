<?php
// Enqueue parent theme styles
function storefront_child_enqueue_styles() {
    wp_enqueue_style('storefront-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'storefront_child_enqueue_styles');


// Asegurarse de que los estilos del tema hijo se cargan después del tema padre
// function storefront_child_enqueue_styles() {
//     wp_enqueue_style('storefront-style', get_template_directory_uri() . '/style.css');
//     wp_enqueue_style('storefront-child-style', 
//         get_stylesheet_directory_uri() . '/style.css',
//         array('storefront-style'),
//         wp_get_theme()->get('Version')
//     );
// }
// add_action('wp_enqueue_scripts', 'storefront_child_enqueue_styles', 11);

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

// Agregar reCAPTCHA al formulario de login de WordPress
function add_recaptcha_to_login() {
?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <div class="g-recaptcha" data-sitekey="<?php echo esc_attr(RECAPTCHA_SITE_KEY); ?>"></div>
    <style>
        .g-recaptcha {
            margin: 5px auto 20px auto;
            display: flex;
            justify-content: center;
            width: 100%;
        }
        #login_error {
            border-left-color: #dc3232;
        }
    </style>
<?php
}
add_action('login_form', 'add_recaptcha_to_login');
add_action('register_form', 'add_recaptcha_to_login');
add_action('signup_extra_fields', 'add_recaptcha_to_login');

// Verificar reCAPTCHA para login y registro de WordPress
function verify_recaptcha_login($user, $username = null, $password = null) {
    // No verificar en ciertas situaciones
    if (!isset($_POST['wp-submit']) && !isset($_POST['signup_submit']) && !isset($_POST['submit'])) {
        return $user;
    }

    if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
        remove_action('authenticate', 'wp_authenticate_username_password', 20);
        return new WP_Error('captcha_error', '<strong>ERROR</strong>: Debes confirmar que no eres un robot.');
    }

    $recaptcha_secret = '6LfX0n4qAAAAANGMR1gBsFLCwbbI5gHVrsFtVfuL';
    $response = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', [
        'body' => [
            'secret' => $recaptcha_secret,
            'response' => $_POST['g-recaptcha-response']
        ]
    ]);

    if (is_wp_error($response) || empty($response['body'])) {
        return new WP_Error('captcha_error', '<strong>ERROR</strong>: Error al verificar el captcha. Por favor, intenta nuevamente.');
    }

    $response_body = json_decode($response['body']);
    if (!$response_body->success) {
        return new WP_Error('captcha_error', '<strong>ERROR</strong>: La verificación del CAPTCHA falló. Por favor intenta nuevamente.');
    }

    return $user;
}
add_filter('authenticate', 'verify_recaptcha_login', 1, 3);
add_filter('registration_errors', 'verify_recaptcha_login', 1, 3);
add_filter('wpmu_validate_user_signup', 'verify_recaptcha_login', 1, 3);


// Verificar reCAPTCHA en el registro
// function verify_recaptcha_register($errors, $sanitized_user_login, $user_email) {
//     if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
//         $errors->add('captcha_error', '<strong>ERROR</strong>: Debes confirmar que no eres un robot.');
//         return $errors;
//     }

//     $recaptcha_secret = '6LfX0n4qAAAAANGMR1gBsFLCwbbI5gHVrsFtVfuL';
//     $response = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', [
//         'body' => [
//             'secret' => $recaptcha_secret,
//             'response' => $_POST['g-recaptcha-response']
//         ]
//     ]);

//     if (is_wp_error($response) || empty($response['body'])) {
//         $errors->add('captcha_error', '<strong>ERROR</strong>: Error al verificar el captcha. Por favor, intenta nuevamente.');
//         return $errors;
//     }

//     $response_body = json_decode($response['body']);
//     if (!$response_body->success) {
//         $errors->add('captcha_error', '<strong>ERROR</strong>: La verificación del CAPTCHA falló. Por favor intenta nuevamente.');
//     }

//     return $errors;
// }
// add_filter('registration_errors', 'verify_recaptcha_register', 10, 3);

// Agregar reCAPTCHA a los formularios de WooCommerce mi-cuenta
function add_recaptcha_to_woocommerce_forms() {
    if (is_account_page() && !is_user_logged_in()) {
?>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <div class="g-recaptcha" data-sitekey="<?php echo esc_attr(RECAPTCHA_SITE_KEY); ?>"></div>
        <style>
            .g-recaptcha {
                margin: 10px 0;
                display: flex;
                justify-content: left;
                width: 100%;
            }
        </style>
<?php
    }
}
add_action('woocommerce_login_form', 'add_recaptcha_to_woocommerce_forms');
add_action('woocommerce_register_form', 'add_recaptcha_to_woocommerce_forms');

// Verificar reCAPTCHA para WooCommerce
function verify_recaptcha_woocommerce($validation_error) {
    if (!(isset($_POST['login']) || isset($_POST['register']))) {
        return $validation_error;
    }

    if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
        return new WP_Error('captcha_error', 'Por favor verifica que no eres un robot antes de continuar.');
    }

    $recaptcha_secret = '6LfX0n4qAAAAANGMR1gBsFLCwbbI5gHVrsFtVfuL';
    $verify_response = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', [
        'body' => [
            'secret' => $recaptcha_secret,
            'response' => $_POST['g-recaptcha-response']
        ]
    ]);

    if (is_wp_error($verify_response) || empty($verify_response['body'])) {
        return new WP_Error('captcha_error', 'Error al verificar el captcha. Por favor, intenta nuevamente.');
    }

    $response_data = json_decode($verify_response['body']);
    if (!$response_data->success) {
        return new WP_Error('captcha_error', 'La verificación del captcha falló. Por favor intenta nuevamente.');
    }

    return $validation_error;
}
add_filter('woocommerce_process_login_errors', 'verify_recaptcha_woocommerce', 10, 1);
add_filter('woocommerce_process_registration_errors', 'verify_recaptcha_woocommerce', 10, 1);

// Asegurarse que el registro está habilitado
function enable_registration() {
    update_option('users_can_register', 1);
}
add_action('init', 'enable_registration');



// Redireccionar después de cerrar sesión
function custom_logout_redirect() {
    wp_redirect(wc_get_page_permalink('myaccount'));
    exit();
}
add_action('wp_logout', 'custom_logout_redirect');






// // Función para procesar el login
// function procesar_login_personalizado($username, $password, $recaptcha_response) {
//     if (!isset($recaptcha_response) || empty($recaptcha_response)) {
//         return new WP_Error('recaptcha_error', 'Por favor verifica que no eres un robot');
//     }

//     $creds = array(
//         'user_login'    => $username,
//         'user_password' => $password
//     );

//     return wp_signon($creds, false);
// }

// // Función para procesar el registro
// function procesar_registro_personalizado($email) {
//     if (email_exists($email)) {
//         return new WP_Error('email_exists', 'Este correo electrónico ya está registrado.');
//     }

//     $username = sanitize_user(current(explode('@', $email)));
//     $random_password = wp_generate_password();
//     $user_id = wp_create_user($username, $random_password, $email);

//     if (!is_wp_error($user_id)) {
//         wp_new_user_notification($user_id, null, 'both');
//         return true;
//     }

//     return $user_id; // Retorna el error si falló
// }

// // Función para obtener datos del usuario
// function obtener_datos_usuario_actual() {
//     if (!is_user_logged_in()) {
//         return false;
//     }

//     $current_user = wp_get_current_user();
//     return array(
//         'nombre' => $current_user->display_name,
//         'email' => $current_user->user_email,
//         'fecha_registro' => $current_user->user_registered
//     );
// }


function agregar_estilos_personalizados() {
    if (is_account_page()) {
        ?>
        <style>
        /* Mensajes de error */
        .woocommerce-error {
            background-color: #e2401c;
            color: #fff;
            padding: 15px !important;
            border-radius: 4px;
            margin-bottom: 20px;
            padding-left: 15px !important;
        }

        .woocommerce-error::before {
            display: none !important;
        }
        </style>
        <?php
    }
}
add_action('wp_head', 'agregar_estilos_personalizados');






// Configurar SMTP de Gmail
// function configurar_smtp_gmail($phpmailer) {
//     $phpmailer->isSMTP();
//     $phpmailer->Host = 'smtp.gmail.com';
//     $phpmailer->SMTPAuth = true;
//     $phpmailer->Port = 587;
//     $phpmailer->Username = 'tu_correo@gmail.com'; // Tu correo de Gmail
//     $phpmailer->Password = 'tu_contraseña_de_aplicacion'; // Contraseña de aplicación de Gmail
//     $phpmailer->SMTPSecure = 'tls';
//     $phpmailer->From = 'tu_correo@gmail.com';
//     $phpmailer->FromName = 'Casas de Convivencias';
// }
// add_action('phpmailer_init', 'configurar_smtp_gmail');


// Agregar botón de Google al formulario de login
// function agregar_boton_google_login() {
    
//     if (function_exists('NextendSocialLogin')) {
//         echo '<div class="google-login-button" style="margin-top: 20px; text-align: center;">';
//         echo do_shortcode('[nextend_social_login provider="google"]');
//         echo '</div>';
//     }
// }
// add_action('form_login', 'agregar_boton_google_login');