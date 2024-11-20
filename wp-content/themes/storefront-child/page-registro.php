<?php

/**
 * Template Name: Página de Registro
 * 
 * @package storefront
 */

?>

<!DOCTYPE html>
<html class="no-js" lang="es-AR" itemscope="itemscope" itemtype="https://schema.org/WebPage">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Casas de Retiros y Convivencias</title>
    <meta name='robots' content='max-image-preview:large, noindex, follow' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="Casas de Retiros y Convivencias &raquo; Feed" href="<?php echo home_url('/feed/'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="Casas de Retiros y Convivencias &raquo; RSS de los comentarios" href="<?php echo home_url('/comments/feed/'); ?>" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "<?php echo includes_url('js/wp-emoji-release.min.js?ver=6.6.2'); ?>"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <!-- <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style> -->
    <link rel='stylesheet' id='wp-block-library-css' href='<?php echo includes_url('css/dist/block-library/style.min.css?ver=6.6.2'); ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='<?php echo plugins_url('woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=8.0.0'); ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-css' href='<?php echo plugins_url('woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=8.0.0'); ?>' type='text/css' media='all' />
    <!-- <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style> -->
    <link rel='stylesheet' id='parent-style-css' href='<?php echo get_template_directory_uri(); ?>/style.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='wcplpro_select2_css-css' href='<?php echo plugins_url('Woocommerce_Products_List_Pro_v1.1.4/select2/select2.css?ver=6.6.2'); ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='wcplpro_css-css' href='<?php echo plugins_url('Woocommerce_Products_List_Pro_v1.1.4/assets/css/wcplpro.css?ver=6.6.2'); ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='virtue_theme-css' href='<?php echo get_template_directory_uri(); ?>/assets/css/virtue.css?ver=3.4.10' type='text/css' media='all' />
    <link rel='stylesheet' id='virtue_skin-css' href='<?php echo get_template_directory_uri(); ?>/assets/css/skins/default.css?ver=3.4.10' type='text/css' media='all' />
    <link rel='stylesheet' id='virtue_child-css' href='<?php echo get_stylesheet_directory_uri(); ?>/style.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='redux-google-fonts-virtue-css' href='https://fonts.googleapis.com/css?family=Lato%3A400%2C700&#038;ver=6.6.2' type='text/css' media='all' />
    <script type="text/javascript">
        window._nslDOMReady = function(callback) {
            if (document.readyState === "complete" || document.readyState === "interactive") {
                callback();
            } else {
                document.addEventListener("DOMContentLoaded", callback);
            }
        };
    </script>
    <script type="text/javascript" src="<?php echo includes_url('js/jquery/jquery.min.js?ver=3.7.1'); ?>" id="jquery-core-js"></script>
    <script type="text/javascript" src="<?php echo includes_url('js/jquery/jquery-migrate.min.js?ver=3.4.1'); ?>" id="jquery-migrate-js"></script>
    <!--[if lt IE 9]>
<script type="text/javascript" src="https://casasdeconvivencias.org.ar/wp-content/themes/virtue/assets/js/vendor/respond.min.js?ver=6.6.2" id="virtue-respond-js"></script>
<![endif]-->
    <script type="text/javascript" src="<?php echo plugins_url('Woocommerce_Products_List_Pro_v1.1.4/select2/select2.min.js?ver=6.6.2'); ?>" id="wcplpro_select2_js-js"></script>
    <script type="text/javascript" src="<?php echo plugins_url('Woocommerce_Products_List_Pro_v1.1.4/assets/js/stupidtable.js?ver=6.6.2'); ?>" id="wcplpro_table_sort-js"></script>
    <script type="text/javascript" id="wcplpro_js-js-extra">
        /* <![CDATA[ */
        var wcplprovars = {
            "ajax_url": "<?php echo admin_url('admin-ajax.php'); ?>",
            "cart_url": "<?php echo wc_get_checkout_url(); ?>",
            "currency_symbol": "$",
            "thousand_separator": ",",
            "decimal_separator": ".",
            "decimal_decimals": "2",
            "currency_pos": "left",
            "price_display_suffix": "",
            "wcplpro_ajax": "0"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="<?php echo plugins_url('Woocommerce_Products_List_Pro_v1.1.4/assets/js/wcplpro.js?ver=6.6.2'); ?>" id="wcplpro_js-js"></script>
    <link rel="https://api.w.org/" href="<?php echo get_rest_url(); ?>" />
    <link rel="alternate" title="JSON" type="application/json" href="<?php echo rest_url('wp/v2/pages/15'); ?>" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo site_url('xmlrpc.php?rsd'); ?>" />
    <meta name="generator" content="WordPress 6.6.2" />
    <meta name="generator" content="WooCommerce 6.8.2" />
    <link rel="canonical" href="<?php echo home_url('/'); ?>" />
    <link rel='shortlink' href='<?php echo home_url('/'); ?>' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="<?php echo rest_url('oembed/1.0/embed?url=' . urlencode(home_url('/'))); ?>" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="<?php echo rest_url('oembed/1.0/embed?url=' . urlencode(home_url('/')) . '&format=xml'); ?>" />
    <link rel="Shortcut Icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon.png" />

</head>

<body class="home page-template-default page page-id-15 wp-embed-responsive theme-virtue woocommerce-no-js boxed">
    <div id="wrapper" class="container">
        <header class="banner headerclass" itemscope itemtype="https://schema.org/WPHeader">
            <div id="topbar" class="topclass">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 kad-topbar-left">
                            <div class="topbarmenu clearfix">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 kad-topbar-right">
                            <div id="topbar-search" class="topbar-widget">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 clearfix kad-header-left">
                        <div id="logo" class="logocase">
                            <a class="brand logofont" href="https://casasdeconvivencias.org.ar/">
                                Casas de Retiros y Convivencias </a>
                            <p class="kad_tagline belowlogo-text">Convivencias y Retiros Espirituales.</p>
                        </div>
                    </div>

                </div>

            </div>
        </header>
</body>

</html>
<?php


// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = sanitize_user($_POST['user_name']);
    $email = sanitize_email($_POST['user_email']);
    $errors = array();

    // Validar reCAPTCHA primero
    if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
        $errors[] = "Por favor, confirma que no eres un robot.";
    } else {
        $secret_key = '6LfX0n4qAAAAANGMR1gBsFLCwbbI5gHVrsFtVfuL';
        $verify = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', array(
            'body' => array(
                'secret' => $secret_key,
                'response' => $_POST['g-recaptcha-response']
            )
        ));

        if (is_wp_error($verify) || empty($verify['body'])) {
            $errors[] = "Error al verificar el captcha. Por favor, intenta nuevamente.";
        } else {
            $verify_response = json_decode($verify['body']);
            if (!$verify_response->success) {
                $errors[] = "La verificación del captcha falló. Por favor, intenta nuevamente.";
            }
        }
    }

    // Si hay errores, mostrarlos
    if (!empty($errors)) {
        echo '<div class="error-messages">';
        foreach ($errors as $error) {
            echo '<p>' . esc_html($error) . '</p>';
        }
        echo '</div>';
    }
}

?>
<style>
    /* Mensajes de error */
    .error-messages {
        background-color: #ff6b6b;
        color: white;
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 20px;
    }

    .error-messages p {
        margin: 5px 0;
    }

    /* Estilo para el mensaje de usuario ya conectado */
    .already-logged-in {
        text-align: center;
        padding: 40px 20px;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .already-logged-in h2 {
        color: #333;
        font-size: 24px;
        margin: 0;
        font-weight: 600;
    }


    /* Mensajes de error */
    .error-messages {
        background-color: #e2401c;
        color: white;
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 20px;
        max-width: 800px;
        margin: 10px auto;
        text-align: center;
    }

    .error-messages p {
        margin: 2px 0;
        font-size: 20px;
    }










    body {
        margin: 0;
        padding: 0;
        min-height: 100vh;
        background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2018/06/grey-background.jpg');
        background-position: 0 0;
        background-repeat: repeat;
        display: flex;
        flex-direction: column;
    }


    .container {
        /* margin: 0 auto; */
        /* padding: 0 15px; */
        max-width: 1200px;
        width: 100%;
    }



    .headerclass {
        background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2018/06/header-background-mirror-final-2.jpg') no-repeat;
        padding: 10px 0;
        margin: 0;
        border-top: 0;
        width: 100%;
    }

    /* Logo y título */
    #logo {
        padding: 25px 0 10px;
        margin: 0;
    }

    #logo.logocase {
        margin: 0 auto;
        padding: 10px 0;
        text-align: center;
        width: 100%;
    }

    .brand.logofont {
        font-family: Lato;
        font-size: 28px;
        line-height: 1.2;
        font-weight: 400;
        color: #ffffff;
        text-align: center;
        display: block;
    }

    /* Navegación */
    #nav-main {
        margin: 40px 0 10px;
    }

    /* ==========================================================================
        4. Contenido Principal
        ========================================================================== */
    /* .contentclass {
        background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2018/06/beige-minimal-background-pattern-wordpress-8.jpg') repeat;
    } */

    #content.container.container-contained {
        flex: 1;
        padding: 10px 10px 0;
        margin-bottom: 0;
    }

    .entry-content {
        flex: 1;
    }

    /* Títulos de página */
    .page-header {
        text-align: center;
        padding: 10px 0;
        margin: 0;
    }

    /* .page-header h1.entry-title {
        font-size: 2.5em;
        color: #333;
        margin: 0;
        font-weight: 600;
        padding: 5px 0;
    } */

    /* ==========================================================================
            5. Footer
            ========================================================================== */
    #containerfooter.footerclass {
        width: 100%;
        max-width: 1200px;
        margin: 0 0;
        /* Esto centrará el footer */
        padding: 0;
        background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2018/06/beige-minimal-background-pattern-wordpress-8.jpg') repeat;
        position: relative;
        /* Ayuda con el posicionamiento */
        left: 50%;
        /* Parte del centrado */
        transform: translateX(-50%);
        /* Completa el centrado perfecto */
    }

    /* #containerfooter .container { */
    /* max-width: 900px; */
    /* margin: 0 0;
            padding: 20px 15px;
            width: 100%; */
    /* box-sizing: border-box; */
    /* } */

    .footercredits {
        text-align: left;
        padding: 20px 20px;
        margin: 0;
    }

    .footercredits a {
        color: #0088ff;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footercredits a:hover {
        color: #0410fa;
    }

    /* Widget área */
    .footercol1 {
        padding: 20px;
        margin: 0;
    }

    .footer-widget {
        padding: 15px;
        margin: 0;
        background: transparent;
    }





    header #logo a.brand,
    .logofont {
        font-family: Lato;
        line-height: 40px;
        font-weight: 400;
        font-style: normal;
        color: #ffffff;
        font-size: 32px;
    }

    .kad_tagline {
        font-family: Lato;
        line-height: 20px;
        font-weight: 400;
        font-style: normal;
        color: #ffffff;
        font-size: 14px;
    }

    .product_item .product_details h5 {
        font-family: Lato;
        line-height: 20px;
        font-weight: 700;
        font-style: normal;
        font-size: 16px;
    }


    /* Estructura base */
    #wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        /* Centra los elementos hijos */
    }

    /* Contenedor principal del formulario */
    .signup-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding-left: 55px;
        display: flex;
        flex-direction: column;
        align-items: center;
        box-sizing: border-box;
    }



    /* Formulario */
    #signup-form {
        width: 100%;
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
        box-sizing: border-box;
    }

    /* Contenedor del reCAPTCHA */
    .recaptcha-container {
        width: 100%;
        display: flex;
        justify-content: center;
        margin: 20px 0;
    }

    /* Botón */
    .submit-button {
        width: 100%;
        margin: 20px 0;
        background-color: #0088ff;
    }


    /* Botón */
    .submit-button:hover {
        background-color: #0410fa;
        width: 100%;
        margin: 20px 0;
    }


    .form-group label {
        display: block;
        font-weight: 700;
        margin-bottom: 8px;
        color: #333;
        font-size: 18px;
        font-family: 'Arial', sans-serif;
    }

    .form-group input {
        width: 100%;
        padding: 12px;
        border: 2px solid #0088ff;
        border-radius: 4px;
        font-size: 16px;
    }

    .description {
        font-size: 14px;
        color: #333333;
        margin-top: 5px;
        font-style: italic;
    }

    /* Título */
    .signup-container h1 {
        width: 100%;
        max-width: 1100px;
        text-align: center;
        margin-bottom: 30px;
        padding-left: 40px;
        box-sizing: border-box;
        font-size: 32px;
        /* Reducido de su tamaño original */
        line-height: 1.4;
        /* Ajustado para mejor legibilidad */
    }




    #primary.content-area {
        margin-bottom: 0;
        /* Reducido a 0 */
        padding-bottom: 0;
        /* Asegura que no haya padding inferior */
    }

    /* También puedes ajustar el main dentro del content-area */
    #main.site-main {
        margin-bottom: 0;
        padding-bottom: 0;
    }

    /* Y asegurarte que el formulario también tenga menos espacio al final */
    #signup-form {
        margin-bottom: 10px;
        /* Reducido para menos espacio antes del footer */
    }
</style>

<!-- Agregar script de reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php //get_header(); 
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        // Verificar si el usuario ya está logueado
        if (is_user_logged_in()) {
        ?>
            <div class="signup-container">
                <div class="already-logged-in">
                    <h2>Ya estás conectado. ¡No necesitás registrarte de nuevo!</h2>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="signup-container">
                <h1>Consigue tu propia cuenta en Casas de Convivencias y Retiros Espirituales Sitios en segundos.</h1>

                <form id="signup-form" method="post">
                    <div class="form-group">
                        <label for="user_name">Nombre de usuario:</label>
                        <input type="text" id="user_name" name="user_name" required>
                        <p class="description">(Deben tener como mínimo 4 caracteres, solo letras y números.)</p>
                    </div>

                    <div class="form-group">
                        <label for="user_email">Dirección de correo electrónico:</label>
                        <input type="email" id="user_email" name="user_email" required>
                        <p class="description">Tu correo electrónico de registro se envía a esta dirección. (Comprueba tu dirección de correo antes de continuar.)</p>
                    </div>

                    <!-- Agregar reCAPTCHA -->
                    <div class="form-group recaptcha-container">
                        <div class="g-recaptcha" data-sitekey="6LfX0n4qAAAAADG3VOYz7TO2Mw3uAXj-0qOiTQb1"></div>
                    </div>

                    <button type="submit" class="submit-button">Siguiente</button>
                </form>
            </div>
        <?php
        }
        ?>
    </main>
</div>
<footer id="containerfooter" class="footerclass" itemscope itemtype="https://schema.org/WPFooter">
    <div class="container">
        <div class="footercredits clearfix">

            <p>ENLACES EXTERNOS : <b><a href="www.opusdei.org.ar">Página del Opus Dei</a> - <a href="https://opusdei.org/es-es/section/san-josemaria/">Página de San Josemaría</a></b>
            </p>
        </div>

    </div>

</footer>

<?php
//get_footer();
