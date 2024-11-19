<?php
/**
 * Template Name: Verificar Registro
 */

get_header();

if (isset($_GET['token'])) {
    $token = sanitize_text_field($_GET['token']);
    $temp_users = get_option('temporary_users', array());

    if (isset($temp_users[$token])) {
        $user_data = $temp_users[$token];
        
        // Verificar si el token no ha expirado (24 horas)
        if (time() - $user_data['timestamp'] < 86400) {
            // Crear el usuario
            $user_id = wp_create_user(
                $user_data['username'],
                $user_data['password'],
                $user_data['email']
            );

            if (!is_wp_error($user_id)) {
                // Eliminar los datos temporales
                unset($temp_users[$token]);
                update_option('temporary_users', $temp_users);

                // Iniciar sesión automáticamente
                wp_set_current_user($user_id);
                wp_set_auth_cookie($user_id);

                echo '<div class="woocommerce-message">¡Tu cuenta ha sido verificada exitosamente! Serás redirigido al panel de control.</div>';
                echo '<script>setTimeout(function() { window.location.href = "' . home_url('/mi-cuenta') . '"; }, 3000);</script>';
            } else {
                echo '<div class="woocommerce-error">Error al crear la cuenta. Por favor, contacta al administrador.</div>';
            }
        } else {
            echo '<div class="woocommerce-error">El enlace de verificación ha expirado. Por favor, regístrate nuevamente.</div>';
            // Limpiar token expirado
            unset($temp_users[$token]);
            update_option('temporary_users', $temp_users);
        }
    } else {
        echo '<div class="woocommerce-error">Enlace de verificación inválido.</div>';
    }
} else {
    echo '<div class="woocommerce-error">Token de verificación no proporcionado.</div>';
}

get_footer();