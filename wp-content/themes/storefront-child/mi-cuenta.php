<?php

/**
 * Template Name: Mi cuenta
 * 
 * @package storefront
 */


// Punto de entrada principal
//get_header();

if (is_user_logged_in()) {

    mostrar_panel_usuario();
} else {
    mostrar_login_registro();
}

//get_footer();


function mostrar_panel_usuario()
{
?>
    <?php //get_header(); 
    ?>



    <!DOCTYPE html>
    <html class="no-js" lang="es-AR" itemscope="itemscope" itemtype="https://schema.org/WebPage">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mi cuenta &#8211; Casas de Retiros y Convivencias</title>
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
        <link rel='stylesheet' id='dashicons-css' href='<?php echo includes_url('css/dashicons.min.css?ver=6.6.2'); ?>' type='text/css' media='all' />
        <link rel='stylesheet' id='admin-bar-css' href='<?php echo includes_url('css/admin-bar.min.css?ver=6.6.2'); ?>' type='text/css' media='all' />
        <style id='admin-bar-inline-css' type='text/css'>
            @media screen {
                html {
                    margin-top: 32px !important;
                }
            }

            @media screen and (max-width: 782px) {
                html {
                    margin-top: 46px !important;
                }
            }

            @media print {
                #wpadminbar {
                    display: none;
                }
            }
        </style>
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
        <link rel='stylesheet' id='select2-css' href='<?php echo plugins_url('woocommerce/assets/css/select2.css?ver=6.8.2'); ?>' type='text/css' media='all' />
        <style id='woocommerce-inline-inline-css' type='text/css'>
            .woocommerce form .form-row .required {
                visibility: visible;
            }
        </style>
        <link rel='stylesheet' id='parent-style-css' href='<?php echo get_template_directory_uri(); ?>/style.css?ver=6.6.2' type='text/css' media='all' />
        <link rel='stylesheet' id='wcplpro_css-css' href='<?php echo plugins_url(); ?>/Woocommerce_Products_List_Pro_v1.1.4/assets/css/wcplpro.css?ver=6.6.2' type='text/css' media='all' />
        <link rel='stylesheet' id='virtue_theme-css' href='<?php echo get_template_directory_uri(); ?>/assets/css/virtue.css?ver=3.4.10' type='text/css' media='all' />
        <link rel='stylesheet' id='virtue_skin-css' href='<?php echo get_template_directory_uri(); ?>/assets/css/skins/default.css?ver=3.4.10' type='text/css' media='all' />
        <link rel='stylesheet' id='virtue_child-css' href='<?php echo get_stylesheet_directory_uri(); ?>/style.css?ver=1.0.0' type='text/css' media='all' />
        <link rel='stylesheet' id='redux-google-fonts-virtue-css' href='https://fonts.googleapis.com/css?family=Lato%3A400%2C700&#038;ver=6.6.2' type='text/css' media='all' />
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
        <script type="text/javascript" src="<?php echo plugins_url('Woocommerce_Products_List_Pro_v1.1.4/assets/js/stupidtable.js?ver=6.6.2'); ?>" id="wcplpro_table_sort-js"></script>
        <link rel="https://api.w.org/" href="<?php echo home_url('/wp-json/'); ?>" />
        <link rel="alternate" title="JSON" type="application/json" href="<?php echo home_url('/wp-json/wp/v2/pages/7'); ?>" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo home_url('/xmlrpc.php?rsd'); ?>" />
        <meta name="generator" content="WordPress 6.6.2" />
        <meta name="generator" content="WooCommerce 6.8.2" />
        <link rel="canonical" href="/mi-cuenta/" />
        <link rel='shortlink' href='<?php echo home_url('/?p=7'); ?>' />
        <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="<?php echo home_url('/wp-json/oembed/1.0/embed?url=' . urlencode(get_permalink())); ?>" />
        <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="<?php echo home_url('/wp-json/oembed/1.0/embed?url=' . urlencode(get_permalink()) . '&format=xml'); ?>" />
        <link rel="Shortcut Icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon.png" />
        <style type="text/css">
            #logo {
                padding-top: 25px;
            }

            #logo {
                padding-bottom: 10px;
            }

            #logo {
                margin-left: 0px;
            }

            #logo {
                margin-right: 0px;
            }

            #nav-main {
                margin-top: 40px;
            }

            #nav-main {
                margin-bottom: 10px;
            }

            .headerfont,
            .tp-caption {
                font-family: Lato;
            }

            .topbarmenu ul li {
                font-family: Lato;
            }

            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            input[type=number] {
                -webkit-appearance: none;
                -moz-appearance: textfield;
                appearance: none;
            }

            .quantity input::-webkit-outer-spin-button,
            .quantity input::-webkit-inner-spin-button {
                display: none;
            }

            .contentclass,
            .nav-tabs>.active>a,
            .nav-tabs>.active>a:hover,
            .nav-tabs>.active>a:focus {
                background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2018/06/beige-minimal-background-pattern-wordpress-8.jpg') repeat;
            }

            .topclass {
                background: transparent;
            }

            .headerclass {
                background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2018/06/header-background-mirror-final-2.jpg') no-repeat;
            }

            body {
                background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2018/06/grey-background.jpg');
                background-position: 0% 0%;
                background-repeat: repeat;
            }

            .product_item .product_details h5 {
                text-transform: none;
            }

            @media (max-width: 979px) {
                .nav-trigger .nav-trigger-case {
                    position: static;
                    display: block;
                    width: 100%;
                }
            }

            .product_item .product_details h5 {
                min-height: 40px;
            }

            .entry-content p {
                margin-bottom: 16px;
            }
        </style> <noscript>
            <style>
                .woocommerce-product-gallery {
                    opacity: 1 !important;
                }
            </style>
        </noscript>


        <style>
            /* Estilo para el título principal */
            /* .container h1 {
            text-align: center;
            font-weight: 700;
            font-size: 32px;
            color: #333;
            margin-bottom: 20px;
            line-height: 1.4;
            font-family: 'Arial', sans-serif;
            position: relative;
        } */






            /* Enlaces */
            .woocommerce-LostPassword {
                text-align: center;
                margin-top: 20px;
            }

            .woocommerce-LostPassword a {
                color: #686767;
                text-decoration: underline;
            }





            /* ==========================================================================
        1. Estilos Básicos y Reset
        ========================================================================== */
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

            /* ==========================================================================
        2. Estructura Principal
        ========================================================================== */
            #wrapper {
                margin: 0 auto;
                padding: 0;
                max-width: 1200px;
                width: 100%;
                flex: 1;
                display: flex;
                flex-direction: column;
            }

            .container {
                margin: 0 auto;
                padding: 0 15px;
                max-width: 1200px;
                width: 100%;
            }

            /* ==========================================================================
        3. Header y Navegación
        ========================================================================== */
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
            .contentclass {
                background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2018/06/beige-minimal-background-pattern-wordpress-8.jpg') repeat;
            }

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

            .page-header h1.entry-title {
                font-size: 2.5em;
                color: #333;
                margin: 0;
                font-weight: 600;
                padding: 5px 0;
            }

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
        </style>
    </head>

    <body class="page-template-default page page-id-7 logged-in admin-bar no-customize-support wp-embed-responsive theme-virtue woocommerce-account woocommerce-page woocommerce-no-js boxed mi-cuenta">

        <script type="text/javascript">
            /* <![CDATA[ */

            (function() {
                var request, b = document.body,
                    c = 'className',
                    cs = 'customize-support',
                    rcs = new RegExp('(^|\\s+)(no-)?' + cs + '(\\s+|$)');

                request = true;

                b[c] = b[c].replace(rcs, ' ');
                // The customizer requires postMessage and CORS (if the site is cross domain).
                b[c] += (window.postMessage && request ? ' ' : ' no-') + cs;
            }());

            /* ]]> */
        </script>
        <div id="wpadminbar" class="nojq nojs">
            <div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Barra de herramientas">
                <ul role='menu' id='wp-admin-bar-root-default' class="ab-top-menu">
                    <li role='group' id='wp-admin-bar-wp-logo' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='<?php echo admin_url('about.php'); ?>'><span class="ab-icon" aria-hidden="true"></span><span class="screen-reader-text">Acerca de WordPress</span></a>
                        <div class="ab-sub-wrapper">
                            <ul role='menu' aria-label='Acerca de WordPress' id='wp-admin-bar-wp-logo-default' class="ab-submenu">
                                <li role='group' id='wp-admin-bar-about'><a class='ab-item' role="menuitem" href='<?php echo admin_url('about.php'); ?>'>Acerca de WordPress</a></li>
                                <li role='group' id='wp-admin-bar-contribute'><a class='ab-item' role="menuitem" href='<?php echo admin_url('contribute.php'); ?>'>Unite</a></li>
                            </ul>
                            <ul role='menu' aria-label='Acerca de WordPress' id='wp-admin-bar-wp-logo-external' class="ab-sub-secondary ab-submenu">
                                <li role='group' id='wp-admin-bar-wporg'><a class='ab-item' role="menuitem" href='https://es-ar.wordpress.org/'>WordPress.org</a></li>
                                <li role='group' id='wp-admin-bar-documentation'><a class='ab-item' role="menuitem" href='https://wordpress.org/documentation/'>Documentación</a></li>
                                <li role='group' id='wp-admin-bar-learn'><a class='ab-item' role="menuitem" href='https://learn.wordpress.org/'>Aprendé WordPress</a></li>
                                <li role='group' id='wp-admin-bar-support-forums'><a class='ab-item' role="menuitem" href='https://wordpress.org/support/forums/'>Asistencia</a></li>
                                <li role='group' id='wp-admin-bar-feedback'><a class='ab-item' role="menuitem" href='https://es.wordpress.org/support/forum/comunidad/peticiones-y-feedback/'>Sugerencias</a></li>
                            </ul>
                        </div>
                    </li>
                    <li role='group' id='wp-admin-bar-my-sites' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='<?php echo admin_url('my-sites.php'); ?>'>Mis sitios</a>
                        <div class="ab-sub-wrapper">
                            <ul role='menu' id='wp-admin-bar-my-sites-list' class="ab-submenu">
                                <li role='group' id='wp-admin-bar-blog-1' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='<?php echo admin_url(); ?>'><span class="wp-admin-bar-arrow" aria-hidden="true"></span>
                                        <div class="blavatar"></div>Casas de Retiros y Convivencias
                                    </a>
                                    <div class="ab-sub-wrapper">
                                        <ul role='menu' id='wp-admin-bar-blog-1-default' class="ab-submenu">
                                            <li role='group' id='wp-admin-bar-blog-1-d'><a class='ab-item' role="menuitem" href='<?php echo admin_url(); ?>'>Escritorio</a></li>
                                            <li role='group' id='wp-admin-bar-blog-1-n'><a class='ab-item' role="menuitem" href='<?php echo admin_url('post-new.php'); ?>'>Nueva entrada</a></li>
                                            <li role='group' id='wp-admin-bar-blog-1-c'><a class='ab-item' role="menuitem" href='<?php echo admin_url('edit-comments.php'); ?>'>Gestionar comentarios</a></li>
                                            <li role='group' id='wp-admin-bar-blog-1-v'><a class='ab-item' role="menuitem" href='<?php echo home_url(); ?>'>Visitar sitio</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li role='group' id='wp-admin-bar-site-name' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='<?php echo admin_url(); ?>'>Casas de Retiros y Convivencias</a>
                        <div class="ab-sub-wrapper">
                            <ul role='menu' aria-label='Casas de Retiros y Convivencias' id='wp-admin-bar-site-name-default' class="ab-submenu">
                                <li role='group' id='wp-admin-bar-dashboard'><a class='ab-item' role="menuitem" href='<?php echo admin_url(); ?>'>Escritorio</a></li>
                            </ul>
                            <ul role='menu' aria-label='Casas de Retiros y Convivencias' id='wp-admin-bar-appearance' class="ab-submenu">
                                <li role='group' id='wp-admin-bar-themes'><a class='ab-item' role="menuitem" href='<?php echo admin_url('themes.php'); ?>'>Temas</a></li>
                                <li role='group' id='wp-admin-bar-widgets'><a class='ab-item' role="menuitem" href='<?php echo admin_url('widgets.php'); ?>'>Widgets</a></li>
                                <li role='group' id='wp-admin-bar-menus'><a class='ab-item' role="menuitem" href='<?php echo admin_url('nav-menus.php'); ?>'>Menús</a></li>
                            </ul>
                        </div>
                    </li>
                    <li role='group' id='wp-admin-bar-customize' class="hide-if-no-customize"><a class='ab-item' role="menuitem" href='<?php echo admin_url('customize.php?url=' . urlencode(get_permalink())); ?>'>Personalizar</a></li>
                    <li role='group' id='wp-admin-bar-comments'><a class='ab-item' role="menuitem" href='<?php echo admin_url('edit-comments.php'); ?>'><span class="ab-icon" aria-hidden="true"></span><span class="ab-label awaiting-mod pending-count count-159" aria-hidden="true">159</span><span class="screen-reader-text comments-in-moderation-text">159 comentarios en moderación</span></a></li>
                    <li role='group' id='wp-admin-bar-new-content' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='<?php echo admin_url('post-new.php'); ?>'><span class="ab-icon" aria-hidden="true"></span><span class="ab-label">Agregar</span></a>
                        <div class="ab-sub-wrapper">
                            <ul role='menu' aria-label='Agregar' id='wp-admin-bar-new-content-default' class="ab-submenu">
                                <li role='group' id='wp-admin-bar-new-post'><a class='ab-item' role="menuitem" href='<?php echo admin_url('post-new.php'); ?>'>Entrada</a></li>
                                <li role='group' id='wp-admin-bar-new-media'><a class='ab-item' role="menuitem" href='<?php echo admin_url('media-new.php'); ?>'>Medio</a></li>
                                <li role='group' id='wp-admin-bar-new-page'><a class='ab-item' role="menuitem" href='<?php echo admin_url('post-new.php?post_type=page'); ?>'>Página</a></li>
                                <li role='group' id='wp-admin-bar-new-portfolio'><a class='ab-item' role="menuitem" href='<?php echo admin_url('post-new.php?post_type=portfolio'); ?>'>Portfolio Item</a></li>
                                <li role='group' id='wp-admin-bar-new-product'><a class='ab-item' role="menuitem" href='<?php echo admin_url('post-new.php?post_type=product'); ?>'>Producto</a></li>
                                <li role='group' id='wp-admin-bar-new-shop_order'><a class='ab-item' role="menuitem" href='<?php echo admin_url('post-new.php?post_type=shop_order'); ?>'>Pedido</a></li>
                                <li role='group' id='wp-admin-bar-new-shop_coupon'><a class='ab-item' role="menuitem" href='<?php echo admin_url('post-new.php?post_type=shop_coupon'); ?>'>Cupón</a></li>
                                <li role='group' id='wp-admin-bar-new-user'><a class='ab-item' role="menuitem" href='<?php echo admin_url('user-new.php'); ?>'>Usuario</a></li>
                            </ul>
                        </div>
                    </li>
                    <li role='group' id='wp-admin-bar-edit'><a class='ab-item' role="menuitem" href='<?php echo admin_url('post.php?post=7&action=edit'); ?>'>Editar página</a></li>
                </ul>
                <ul role='menu' id='wp-admin-bar-top-secondary' class="ab-top-secondary ab-top-menu">
                    <li role='group' id='wp-admin-bar-my-account' class="menupop with-avatar">
                        <a class='ab-item' role="menuitem" aria-expanded="false" href='<?php echo admin_url('profile.php'); ?>'>
                            Hola, <span class="display-name"><?php echo wp_get_current_user()->display_name; ?></span>
                            <?php echo get_avatar(get_current_user_id(), 26); ?>
                        </a>
                        <div class="ab-sub-wrapper">
                            <ul role='menu' aria-label='Hola, <?php echo wp_get_current_user()->display_name; ?>' id='wp-admin-bar-user-actions' class="ab-submenu">
                                <li role='group' id='wp-admin-bar-user-info'>
                                    <a class='ab-item' role="menuitem" href='<?php echo admin_url('profile.php'); ?>'>
                                        <?php echo get_avatar(get_current_user_id(), 64); ?>
                                        <span class='display-name'><?php echo wp_get_current_user()->display_name; ?></span>
                                        <span class='display-name edit-profile'>Editar el perfil</span>
                                    </a>
                                </li>
                                <li role='group' id='wp-admin-bar-logout'><a class='ab-item' role="menuitem" href='<?php echo wp_logout_url(); ?>'>Cerrar sesión</a></li>
                            </ul>
                        </div>
                    </li>
                    <li role='group' id='wp-admin-bar-search' class="admin-bar-search">
                        <div class="ab-item ab-empty-item" tabindex="-1" role="menuitem">
                            <form action="<?php echo home_url('/'); ?>" method="get" id="adminbarsearch">
                                <input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" />
                                <label for="adminbar-search" class="screen-reader-text">Buscar</label>
                                <input type="submit" class="adminbar-button" value="Buscar" />
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        <div id="wrapper" class="container">
            <header class="banner headerclass" itemscope itemtype="https://schema.org/WPHeader">
                <div id="topbar" class="topclass">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 kad-topbar-left">
                                <div class="topbarmenu clearfix">
                                </div>
                            </div><!-- close col-md-6 -->
                            <div class="col-md-6 col-sm-6 kad-topbar-right">
                                <div id="topbar-search" class="topbar-widget">
                                </div>
                            </div> <!-- close col-md-6-->
                        </div> <!-- Close Row -->
                    </div> <!-- Close Container -->
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 clearfix kad-header-left">
                            <div id="logo" class="logocase">
                                <a class="brand logofont" href="<?php echo home_url(); ?>">
                                    Casas de Retiros y Convivencias </a>
                                <p class="kad_tagline belowlogo-text">Convivencias y Retiros Espirituales.</p>
                            </div> <!-- Close #logo -->
                        </div><!-- close logo span -->
                    </div> <!-- Close Row -->
                </div> <!-- Close Container -->
            </header>
            <?php
            // Obtener datos del usuario actual
            $current_user = wp_get_current_user();
            $user_id = $current_user->ID;
            $user_name = $current_user->display_name;
            $user_email = $current_user->user_email;

            // Obtener meta datos adicionales si los necesitas
            $billing_address = get_user_meta($user_id, 'billing_address_1', true);
            $billing_city = get_user_meta($user_id, 'billing_city', true);

            // Obtener el avatar del usuario
            $avatar = get_avatar($user_id, 150);
            ?>

            <style>
                /* Contenedor principal que organiza el perfil en dos columnas usando flexbox */
                .user-profile-header {
                    display: flex;
                    align-items: flex-start;
                    margin-bottom: 30px;
                    padding: 20px;
                    border-radius: 8px;
                }

                /* Columna izquierda que contiene avatar, nombre y navegación */
                .user-profile-left {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    width: 200px;
                }

                /* Contenedor de la imagen de perfil */
                .user-avatar {
                    margin-bottom: 15px;
                    text-align: center;
                }

                /* Estilos para la imagen de perfil circular */
                .user-avatar img {
                    border-radius: 50%;
                    /* Hace la imagen circular */
                    border: 3px solid #fff;
                    /* Borde blanco alrededor de la imagen */
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                    /* Sombra suave */
                    width: 150px;
                    /* Ancho fijo */
                    height: 150px;
                    /* Alto fijo */
                    object-fit: cover;
                    /* Mantiene la proporción de la imagen */
                }

                /* Estilo para el nombre del usuario */
                .user-name {
                    font-size: 1.5em;
                    color: #333;
                    margin: 10px 0 0 0;
                    text-align: center;
                }

                /* Contenedor de los enlaces de navegación */
                .user-navigation {
                    width: 100%;
                    margin-top: 10px;
                    padding-left: 20px;
                }

                /* Lista de enlaces de navegación */
                .user-navigation ul {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                    text-align: left;
                }

                /* Cada elemento de la navegación */
                .user-navigation li {
                    margin: 8px 0;
                    padding-left: 10px;
                }

                /* Estilo de los enlaces */
                .user-navigation a {
                    color: #0088ff;
                    text-decoration: none;
                    padding: 5px 10px;
                    font-size: 15px;
                }


                .user-navigation a:hover {
                    color: #0410fa;
                    text-decoration: none;
                    padding: 5px 10px;
                    font-size: 15px;
                }

                /* Columna derecha que contiene el mensaje de bienvenida */
                .user-profile-right {
                    flex: 1;
                    /* Toma el espacio restante */
                    padding-left: 40px;
                    /* Espacio entre columnas */
                    padding-top: 20px;
                }

                /* Contenedor del mensaje de bienvenida */
                .welcome-message {
                    margin-bottom: 20px;
                }
            </style>
            <div class="wrap contentclass" role="document">
                <div id="pageheader" class="titleclass">
                    <div class="container">
                        <div class="page-header">
                            <h1 class="entry-title">Mi cuenta</h1>
                        </div>
                    </div>
                </div>

                <div id="content" class="container container-contained">
                    <div class="row">
                        <div class="main col-md-12" role="main">
                            <!-- Nuevo bloque para el avatar y nombre -->
                            <div class="user-profile-header">
                                <div class="user-profile-left">
                                    <div class="user-avatar">
                                        <?php echo $avatar; ?>
                                    </div>
                                    <div class="user-name">
                                        <?php echo esc_html($user_name); ?>
                                    </div>
                                    <nav class="user-navigation">
                                        <p>
                                            <li><a href="<?php echo esc_url(wc_get_account_endpoint_url('dashboard'));
                                                            ?>">Escritorio</a></li>
                                            <li><a href="<?php echo esc_url(wc_get_account_endpoint_url('orders'));
                                                            ?>">Pedidos</a></li>
                                            <li><a href="<?php echo esc_url(wc_get_account_endpoint_url('downloads'));
                                                            ?>">Descargas</a></li>
                                            <li><a href="<?php echo esc_url(wc_get_account_endpoint_url('edit-address'));
                                                            ?>">Direcciones</a></li>
                                            <li><a href="<?php echo esc_url(wc_get_account_endpoint_url('customer-logout'));
                                                            ?>">Salir</a></li>
                                        </p>
                                    </nav>


                                    <!-- <nav class="woocommerce-MyAccount-navigation">
                                        <ul>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard">
                                                <a href="<?php echo esc_url(wc_get_account_endpoint_url('dashboard')); ?>">Escritorio</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                                                <a href="<?php echo esc_url(wc_get_account_endpoint_url('orders')); ?>">Pedidos</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
                                                <a href="<?php echo esc_url(wc_get_account_endpoint_url('downloads')); ?>">Descargas</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                                                <a href="<?php echo esc_url(wc_get_account_endpoint_url('edit-address')); ?>">Direcciones</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                                                <a href="<?php echo esc_url(wc_get_account_endpoint_url('customer-logout')); ?>">Salir</a>
                                            </li>
                                        </ul>
                                    </nav> -->

                                    <!-- <nav class="woocommerce-MyAccount-navigation">
                                        <ul>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active">
                                                <a href="<?php echo esc_url(wc_get_account_endpoint_url('dashboard')); ?>">Escritorio</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                                                <a href="<?php echo esc_url(wc_get_account_endpoint_url('orders')); ?>">Pedidos</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
                                                <a href="<?php echo esc_url(wc_get_account_endpoint_url('downloads')); ?>">Descargas</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                                                <a href="<?php echo esc_url(wc_get_account_endpoint_url('edit-address')); ?>">Direcciones</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                                                <a href="<?php echo esc_url(wc_get_account_endpoint_url('customer-logout')); ?>">Salir</a>
                                            </li>
                                        </ul>
                                    </nav> -->
                                </div>
                                <div class="user-profile-right">
                                    <div class="welcome-message">
                                        <p>
                                            Hola <strong><?php echo esc_html($user_name); ?></strong>
                                            (¿no sos <strong><?php echo esc_html($user_name); ?></strong>?
                                            <a style="color: #0088ff;" onmouseover="this.style.color='#0410fa'" onmouseout="this.style.color='#0088ff'" href="<?php echo esc_url(wp_logout_url(home_url())); ?>">Cerrar sesión</a>)
                                        </p>
                                        <p>
                                            Desde el panel de control de tu cuenta podés ver tus
                                            <a style="color: #0088ff;" onmouseover="this.style.color='#0410fa'" onmouseout="this.style.color='#0088ff'" href="<?php echo esc_url(wc_get_account_endpoint_url('orders')); ?>">pedidos recientes</a>,
                                            gestionar tus <a style="color: #0088ff;" onmouseover="this.style.color='#0410fa'" onmouseout="this.style.color='#0088ff'" href="<?php echo esc_url(wc_get_account_endpoint_url('edit-address')); ?>">direcciones</a>
                                            y <a style="color: #0088ff;" onmouseover="this.style.color='#0410fa'" onmouseout="this.style.color='#0088ff'" href="<?php echo esc_url(wc_get_account_endpoint_url('edit-account')); ?>">editar tu contraseña y los detalles de tu cuenta</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer id="containerfooter" class="footerclass" itemscope itemtype="https://schema.org/WPFooter">
                    <div class="container">

                        <div class="footercredits clearfix">

                            <p>ENLACES EXTERNOS : <b>
                                    <a style="color: #0088ff;" onmouseover="this.style.color='#0410fa'" onmouseout="this.style.color='#0088ff'" href="www.opusdei.org.ar">Página del Opus Dei</a> -
                                    <a style="color: #0088ff;" onmouseover="this.style.color='#0410fa'" onmouseout="this.style.color='#0088ff'" href="https://opusdei.org/es-es/section/san-josemaria/">Página de San Josemaría</a>
                                </b>
                            </p>
                        </div>

                    </div>

                </footer>

            </div><!--Wrapper-->
            <div id="wcplpro_added_to_cart_notification" class="autoclose" style="display: none;">
                <a href="<?php echo wc_get_cart_url(); ?>" title="Ir al carrito"><span></span> &times; product(s) added to cart &rarr;</a> <a href="#" class="slideup_panel">&times;</a>
            </div>
            <script type="text/javascript">
                (function() {
                    var c = document.body.className;
                    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
                    document.body.className = c;
                })();
            </script>
            <script type="text/javascript" src="<?php echo includes_url('js/hoverintent-js.min.js?ver=2.2.1'); ?>" id="hoverintent-js-js"></script>
            <script type="text/javascript" src="<?php echo includes_url('js/admin-bar.min.js?ver=6.6.2'); ?>" id="admin-bar-js"></script>
            <script type="text/javascript" src="<?php echo plugins_url('woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.9-wc.6.8.2', WC_PLUGIN_FILE); ?>" id="selectWoo-js"></script>
            <script type="text/javascript" src="<?php echo plugins_url('woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.6.8.2', WC_PLUGIN_FILE); ?>" id="jquery-blockui-js"></script>
            <script type="text/javascript" src="<?php echo plugins_url('woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.6.8.2', WC_PLUGIN_FILE); ?>" id="js-cookie-js"></script>
            <script type="text/javascript" id="woocommerce-js-extra">
                /* <![CDATA[ */
                var woocommerce_params = {
                    "ajax_url": "\/wp-admin\/admin-ajax.php",
                    "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
                };
                /* ]]> */
            </script>
            <script type="text/javascript" src="<?php echo plugins_url('woocommerce/assets/js/frontend/woocommerce.min.js?ver=6.8.2', WC_PLUGIN_FILE); ?>" id="woocommerce-js"></script>
            <script type="text/javascript" id="wc-cart-fragments-js-extra">
                /* <![CDATA[ */
                var wc_cart_fragments_params = {
                    "ajax_url": "\/wp-admin\/admin-ajax.php",
                    "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
                    "cart_hash_key": "wc_cart_hash_6ab976eebad5abec7c393b9120966966",
                    "fragment_name": "wc_fragments_6ab976eebad5abec7c393b9120966966",
                    "request_timeout": "5000"
                };
                /* ]]> */
            </script>
            <script type="text/javascript" src="<?php echo plugins_url('woocommerce/assets/js/frontend/cart-fragments.min.js?ver=6.8.2', WC_PLUGIN_FILE); ?>" id="wc-cart-fragments-js"></script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/min/bootstrap-min.js?ver=3.4.10" id="bootstrap-js"></script>
            <script type="text/javascript" src="<?php echo includes_url('js/hoverIntent.min.js?ver=1.10.2'); ?>" id="hoverIntent-js"></script>
            <script type="text/javascript" src="<?php echo includes_url('js/imagesloaded.min.js?ver=5.0.0'); ?>" id="imagesloaded-js"></script>
            <script type="text/javascript" src="<?php echo includes_url('js/masonry.min.js?ver=4.2.2'); ?>" id="masonry-js"></script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/min/plugins-min.js?ver=3.4.10" id="virtue_plugins-js"></script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/min/magnific-popup-min.js?ver=3.4.10" id="magnific-popup-js"></script>
            <script type="text/javascript" id="virtue-lightbox-init-js-extra">
                /* <![CDATA[ */
                var virtue_lightbox = {
                    "loading": "Loading...",
                    "of": "%curr% of %total%",
                    "error": "The Image could not be loaded."
                };
                /* ]]> */
            </script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/min/virtue-lightbox-init-min.js?ver=3.4.10" id="virtue-lightbox-init-js"></script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/min/main-min.js?ver=3.4.10" id="virtue_main-js"></script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/min/kt-add-to-cart-variation-min.js?ver=6.6.2" id="kt-wc-add-to-cart-variation-js"></script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/min/wc-quantity-increment-min.js?ver=6.6.2" id="wcqi-js-js"></script>
            <script type="text/javascript">
                (function(undefined) {
                    let scriptOptions = {
                        "_localizedStrings": {
                            "redirect_overlay_title": "Hold On",
                            "redirect_overlay_text": "You are being redirected to another page,<br>it may take a few seconds.",
                            "webview_notification_text": "The selected provider doesn't support embedded browsers!"
                        },
                        "_targetWindow": "prefer-popup",
                        "_redirectOverlay": "overlay-with-spinner-and-message",
                        "_unsupportedWebviewBehavior": ""
                    };
                    /**
                     * Used when Cross-Origin-Opener-Policy blocked the access to the opener. We can't have a reference of the opened windows, so we should attempt to refresh only the windows that has opened popups.
                     */
                    window._nslHasOpenedPopup = false;
                    window._nslWebViewNoticeElement = null;

                    window.NSLPopup = function(url, title, w, h) {

                        /**
                         * Cross-Origin-Opener-Policy blocked the access to the opener
                         */
                        if (typeof BroadcastChannel === "function") {
                            const _nslLoginBroadCastChannel = new BroadcastChannel('nsl_login_broadcast_channel');
                            _nslLoginBroadCastChannel.onmessage = (event) => {
                                if (window?._nslHasOpenedPopup && event.data?.action === 'redirect') {
                                    window._nslHasOpenedPopup = false;

                                    const url = event.data?.href;
                                    _nslLoginBroadCastChannel.close();
                                    if (typeof window.nslRedirect === 'function') {
                                        window.nslRedirect(url);
                                    } else {
                                        window.opener.location = url;
                                    }
                                }
                            };
                        }

                        const userAgent = navigator.userAgent,
                            mobile = function() {
                                return /\b(iPhone|iP[ao]d)/.test(userAgent) ||
                                    /\b(iP[ao]d)/.test(userAgent) ||
                                    /Android/i.test(userAgent) ||
                                    /Mobile/i.test(userAgent);
                            },
                            screenX = window.screenX !== undefined ? window.screenX : window.screenLeft,
                            screenY = window.screenY !== undefined ? window.screenY : window.screenTop,
                            outerWidth = window.outerWidth !== undefined ? window.outerWidth : document.documentElement.clientWidth,
                            outerHeight = window.outerHeight !== undefined ? window.outerHeight : document.documentElement.clientHeight - 22,
                            targetWidth = mobile() ? null : w,
                            targetHeight = mobile() ? null : h,
                            left = parseInt(screenX + (outerWidth - targetWidth) / 2, 10),
                            right = parseInt(screenY + (outerHeight - targetHeight) / 2.5, 10),
                            features = [];
                        if (targetWidth !== null) {
                            features.push('width=' + targetWidth);
                        }
                        if (targetHeight !== null) {
                            features.push('height=' + targetHeight);
                        }
                        features.push('left=' + left);
                        features.push('top=' + right);
                        features.push('scrollbars=1');

                        const newWindow = window.open(url, title, features.join(','));

                        if (window.focus) {
                            newWindow.focus();
                        }

                        window._nslHasOpenedPopup = true;

                        return newWindow;
                    };

                    let isWebView = null;

                    function checkWebView() {
                        if (isWebView === null) {
                            function _detectOS(ua) {
                                if (/Android/.test(ua)) {
                                    return "Android";
                                } else if (/iPhone|iPad|iPod/.test(ua)) {
                                    return "iOS";
                                } else if (/Windows/.test(ua)) {
                                    return "Windows";
                                } else if (/Mac OS X/.test(ua)) {
                                    return "Mac";
                                } else if (/CrOS/.test(ua)) {
                                    return "Chrome OS";
                                } else if (/Firefox/.test(ua)) {
                                    return "Firefox OS";
                                }
                                return "";
                            }

                            function _detectBrowser(ua) {
                                let android = /Android/.test(ua);

                                if (/Opera Mini/.test(ua) || / OPR/.test(ua) || / OPT/.test(ua)) {
                                    return "Opera";
                                } else if (/CriOS/.test(ua)) {
                                    return "Chrome for iOS";
                                } else if (/Edge/.test(ua)) {
                                    return "Edge";
                                } else if (android && /Silk\//.test(ua)) {
                                    return "Silk";
                                } else if (/Chrome/.test(ua)) {
                                    return "Chrome";
                                } else if (/Firefox/.test(ua)) {
                                    return "Firefox";
                                } else if (android) {
                                    return "AOSP";
                                } else if (/MSIE|Trident/.test(ua)) {
                                    return "IE";
                                } else if (/Safari\//.test(ua)) {
                                    return "Safari";
                                } else if (/AppleWebKit/.test(ua)) {
                                    return "WebKit";
                                }
                                return "";
                            }

                            function _detectBrowserVersion(ua, browser) {
                                if (browser === "Opera") {
                                    return /Opera Mini/.test(ua) ? _getVersion(ua, "Opera Mini/") :
                                        / OPR/.test(ua) ? _getVersion(ua, " OPR/") :
                                        _getVersion(ua, " OPT/");
                                } else if (browser === "Chrome for iOS") {
                                    return _getVersion(ua, "CriOS/");
                                } else if (browser === "Edge") {
                                    return _getVersion(ua, "Edge/");
                                } else if (browser === "Chrome") {
                                    return _getVersion(ua, "Chrome/");
                                } else if (browser === "Firefox") {
                                    return _getVersion(ua, "Firefox/");
                                } else if (browser === "Silk") {
                                    return _getVersion(ua, "Silk/");
                                } else if (browser === "AOSP") {
                                    return _getVersion(ua, "Version/");
                                } else if (browser === "IE") {
                                    return /IEMobile/.test(ua) ? _getVersion(ua, "IEMobile/") :
                                        /MSIE/.test(ua) ? _getVersion(ua, "MSIE ") :
                                        _getVersion(ua, "rv:");
                                } else if (browser === "Safari") {
                                    return _getVersion(ua, "Version/");
                                } else if (browser === "WebKit") {
                                    return _getVersion(ua, "WebKit/");
                                }
                                return "0.0.0";
                            }

                            function _getVersion(ua, token) {
                                try {
                                    return _normalizeSemverString(ua.split(token)[1].trim().split(/[^\w\.]/)[0]);
                                } catch (o_O) {}
                                return "0.0.0";
                            }

                            function _normalizeSemverString(version) {
                                const ary = version.split(/[\._]/);
                                return (parseInt(ary[0], 10) || 0) + "." +
                                    (parseInt(ary[1], 10) || 0) + "." +
                                    (parseInt(ary[2], 10) || 0);
                            }

                            function _isWebView(ua, os, browser, version, options) {
                                switch (os + browser) {
                                    case "iOSSafari":
                                        return false;
                                    case "iOSWebKit":
                                        return _isWebView_iOS(options);
                                    case "AndroidAOSP":
                                        return false;
                                    case "AndroidChrome":
                                        return parseFloat(version) >= 42 ? /; wv/.test(ua) : /\d{2}\.0\.0/.test(version) ? true : _isWebView_Android(options);
                                }
                                return false;
                            }

                            function _isWebView_iOS(options) {
                                const document = (window["document"] || {});

                                if ("WEB_VIEW" in options) {
                                    return options["WEB_VIEW"];
                                }
                                return !("fullscreenEnabled" in document || "webkitFullscreenEnabled" in document || false);
                            }

                            function _isWebView_Android(options) {
                                if ("WEB_VIEW" in options) {
                                    return options["WEB_VIEW"];
                                }
                                return !("requestFileSystem" in window || "webkitRequestFileSystem" in window || false);
                            }

                            const options = {},
                                nav = window.navigator || {},
                                ua = nav.userAgent || "",
                                os = _detectOS(ua),
                                browser = _detectBrowser(ua),
                                browserVersion = _detectBrowserVersion(ua, browser);

                            isWebView = _isWebView(ua, os, browser, browserVersion, options);
                        }

                        return isWebView;
                    }

                    function isAllowedWebViewForUserAgent(provider) {
                        const facebookAllowedWebViews = [
                            'Instagram',
                            'FBAV',
                            'FBAN'
                        ];
                        let whitelist = [];

                        if (provider && provider === 'facebook') {
                            whitelist = facebookAllowedWebViews;
                        }

                        const nav = window.navigator || {},
                            ua = nav.userAgent || "";

                        if (whitelist.length && ua.match(new RegExp(whitelist.join('|')))) {
                            return true;
                        }

                        return false;
                    }

                    function disableButtonInWebView(providerButtonElement) {
                        if (providerButtonElement) {
                            providerButtonElement.classList.add('nsl-disabled-provider');
                            providerButtonElement.setAttribute('href', '#');

                            providerButtonElement.addEventListener('pointerdown', (e) => {
                                if (!window._nslWebViewNoticeElement) {
                                    window._nslWebViewNoticeElement = document.createElement('div');
                                    window._nslWebViewNoticeElement.id = "nsl-notices-fallback";
                                    window._nslWebViewNoticeElement.addEventListener('pointerdown', function(e) {
                                        this.parentNode.removeChild(this);
                                        window._nslWebViewNoticeElement = null;
                                    });
                                    const webviewNoticeHTML = '<div class="error"><p>' + scriptOptions._localizedStrings.webview_notification_text + '</p></div>';

                                    window._nslWebViewNoticeElement.insertAdjacentHTML("afterbegin", webviewNoticeHTML);
                                    document.body.appendChild(window._nslWebViewNoticeElement);
                                }
                            });
                        }

                    }

                    window._nslDOMReady(function() {

                        window.nslRedirect = function(url) {
                            if (scriptOptions._redirectOverlay) {
                                const overlay = document.createElement('div');
                                overlay.id = "nsl-redirect-overlay";
                                let overlayHTML = '';
                                const overlayContainer = "<div id='nsl-redirect-overlay-container'>",
                                    overlayContainerClose = "</div>",
                                    overlaySpinner = "<div id='nsl-redirect-overlay-spinner'></div>",
                                    overlayTitle = "<p id='nsl-redirect-overlay-title'>" + scriptOptions._localizedStrings.redirect_overlay_title + "</p>",
                                    overlayText = "<p id='nsl-redirect-overlay-text'>" + scriptOptions._localizedStrings.redirect_overlay_text + "</p>";

                                switch (scriptOptions._redirectOverlay) {
                                    case "overlay-only":
                                        break;
                                    case "overlay-with-spinner":
                                        overlayHTML = overlayContainer + overlaySpinner + overlayContainerClose;
                                        break;
                                    default:
                                        overlayHTML = overlayContainer + overlaySpinner + overlayTitle + overlayText + overlayContainerClose;
                                        break;
                                }

                                overlay.insertAdjacentHTML("afterbegin", overlayHTML);
                                document.body.appendChild(overlay);
                            }

                            window.location = url;
                        };

                        let targetWindow = scriptOptions._targetWindow || 'prefer-popup',
                            lastPopup = false;


                        document.addEventListener('click', function(e) {
                            if (e.target) {
                                const buttonLinkElement = e.target.closest('a[data-plugin="nsl"][data-action="connect"]') || e.target.closest('a[data-plugin="nsl"][data-action="link"]');
                                if (buttonLinkElement) {
                                    if (lastPopup && !lastPopup.closed) {
                                        e.preventDefault();
                                        lastPopup.focus();
                                    } else {

                                        let href = buttonLinkElement.href,
                                            success = false;
                                        if (href.indexOf('?') !== -1) {
                                            href += '&';
                                        } else {
                                            href += '?';
                                        }

                                        const redirectTo = buttonLinkElement.dataset.redirect;
                                        if (redirectTo === 'current') {
                                            href += 'redirect=' + encodeURIComponent(window.location.href) + '&';
                                        } else if (redirectTo && redirectTo !== '') {
                                            href += 'redirect=' + encodeURIComponent(redirectTo) + '&';
                                        }

                                        if (targetWindow !== 'prefer-same-window' && checkWebView()) {
                                            targetWindow = 'prefer-same-window';
                                        }

                                        if (targetWindow === 'prefer-popup') {
                                            lastPopup = NSLPopup(href + 'display=popup', 'nsl-social-connect', buttonLinkElement.dataset.popupwidth, buttonLinkElement.dataset.popupheight);
                                            if (lastPopup) {
                                                success = true;
                                                e.preventDefault();
                                            }
                                        } else if (targetWindow === 'prefer-new-tab') {
                                            const newTab = window.open(href + 'display=popup', '_blank');
                                            if (newTab) {
                                                if (window.focus) {
                                                    newTab.focus();
                                                }
                                                success = true;
                                                window._nslHasOpenedPopup = true;
                                                e.preventDefault();
                                            }
                                        }

                                        if (!success) {
                                            window.location = href;
                                            e.preventDefault();
                                        }
                                    }
                                }
                            }
                        });

                        let buttonCountChanged = false;

                        const googleLoginButtons = document.querySelectorAll(' a[data-plugin="nsl"][data-provider="google"]');
                        if (googleLoginButtons.length && checkWebView()) {
                            googleLoginButtons.forEach(function(googleLoginButton) {
                                if (scriptOptions._unsupportedWebviewBehavior === 'disable-button') {
                                    disableButtonInWebView(googleLoginButton);
                                } else {
                                    googleLoginButton.remove();
                                    buttonCountChanged = true;
                                }
                            });
                        }

                        const facebookLoginButtons = document.querySelectorAll(' a[data-plugin="nsl"][data-provider="facebook"]');
                        if (facebookLoginButtons.length && checkWebView() && /Android/.test(window.navigator.userAgent) && !isAllowedWebViewForUserAgent('facebook')) {
                            facebookLoginButtons.forEach(function(facebookLoginButton) {
                                if (scriptOptions._unsupportedWebviewBehavior === 'disable-button') {
                                    disableButtonInWebView(facebookLoginButton);
                                } else {
                                    facebookLoginButton.remove();
                                    buttonCountChanged = true;
                                }
                            });
                        }

                        const separators = document.querySelectorAll('div.nsl-separator');
                        if (buttonCountChanged && separators.length) {
                            separators.forEach(function(separator) {
                                const separatorParentNode = separator.parentNode;
                                if (separatorParentNode) {
                                    const separatorButtonContainer = separatorParentNode.querySelector('div.nsl-container-buttons');
                                    if (separatorButtonContainer && !separatorButtonContainer.hasChildNodes()) {
                                        separator.remove();
                                    }
                                }
                            })
                        }
                    });
                })();
            </script>
    </body>

    </html>




    <!-- <div class="wrap contentclass" role="document">
        <div id="pageheader" class="titleclass">
            <div class="container">
                <div class="page-header">
                    <h1 class="entry-title">Mi cuenta</h1>
                </div>
            </div>
        </div>

        <div id="content" class="container container-contained">
            <div class="row">
                <div class="main col-md-12" role="main">
                    <?php
                    // Mostrar el contenido del panel de WooCommerce
                    //echo do_shortcode('[woocommerce_my_account]');
                    ?>
                </div>
            </div>
        </div>
    </div> -->
<?php
    //get_footer();
}

function mostrar_login_registro()
{
    // Al inicio del archivo, después de las declaraciones iniciales
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errors = array();

        // Verificar si es un intento de inicio de sesión
        if (isset($_POST['login'])) {
            // Validar reCAPTCHA
            if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
                $errors[] = "Por favor, confirma que no eres un robot.";
            } else {
                // $secret_key = '6LfX0n4qAAAAANGMR1gBsFLCwbbI5gHVrsFtVfuL';
                $verify = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', array(
                    'body' => array(
                        'secret' => RECAPTCHA_SECRET_KEY,
                        'response' => $_POST['g-recaptcha-response']
                    )
                ));

                if (!is_wp_error($verify)) {
                    $verify_response = json_decode($verify['body']);
                    if ($verify_response->success) {
                        // Procesar inicio de sesión
                        $creds = array(
                            'user_login'    => $_POST['username'],
                            'user_password' => $_POST['password'],
                            'remember'      => isset($_POST['rememberme'])
                        );

                        $user = wp_signon($creds, false);

                        if (!is_wp_error($user)) {
                            wp_redirect(home_url('/mi-cuenta'));
                            exit;
                        } else {
                            $errors[] = "Usuario o contraseña incorrectos.";
                        }
                    } else {
                        $errors[] = "Usuario o contraseña incorrectos.";
                    }
                }
            }
        }

        // Verificar si es un intento de registro
        if (isset($_POST['register'])) {
            // Validar reCAPTCHA
            if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
                $errors[] = "Por favor, confirma que no eres un robot.";
            } else {
                // $secret_key = '6LfX0n4qAAAAANGMR1gBsFLCwbbI5gHVrsFtVfuL';
                $verify = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', array(
                    'body' => array(
                        'secret' => RECAPTCHA_SECRET_KEY,
                        'response' => $_POST['g-recaptcha-response']
                    )
                ));

                if (!is_wp_error($verify)) {
                    $verify_response = json_decode($verify['body']);
                    if ($verify_response->success) {
                        $email = sanitize_email($_POST['email']);

                        // Generar nombre de usuario desde el email
                        $username = strstr($email, '@', true);

                        // Generar contraseña aleatoria
                        $random_password = wp_generate_password();

                        // Crear el usuario
                        $user_id = wp_create_user($username, $random_password, $email);

                        if (!is_wp_error($user_id)) {
                            // Enviar email con las credenciales
                            $to = $email;
                            $subject = 'Registro exitoso - Casas de Convivencias';
                            $message = "
                         <html>
                         <head>
                             <title>Confirma tu registro</title>
                         </head>
                         <body>
                             <h2>¡Gracias por registrarte!</h2>
                             <p>Tus datos de acceso son:</p>
                             <p>Usuario: {$username}</p>
                             <p>Contraseña: {$random_password}</p>
                             <p>Puedes iniciar sesión en: " . wp_login_url() . "</p>
                         </body>
                         </html>";

                            $headers = array(
                                'Content-Type: text/html; charset=UTF-8',
                                'From: Casas de Convivencias <no-reply@casasdeconvivencias.org.ar>'
                            );

                            if (wp_mail($to, $subject, $message, $headers)) {
                                wp_redirect(home_url('/mi-cuenta'));
                                exit;
                            } else {
                                $errors[] = "Error al enviar el correo de confirmación.";
                            }
                        } else {
                            $errors[] = "Error al crear el usuario. Es posible que el email ya esté registrado.";
                        }
                    } else {
                        $errors[] = "La cuenta de registro ya existe. Intente iniciar sesión o registrarse con otro correo.";
                    }
                }
            }
        }
    }
    //"La cuenta de registro ya existe. Intente iniciar sesión o registrarse con otro correo."
?>



    <style>
        /* Estilos para la página de registro */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
        }

        /* Estilo para el título principal */
        .container h1 {
            text-align: center;
            font-weight: 700;
            font-size: 32px;
            color: #333;
            margin-bottom: 20px;
            line-height: 1.4;
            padding: 0 20px;
            font-family: 'Arial', sans-serif;
            position: relative;
        }

        /* Ajuste del contenedor principal */
        .container {
            max-width: 1200px;
            margin: auto auto;
            padding: 20px;
        }

        /* Contenedor principal */
        #customer_login {
            display: flex;
            gap: 30px;
            margin-top: 0;
        }

        /* Columnas de login y registro */
        #customer_login .u-column1,
        #customer_login .u-column2 {
            flex: 1;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Títulos */
        .woocommerce-account h2 {
            font-size: 24px;
            color: #333333;
            margin-bottom: 10px;
            font-weight: 600;
        }

        /* Campos de formulario */
        .woocommerce form .form-row {
            margin-bottom: 20px;
        }

        .woocommerce form .form-row label {
            font-weight: 500;
            margin-bottom: 8px;
            display: block;
            color: #333;
        }

        .woocommerce form .form-row input.input-text {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f8f8f8;
        }





        /* Estilos para el campo de contraseña y el ícono */
        .password-field {
            position: relative;
        }

        .password-input {
            position: relative;
            display: block;
        }

        .show-password-input.bx {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #0088ff;
            font-size: 24px;
            display: flex;
            align-items: center;
            transition: color 0.3s ease;
        }

        .show-password-input.bx:hover {
            color: #0410fa;
        }


        /* Asegurar espacio para el ícono */
        .password-input input[type="password"],
        .password-input input[type="text"] {
            padding-right: 40px !important;
            width: 100%;
        }






        /* Estilo para los campos de entrada cuando están enfocados */
        .woocommerce form .form-row input.input-text:focus,
        .woocommerce-page form .form-row input.input-text:focus,
        .woocommerce form .form-row textarea:focus,
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #0088ff !important;
            /* Color azul que estás usando */
            box-shadow: 0 0 10px rgba(0, 136, 255, 0.3) !important;
            /* Sombra suave del mismo color */
        }


        /* Botones - Estilos unificados */
        .woocommerce-form-login__submit,
        .woocommerce-form-register__submit,
        .woocommerce-Button.button,
        .woocommerce-button.button {
            width: 100% !important;
            padding: 15px !important;
            background-color: #0088ff !important;
            color: #fff !important;
            text-transform: uppercase;
            font-weight: 600 !important;
            border-radius: 4px !important;
            margin-top: 15px !important;
            transition: background-color 0.3s ease;
            font-size: 14px !important;
            line-height: 1.5 !important;
        }

        .woocommerce-form-login__submit:hover,
        .woocommerce-form-register__submit:hover,
        .woocommerce-Button.button:hover,
        .woocommerce-button.button:hover {
            background-color: #0410fa !important;
        }

        /* Checkbox "Recuérdame" */
        .woocommerce-form__label-for-checkbox {
            display: flex;
            align-items: center;
            margin: 15px 0;
        }

        .woocommerce-form__input-checkbox {
            margin-right: 10px;
        }

        /* Enlaces */
        .woocommerce-LostPassword {
            text-align: center;
            margin-top: 20px;
        }

        .woocommerce-LostPassword a {
            color: #686767;
            text-decoration: underline;
        }

        /* reCAPTCHA */
        .recaptcha-container {
            margin: 20px 0;
            display: flex;
            justify-content: center;
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

        /* Responsive */
        @media (max-width: 768px) {
            #customer_login {
                flex-direction: column;
            }

            #customer_login .u-column1,
            #customer_login .u-column2 {
                margin-bottom: 20px;
            }
        }



        /* ==========================================================================
   1. Estilos Básicos y Reset
   ========================================================================== */
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

        /* ==========================================================================
   2. Estructura Principal
   ========================================================================== */
        #wrapper {
            margin: 0 auto;
            padding: 0;
            max-width: 1200px;
            width: 100%;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .container {
            margin: 0 auto;
            padding: 0 15px;
            max-width: 1200px;
            width: 100%;
        }

        /* ==========================================================================
   3. Header y Navegación
   ========================================================================== */
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
        .contentclass {
            background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2018/06/beige-minimal-background-pattern-wordpress-8.jpg') repeat;
        }

        #content.container.container-contained {
            flex: 1;
            padding: 20px 15px 0;
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

        .page-header h1.entry-title {
            font-size: 2.5em;
            color: #333;
            margin: 0;
            font-weight: 600;
            padding: 5px 0;
        }

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

        /* Asegurar que el contenedor del footer se alinee con el contenido */
        /* #containerfooter .row {
            margin: 0;
            width: 100%;
        } */

        /* ==========================================================================
        6. Utilidades y Ajustes Específicos
        ========================================================================== */
        /* Inputs numéricos */
        input[type=number] {
            -webkit-appearance: none;
            -moz-appearance: textfield;
            appearance: none;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* ==========================================================================
        7. Media Queries
        ========================================================================== */
        @media (max-width: 979px) {
            .nav-trigger .nav-trigger-case {
                position: static;
                display: block;
                width: 100%;
            }
        }

        .product_item .product_details h5 {
            min-height: 40px;
        }


        .entry-content {
            flex: 1;
        }


        .entry-content p {
            margin-bottom: 16px;
        }



        /* Ajustes del header */
        /* .headerclass {
            background: url('<?php //echo wp_upload_dir()['baseurl']; 
                                ?>/2018/06/header-background-mirror-final-2.jpg') no-repeat;
            padding: 10px 0; */
        /* Reducimos el padding vertical */
        /* margin-top: 0; */
        /* Eliminamos el margen superior */
        /* background-size: cover; */
        /* Para asegurar que la imagen de fondo se ajuste bien */
        /* } */

        /* Centrado del logo y título */
        /* #logo.logocase {
            margin: 0 auto; */
        /* Centra el logo */
        /* padding: 10px 0;
            text-align: center; */
        /* Centra el texto */
        /* width: 100%; */
        /* Asegura que tome todo el ancho disponible */
        /* } */

        /* .brand.logofont {
            font-size: 28px;
            line-height: 1.2;
            margin: 0;
            display: block;
            text-align: center; */
        /* Centra el texto del título */
        /* } */

        /* .kad_tagline.belowlogo-text {
            margin: 5px 0 0;
            font-size: 13px;
            text-align: center; */
        /* Centra el subtítulo */
        /* } */

        /* Ajuste del contenedor del logo */
        /* .col-md-12.clearfix.kad-header-left {
            padding: 5px 15px;
            text-align: center; */
        /* Centra todo el contenido */
        /* } */

        /* Aseguramos que el contenedor principal también esté centrado */
        /* .banner.headerclass .container {
            padding-top: 0;
            padding-bottom: 0;
            text-align: center;
        } */





        /* .page-header {
            text-align: center;
            padding: 10px 0; */
        /* Padding interno para el título */
        /* margin: 0; */
        /* Sin márgenes externos */
        /* border-bottom: 1px solid #eee; */
        /* } */

        /* .page-header h1.entry-title {
            font-size: 2.5em;
            color: #333;
            margin: 0;
            font-weight: 600;
            padding: 5px 0; */
        /* Padding interno solo para el texto */
        /* } */

        /* Ajuste del contenedor del título */
        /* #pageheader.titleclass .container {
            padding: 0 15px;
            margin: 0;
        } */

        /* Ajuste del contenido siguiente */
        /* #content.container.container-contained {
            padding-top: 5px; */
        /* Añadimos espacio entre el título y el contenido */
        /* } */



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


        .required {
            color: #ff0000 !important;
            font-size: 20px !important;
        }
    </style>


    <!DOCTYPE html>
    <html class="no-js" lang="es-AR" itemscope="itemscope" itemtype="https://schema.org/WebPage">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mi cuenta &#8211; Casas de Retiros y Convivencias</title>
        <meta name='robots' content='max-image-preview:large, noindex, follow' />
        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
        <link rel="alternate" type="application/rss+xml" title="Casas de Retiros y Convivencias &raquo; Feed" href="<?php echo get_feed_link(); ?>" />
        <link rel="alternate" type="application/rss+xml" title="Casas de Retiros y Convivencias &raquo; RSS de los comentarios" href="<?php echo get_feed_link('comments_rss2'); ?>" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            window._wpemojiSettings = {
                "baseUrl": "https://s.w.org/images/core/emoji/15.0.3/72x72/",
                "ext": ".png",
                "svgUrl": "https://s.w.org/images/core/emoji/15.0.3/svg/",
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
        <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='<?php echo plugins_url('woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=8.0.0', WC_PLUGIN_FILE); ?>' type='text/css' media='all' />
        <link rel='stylesheet' id='wc-blocks-style-css' href='<?php echo plugins_url('woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=8.0.0', WC_PLUGIN_FILE); ?>' type='text/css' media='all' />
        <link rel='stylesheet' id='select2-css' href='<?php echo plugins_url('woocommerce/assets/css/select2.css?ver=6.8.2', WC_PLUGIN_FILE); ?>' type='text/css' media='all' />
        <!-- <style id='woocommerce-inline-inline-css' type='text/css'>
            .woocommerce form .form-row .required {
                visibility: visible;
            }
        </style> -->
        <link rel='stylesheet' id='parent-style-css' href='<?php echo get_template_directory_uri(); ?>/style.css?ver=6.6.2' type='text/css' media='all' />
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
        <script type="text/javascript" src="<?php echo plugins_url('Woocommerce_Products_List_Pro_v1.1.4/assets/js/stupidtable.js?ver=6.6.2'); ?>" id="wcplpro_table_sort-js"></script>
        <link rel="https://api.w.org/" href="<?php echo rest_url(); ?>" />
        <link rel="alternate" title="JSON" type="application/json" href="<?php echo rest_url('wp/v2/pages/7'); ?>" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo site_url('xmlrpc.php?rsd'); ?>" />
        <meta name="generator" content="WordPress <?php echo get_bloginfo('version'); ?>" />
        <meta name="generator" content="WooCommerce <?php echo WC()->version; ?>" />
        <link rel="canonical" href="<?php echo get_permalink(); ?>" />
        <link rel='shortlink' href='<?php echo wp_get_shortlink(7); ?>' />
        <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="<?php echo rest_url('oembed/1.0/embed?url=' . urlencode(get_permalink())); ?>" />
        <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="<?php echo rest_url('oembed/1.0/embed?url=' . urlencode(get_permalink()) . '&format=xml'); ?>" />
        <link rel="Shortcut Icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon.png" />
        <style type="text/css">
            #logo {
                padding-top: 25px;
            }

            #logo {
                padding-bottom: 10px;
            }

            #logo {
                margin-left: 0px;
            }

            #logo {
                margin-right: 0px;
            }

            #nav-main {
                margin-top: 40px;
            }

            #nav-main {
                margin-bottom: 10px;
            }

            .headerfont,
            .tp-caption {
                font-family: Lato;
            }

            .topbarmenu ul li {
                font-family: Lato;
            }

            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            input[type=number] {
                -webkit-appearance: none;
                -moz-appearance: textfield;
                appearance: none;
            }

            .quantity input::-webkit-outer-spin-button,
            .quantity input::-webkit-inner-spin-button {
                display: none;
            }

            .contentclass,
            .nav-tabs>.active>a,
            .nav-tabs>.active>a:hover,
            .nav-tabs>.active>a:focus {
                background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2018/06/beige-minimal-background-pattern-wordpress-8.jpg') repeat;
            }

            .topclass {
                background: transparent;
            }

            .headerclass {
                background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2018/06/header-background-mirror-final-2.jpg') no-repeat;
            }

            body {
                background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2018/06/grey-background.jpg');
                background-position: 0% 0%;
                background-repeat: repeat;
            }

            .product_item .product_details h5 {
                text-transform: none;
            }

            @media (max-width: 979px) {
                .nav-trigger .nav-trigger-case {
                    position: static;
                    display: block;
                    width: 100%;
                }
            }

            .product_item .product_details h5 {
                min-height: 40px;
            }

            .entry-content p {
                margin-bottom: 16px;
            }
        </style> <noscript>
            <style>
                .woocommerce-product-gallery {
                    opacity: 1 !important;
                }
            </style>
        </noscript>

    </head>

    <body class="page-template-default page page-id-7 wp-embed-responsive theme-virtue woocommerce-account woocommerce-page woocommerce-no-js boxed mi-cuenta">
        <!-- <div id="kt-skip-link"><a href="#content">Skip to Main Content</a></div> -->
        <div id="wrapper" class="container">
            <header class="banner headerclass" itemscope itemtype="https://schema.org/WPHeader">
                <div id="topbar" class="topclass">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 kad-topbar-left">
                                <div class="topbarmenu clearfix">
                                </div>
                            </div><!-- close col-md-6 -->
                            <div class="col-md-6 col-sm-6 kad-topbar-right">
                                <div id="topbar-search" class="topbar-widget">
                                </div>
                            </div> <!-- close col-md-6-->
                        </div> <!-- Close Row -->
                    </div> <!-- Close Container -->
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 clearfix kad-header-left">
                            <div id="logo" class="logocase">
                                <a class="brand logofont" href="<?php echo home_url(); ?>">
                                    Casas de Retiros y Convivencias </a>
                                <p class="kad_tagline belowlogo-text">Convivencias y Retiros Espirituales.</p>
                            </div> <!-- Close #logo -->
                        </div><!-- close logo span -->

                    </div> <!-- Close Row -->

                </div> <!-- Close Container -->

            </header>
            <?php if (!empty($errors)): ?>
                <div class="error-messages">
                    <?php foreach ($errors as $error): ?>
                        <p><?php echo esc_html($error); ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="wrap contentclass" role="document">
                <div id="pageheader" class="titleclass">
                    <div class="container">
                        <div class="page-header">
                            <h1 class="entry-title">Mi cuenta</h1>
                        </div>
                    </div>
                </div>

                <div id="content" class="container container-contained">
                    <div class="row">
                        <div class="main col-md-12" role="main">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="woocommerce-notices-wrapper"></div>

                                    <div class="u-columns col2-set" id="customer_login">
                                        <!-- Columna de Login -->
                                        <div class="u-column1">
                                            <h2>Iniciar sesión</h2>
                                            <form class="woocommerce-form woocommerce-form-login login" method="post">
                                                <p class="woocommerce-form-row form-row">
                                                    <label for="username">Nombre de usuario o correo electrónico&nbsp;<span class="required">*</span></label>
                                                    <input type="text"
                                                        class="woocommerce-Input input-text"
                                                        name="username"
                                                        id="username"
                                                        autocomplete="username"
                                                        value=""
                                                        required />
                                                </p>

                                                <p class="woocommerce-form-row form-row password-field">
                                                    <label for="password">Contraseña&nbsp;<span class="required">*</span></label>
                                                    <span class="password-input">
                                                        <input type="password"
                                                            class="woocommerce-Input woocommerce-Input--text input-text"
                                                            name="password"
                                                            id="password"
                                                            autocomplete="current-password"
                                                            required />
                                                        <i class='bx bx-show show-password-input'></i>
                                                    </span>
                                                </p>

                                                <div class="form-group recaptcha-container">
                                                    <div class="g-recaptcha" data-sitekey="<?php echo esc_attr(RECAPTCHA_SITE_KEY); ?>"></div>
                                                </div>

                                                <p class="form-row">
                                                    <label class="woocommerce-form__label-for-checkbox">
                                                        <input type="checkbox"
                                                            class="woocommerce-form__input-checkbox"
                                                            name="rememberme"
                                                            id="rememberme"
                                                            value="forever" />
                                                        <span>Recordarme</span>
                                                    </label>
                                                    <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
                                                    <button type="submit"
                                                        class="woocommerce-button button woocommerce-form-login__submit"
                                                        name="login"
                                                        value="1">
                                                        Iniciar sesión
                                                    </button>
                                                </p>
                                            </form>
                                        </div>

                                        <!-- Columna de Registro -->
                                        <div class="u-column2">
                                            <h2>Registrarme</h2>
                                            <form method="post" class="woocommerce-form woocommerce-form-register register">
                                                <p class="woocommerce-form-row form-row">
                                                    <label for="reg_email">Correo electrónico&nbsp;<span class="required">*</span></label>
                                                    <input type="email"
                                                        class="woocommerce-Input input-text"
                                                        name="email"
                                                        id="reg_email"
                                                        autocomplete="email"
                                                        value=""
                                                        required />
                                                </p>

                                                <p class="register-notice">Se enviará un enlace para establecer una nueva contraseña a su dirección de correo electrónico.</p>

                                                <div class="form-group recaptcha-container">
                                                    <div class="g-recaptcha" data-sitekey="<?php echo esc_attr(RECAPTCHA_SITE_KEY); ?>"></div>
                                                </div>

                                                <p class="form-row">
                                                    <?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
                                                    <button type="submit"
                                                        class="woocommerce-Button button woocommerce-form-register__submit"
                                                        name="register"
                                                        value="1">
                                                        Registrarme
                                                    </button>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="containerfooter" class="footerclass" itemscope itemtype="https://schema.org/WPFooter">

            <div class="footercredits clearfix">

                <p>ENLACES EXTERNOS : <b><a href="https://www.opusdei.org.ar">Página del Opus Dei</a> - <a href="https://opusdei.org/es-es/section/san-josemaria/">Página de San Josemaría</a></b>
                </p>
            </div>

            </div>

        </footer>

        </div><!--Wrapper-->
        <div id="wcplpro_added_to_cart_notification" class="autoclose" style="display: none;">
            <a href="<?php echo wc_get_cart_url(); ?>" title="Ir al carrito"><span></span> &times; product(s) added to cart &rarr;</a> <a href="#" class="slideup_panel">&times;</a>
        </div>
        <script type="text/javascript">
            (function() {
                var c = document.body.className;
                c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
                document.body.className = c;
            })();
        </script>
        <script type="text/javascript" src="<?php echo plugins_url('woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.9-wc.6.8.2', WC_PLUGIN_FILE); ?>" id="selectWoo-js"></script>
        <script type="text/javascript" src="<?php echo plugins_url('woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.6.8.2', WC_PLUGIN_FILE); ?>" id="jquery-blockui-js"></script>
        <script type="text/javascript" src="<?php echo plugins_url('woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.6.8.2', WC_PLUGIN_FILE); ?>" id="js-cookie-js"></script>
        <script type="text/javascript" id="woocommerce-js-extra">
            /* <![CDATA[ */
            var woocommerce_params = {
                "ajax_url": "\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="<?php echo plugins_url('woocommerce/assets/js/frontend/woocommerce.min.js?ver=6.8.2', WC_PLUGIN_FILE); ?>" id="woocommerce-js"></script>
        <script type="text/javascript" id="wc-cart-fragments-js-extra">
            /* <![CDATA[ */
            var wc_cart_fragments_params = {
                "ajax_url": "\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
                "cart_hash_key": "wc_cart_hash_6ab976eebad5abec7c393b9120966966",
                "fragment_name": "wc_fragments_6ab976eebad5abec7c393b9120966966",
                "request_timeout": "5000"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="<?php echo plugins_url('woocommerce/assets/js/frontend/cart-fragments.min.js?ver=6.8.2', WC_PLUGIN_FILE); ?>" id="wc-cart-fragments-js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/min/bootstrap-min.js?ver=3.4.10" id="bootstrap-js"></script>
        <script type="text/javascript" src="<?php echo includes_url('js/hoverIntent.min.js?ver=1.10.2'); ?>" id="hoverIntent-js"></script>
        <script type="text/javascript" src="<?php echo includes_url('js/imagesloaded.min.js?ver=5.0.0'); ?>" id="imagesloaded-js"></script>
        <script type="text/javascript" src="<?php echo includes_url('js/masonry.min.js?ver=4.2.2'); ?>" id="masonry-js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/min/plugins-min.js?ver=3.4.10" id="virtue_plugins-js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/min/magnific-popup-min.js?ver=3.4.10" id="magnific-popup-js"></script>
        <script type="text/javascript" id="virtue-lightbox-init-js-extra">
            /* <![CDATA[ */
            var virtue_lightbox = {
                "loading": "Loading...",
                "of": "%curr% of %total%",
                "error": "The Image could not be loaded."
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/min/virtue-lightbox-init-min.js?ver=3.4.10" id="virtue-lightbox-init-js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/min/main-min.js?ver=3.4.10" id="virtue_main-js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/min/kt-add-to-cart-variation-min.js?ver=6.6.2" id="kt-wc-add-to-cart-variation-js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/min/wc-quantity-increment-min.js?ver=6.6.2" id="wcqi-js-js"></script>
        <script type="text/javascript">
            (function(undefined) {
                let scriptOptions = {
                    "_localizedStrings": {
                        "redirect_overlay_title": "Hold On",
                        "redirect_overlay_text": "You are being redirected to another page,<br>it may take a few seconds.",
                        "webview_notification_text": "The selected provider doesn't support embedded browsers!"
                    },
                    "_targetWindow": "prefer-popup",
                    "_redirectOverlay": "overlay-with-spinner-and-message",
                    "_unsupportedWebviewBehavior": ""
                };
                /**
                 * Used when Cross-Origin-Opener-Policy blocked the access to the opener. We can't have a reference of the opened windows, so we should attempt to refresh only the windows that has opened popups.
                 */
                window._nslHasOpenedPopup = false;
                window._nslWebViewNoticeElement = null;

                window.NSLPopup = function(url, title, w, h) {

                    /**
                     * Cross-Origin-Opener-Policy blocked the access to the opener
                     */
                    if (typeof BroadcastChannel === "function") {
                        const _nslLoginBroadCastChannel = new BroadcastChannel('nsl_login_broadcast_channel');
                        _nslLoginBroadCastChannel.onmessage = (event) => {
                            if (window?._nslHasOpenedPopup && event.data?.action === 'redirect') {
                                window._nslHasOpenedPopup = false;

                                const url = event.data?.href;
                                _nslLoginBroadCastChannel.close();
                                if (typeof window.nslRedirect === 'function') {
                                    window.nslRedirect(url);
                                } else {
                                    window.opener.location = url;
                                }
                            }
                        };
                    }

                    const userAgent = navigator.userAgent,
                        mobile = function() {
                            return /\b(iPhone|iP[ao]d)/.test(userAgent) ||
                                /\b(iP[ao]d)/.test(userAgent) ||
                                /Android/i.test(userAgent) ||
                                /Mobile/i.test(userAgent);
                        },
                        screenX = window.screenX !== undefined ? window.screenX : window.screenLeft,
                        screenY = window.screenY !== undefined ? window.screenY : window.screenTop,
                        outerWidth = window.outerWidth !== undefined ? window.outerWidth : document.documentElement.clientWidth,
                        outerHeight = window.outerHeight !== undefined ? window.outerHeight : document.documentElement.clientHeight - 22,
                        targetWidth = mobile() ? null : w,
                        targetHeight = mobile() ? null : h,
                        left = parseInt(screenX + (outerWidth - targetWidth) / 2, 10),
                        right = parseInt(screenY + (outerHeight - targetHeight) / 2.5, 10),
                        features = [];
                    if (targetWidth !== null) {
                        features.push('width=' + targetWidth);
                    }
                    if (targetHeight !== null) {
                        features.push('height=' + targetHeight);
                    }
                    features.push('left=' + left);
                    features.push('top=' + right);
                    features.push('scrollbars=1');

                    const newWindow = window.open(url, title, features.join(','));

                    if (window.focus) {
                        newWindow.focus();
                    }

                    window._nslHasOpenedPopup = true;

                    return newWindow;
                };

                let isWebView = null;

                function checkWebView() {
                    if (isWebView === null) {
                        function _detectOS(ua) {
                            if (/Android/.test(ua)) {
                                return "Android";
                            } else if (/iPhone|iPad|iPod/.test(ua)) {
                                return "iOS";
                            } else if (/Windows/.test(ua)) {
                                return "Windows";
                            } else if (/Mac OS X/.test(ua)) {
                                return "Mac";
                            } else if (/CrOS/.test(ua)) {
                                return "Chrome OS";
                            } else if (/Firefox/.test(ua)) {
                                return "Firefox OS";
                            }
                            return "";
                        }

                        function _detectBrowser(ua) {
                            let android = /Android/.test(ua);

                            if (/Opera Mini/.test(ua) || / OPR/.test(ua) || / OPT/.test(ua)) {
                                return "Opera";
                            } else if (/CriOS/.test(ua)) {
                                return "Chrome for iOS";
                            } else if (/Edge/.test(ua)) {
                                return "Edge";
                            } else if (android && /Silk\//.test(ua)) {
                                return "Silk";
                            } else if (/Chrome/.test(ua)) {
                                return "Chrome";
                            } else if (/Firefox/.test(ua)) {
                                return "Firefox";
                            } else if (android) {
                                return "AOSP";
                            } else if (/MSIE|Trident/.test(ua)) {
                                return "IE";
                            } else if (/Safari\//.test(ua)) {
                                return "Safari";
                            } else if (/AppleWebKit/.test(ua)) {
                                return "WebKit";
                            }
                            return "";
                        }

                        function _detectBrowserVersion(ua, browser) {
                            if (browser === "Opera") {
                                return /Opera Mini/.test(ua) ? _getVersion(ua, "Opera Mini/") :
                                    / OPR/.test(ua) ? _getVersion(ua, " OPR/") :
                                    _getVersion(ua, " OPT/");
                            } else if (browser === "Chrome for iOS") {
                                return _getVersion(ua, "CriOS/");
                            } else if (browser === "Edge") {
                                return _getVersion(ua, "Edge/");
                            } else if (browser === "Chrome") {
                                return _getVersion(ua, "Chrome/");
                            } else if (browser === "Firefox") {
                                return _getVersion(ua, "Firefox/");
                            } else if (browser === "Silk") {
                                return _getVersion(ua, "Silk/");
                            } else if (browser === "AOSP") {
                                return _getVersion(ua, "Version/");
                            } else if (browser === "IE") {
                                return /IEMobile/.test(ua) ? _getVersion(ua, "IEMobile/") :
                                    /MSIE/.test(ua) ? _getVersion(ua, "MSIE ") :
                                    _getVersion(ua, "rv:");
                            } else if (browser === "Safari") {
                                return _getVersion(ua, "Version/");
                            } else if (browser === "WebKit") {
                                return _getVersion(ua, "WebKit/");
                            }
                            return "0.0.0";
                        }

                        function _getVersion(ua, token) {
                            try {
                                return _normalizeSemverString(ua.split(token)[1].trim().split(/[^\w\.]/)[0]);
                            } catch (o_O) {}
                            return "0.0.0";
                        }

                        function _normalizeSemverString(version) {
                            const ary = version.split(/[\._]/);
                            return (parseInt(ary[0], 10) || 0) + "." +
                                (parseInt(ary[1], 10) || 0) + "." +
                                (parseInt(ary[2], 10) || 0);
                        }

                        function _isWebView(ua, os, browser, version, options) {
                            switch (os + browser) {
                                case "iOSSafari":
                                    return false;
                                case "iOSWebKit":
                                    return _isWebView_iOS(options);
                                case "AndroidAOSP":
                                    return false;
                                case "AndroidChrome":
                                    return parseFloat(version) >= 42 ? /; wv/.test(ua) : /\d{2}\.0\.0/.test(version) ? true : _isWebView_Android(options);
                            }
                            return false;
                        }

                        function _isWebView_iOS(options) {
                            const document = (window["document"] || {});

                            if ("WEB_VIEW" in options) {
                                return options["WEB_VIEW"];
                            }
                            return !("fullscreenEnabled" in document || "webkitFullscreenEnabled" in document || false);
                        }

                        function _isWebView_Android(options) {
                            if ("WEB_VIEW" in options) {
                                return options["WEB_VIEW"];
                            }
                            return !("requestFileSystem" in window || "webkitRequestFileSystem" in window || false);
                        }

                        const options = {},
                            nav = window.navigator || {},
                            ua = nav.userAgent || "",
                            os = _detectOS(ua),
                            browser = _detectBrowser(ua),
                            browserVersion = _detectBrowserVersion(ua, browser);

                        isWebView = _isWebView(ua, os, browser, browserVersion, options);
                    }

                    return isWebView;
                }

                function isAllowedWebViewForUserAgent(provider) {
                    const facebookAllowedWebViews = [
                        'Instagram',
                        'FBAV',
                        'FBAN'
                    ];
                    let whitelist = [];

                    if (provider && provider === 'facebook') {
                        whitelist = facebookAllowedWebViews;
                    }

                    const nav = window.navigator || {},
                        ua = nav.userAgent || "";

                    if (whitelist.length && ua.match(new RegExp(whitelist.join('|')))) {
                        return true;
                    }

                    return false;
                }

                function disableButtonInWebView(providerButtonElement) {
                    if (providerButtonElement) {
                        providerButtonElement.classList.add('nsl-disabled-provider');
                        providerButtonElement.setAttribute('href', '#');

                        providerButtonElement.addEventListener('pointerdown', (e) => {
                            if (!window._nslWebViewNoticeElement) {
                                window._nslWebViewNoticeElement = document.createElement('div');
                                window._nslWebViewNoticeElement.id = "nsl-notices-fallback";
                                window._nslWebViewNoticeElement.addEventListener('pointerdown', function(e) {
                                    this.parentNode.removeChild(this);
                                    window._nslWebViewNoticeElement = null;
                                });
                                const webviewNoticeHTML = '<div class="error"><p>' + scriptOptions._localizedStrings.webview_notification_text + '</p></div>';

                                window._nslWebViewNoticeElement.insertAdjacentHTML("afterbegin", webviewNoticeHTML);
                                document.body.appendChild(window._nslWebViewNoticeElement);
                            }
                        });
                    }

                }

                window._nslDOMReady(function() {

                    window.nslRedirect = function(url) {
                        if (scriptOptions._redirectOverlay) {
                            const overlay = document.createElement('div');
                            overlay.id = "nsl-redirect-overlay";
                            let overlayHTML = '';
                            const overlayContainer = "<div id='nsl-redirect-overlay-container'>",
                                overlayContainerClose = "</div>",
                                overlaySpinner = "<div id='nsl-redirect-overlay-spinner'></div>",
                                overlayTitle = "<p id='nsl-redirect-overlay-title'>" + scriptOptions._localizedStrings.redirect_overlay_title + "</p>",
                                overlayText = "<p id='nsl-redirect-overlay-text'>" + scriptOptions._localizedStrings.redirect_overlay_text + "</p>";

                            switch (scriptOptions._redirectOverlay) {
                                case "overlay-only":
                                    break;
                                case "overlay-with-spinner":
                                    overlayHTML = overlayContainer + overlaySpinner + overlayContainerClose;
                                    break;
                                default:
                                    overlayHTML = overlayContainer + overlaySpinner + overlayTitle + overlayText + overlayContainerClose;
                                    break;
                            }

                            overlay.insertAdjacentHTML("afterbegin", overlayHTML);
                            document.body.appendChild(overlay);
                        }

                        window.location = url;
                    };

                    let targetWindow = scriptOptions._targetWindow || 'prefer-popup',
                        lastPopup = false;


                    document.addEventListener('click', function(e) {
                        if (e.target) {
                            const buttonLinkElement = e.target.closest('a[data-plugin="nsl"][data-action="connect"]') || e.target.closest('a[data-plugin="nsl"][data-action="link"]');
                            if (buttonLinkElement) {
                                if (lastPopup && !lastPopup.closed) {
                                    e.preventDefault();
                                    lastPopup.focus();
                                } else {

                                    let href = buttonLinkElement.href,
                                        success = false;
                                    if (href.indexOf('?') !== -1) {
                                        href += '&';
                                    } else {
                                        href += '?';
                                    }

                                    const redirectTo = buttonLinkElement.dataset.redirect;
                                    if (redirectTo === 'current') {
                                        href += 'redirect=' + encodeURIComponent(window.location.href) + '&';
                                    } else if (redirectTo && redirectTo !== '') {
                                        href += 'redirect=' + encodeURIComponent(redirectTo) + '&';
                                    }

                                    if (targetWindow !== 'prefer-same-window' && checkWebView()) {
                                        targetWindow = 'prefer-same-window';
                                    }

                                    if (targetWindow === 'prefer-popup') {
                                        lastPopup = NSLPopup(href + 'display=popup', 'nsl-social-connect', buttonLinkElement.dataset.popupwidth, buttonLinkElement.dataset.popupheight);
                                        if (lastPopup) {
                                            success = true;
                                            e.preventDefault();
                                        }
                                    } else if (targetWindow === 'prefer-new-tab') {
                                        const newTab = window.open(href + 'display=popup', '_blank');
                                        if (newTab) {
                                            if (window.focus) {
                                                newTab.focus();
                                            }
                                            success = true;
                                            window._nslHasOpenedPopup = true;
                                            e.preventDefault();
                                        }
                                    }

                                    if (!success) {
                                        window.location = href;
                                        e.preventDefault();
                                    }
                                }
                            }
                        }
                    });

                    let buttonCountChanged = false;

                    const googleLoginButtons = document.querySelectorAll(' a[data-plugin="nsl"][data-provider="google"]');
                    if (googleLoginButtons.length && checkWebView()) {
                        googleLoginButtons.forEach(function(googleLoginButton) {
                            if (scriptOptions._unsupportedWebviewBehavior === 'disable-button') {
                                disableButtonInWebView(googleLoginButton);
                            } else {
                                googleLoginButton.remove();
                                buttonCountChanged = true;
                            }
                        });
                    }

                    const facebookLoginButtons = document.querySelectorAll(' a[data-plugin="nsl"][data-provider="facebook"]');
                    if (facebookLoginButtons.length && checkWebView() && /Android/.test(window.navigator.userAgent) && !isAllowedWebViewForUserAgent('facebook')) {
                        facebookLoginButtons.forEach(function(facebookLoginButton) {
                            if (scriptOptions._unsupportedWebviewBehavior === 'disable-button') {
                                disableButtonInWebView(facebookLoginButton);
                            } else {
                                facebookLoginButton.remove();
                                buttonCountChanged = true;
                            }
                        });
                    }

                    const separators = document.querySelectorAll('div.nsl-separator');
                    if (buttonCountChanged && separators.length) {
                        separators.forEach(function(separator) {
                            const separatorParentNode = separator.parentNode;
                            if (separatorParentNode) {
                                const separatorButtonContainer = separatorParentNode.querySelector('div.nsl-container-buttons');
                                if (separatorButtonContainer && !separatorButtonContainer.hasChildNodes()) {
                                    separator.remove();
                                }
                            }
                        })
                    }
                });
            })();


            document.addEventListener('DOMContentLoaded', function() {
                // Función para alternar la visibilidad de la contraseña
                function togglePassword(passwordInput, showPasswordBtn) {
                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        showPasswordBtn.classList.add('display-password');
                        showPasswordBtn.classList.remove('bx-show');
                        showPasswordBtn.classList.add('bx-hide');
                    } else {
                        passwordInput.type = 'password';
                        showPasswordBtn.classList.remove('display-password');
                        showPasswordBtn.classList.remove('bx-hide');
                        showPasswordBtn.classList.add('bx-show');
                    }
                }

                // Seleccionar todos los campos de contraseña
                const passwordFields = document.querySelectorAll('.password-input input[type="password"]');

                passwordFields.forEach(function(passwordInput) {
                    const showPasswordBtn = passwordInput.nextElementSibling;

                    // Agregar el evento click
                    showPasswordBtn.addEventListener('click', function() {
                        togglePassword(passwordInput, showPasswordBtn);
                    });
                });
            });
        </script>
    </body>

    </html>
<?php
}
