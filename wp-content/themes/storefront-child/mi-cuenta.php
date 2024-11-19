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
        <link rel="alternate" type="application/rss+xml" title="Casas de Retiros y Convivencias &raquo; Feed" href="http://casasdeconvivencias.test/feed/" />
        <link rel="alternate" type="application/rss+xml" title="Casas de Retiros y Convivencias &raquo; RSS de los comentarios" href="http://casasdeconvivencias.test/comments/feed/" />
        <script type="text/javascript">
            /* <![CDATA[ */
            window._wpemojiSettings = {
                "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
                "ext": ".png",
                "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
                "svgExt": ".svg",
                "source": {
                    "concatemoji": "https:\/\/http://casasdeconvivencias.test\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.2"
                
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
        <link rel='stylesheet' id='dashicons-css' href='http://casasdeconvivencias.test/wp-includes/css/dashicons.min.css?ver=6.6.2' type='text/css' media='all' />
        <link rel='stylesheet' id='admin-bar-css' href='http://casasdeconvivencias.test/wp-includes/css/admin-bar.min.css?ver=6.6.2' type='text/css' media='all' />
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
        <style id='wp-emoji-styles-inline-css' type='text/css'>
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
        </style>
        <link rel='stylesheet' id='wp-block-library-css' href='http://casasdeconvivencias.test/wp-includes/css/dist/block-library/style.min.css?ver=6.6.2' type='text/css' media='all' />
        <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='http://casasdeconvivencias.test/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=8.0.0' type='text/css' media='all' />
        <link rel='stylesheet' id='wc-blocks-style-css' href='http://casasdeconvivencias.test/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=8.0.0' type='text/css' media='all' />
        <style id='classic-theme-styles-inline-css' type='text/css'>
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
        <style id='global-styles-inline-css' type='text/css'>
            :root {
                --wp--preset--aspect-ratio--square: 1;
                --wp--preset--aspect-ratio--4-3: 4/3;
                --wp--preset--aspect-ratio--3-4: 3/4;
                --wp--preset--aspect-ratio--3-2: 3/2;
                --wp--preset--aspect-ratio--2-3: 2/3;
                --wp--preset--aspect-ratio--16-9: 16/9;
                --wp--preset--aspect-ratio--9-16: 9/16;
                --wp--preset--color--black: #000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #fff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--color--virtue-primary: #2d5c88;
                --wp--preset--color--virtue-primary-light: #6c8dab;
                --wp--preset--color--very-light-gray: #eee;
                --wp--preset--color--very-dark-gray: #444;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
                --wp--preset--spacing--20: 0.44rem;
                --wp--preset--spacing--30: 0.67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
            }

            :where(.is-layout-flex) {
                gap: 0.5em;
            }

            :where(.is-layout-grid) {
                gap: 0.5em;
            }

            body .is-layout-flex {
                display: flex;
            }

            .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }

            .is-layout-flex> :is(*, div) {
                margin: 0;
            }

            body .is-layout-grid {
                display: grid;
            }

            .is-layout-grid> :is(*, div) {
                margin: 0;
            }

            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }

            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }

            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }

            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }

            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }

            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }

            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }

            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }

            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }

            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }

            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }

            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }

            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }

            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }

            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }

            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }

            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }

            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }

            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }

            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }

            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }

            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }

            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }

            :root :where(.wp-block-pullquote) {
                font-size: 1.5em;
                line-height: 1.6;
            }
        </style>
        <link rel='stylesheet' id='select2-css' href='http://casasdeconvivencias.test/wp-content/plugins/woocommerce/assets/css/select2.css?ver=6.8.2' type='text/css' media='all' />
        <style id='woocommerce-inline-inline-css' type='text/css'>
            .woocommerce form .form-row .required {
                visibility: visible;
            }
        </style>
        <link rel='stylesheet' id='parent-style-css' href='http://casasdeconvivencias.test/wp-content/themes/virtue/style.css?ver=6.6.2' type='text/css' media='all' />
        <link rel='stylesheet' id='wcplpro_css-css' href='http://casasdeconvivencias.test/wp-content/plugins/Woocommerce_Products_List_Pro_v1.1.4/assets/css/wcplpro.css?ver=6.6.2' type='text/css' media='all' />
        <link rel='stylesheet' id='virtue_theme-css' href='http://casasdeconvivencias.test/wp-content/themes/virtue/assets/css/virtue.css?ver=3.4.10' type='text/css' media='all' />
        <link rel='stylesheet' id='virtue_skin-css' href='http://casasdeconvivencias.test/wp-content/themes/virtue/assets/css/skins/default.css?ver=3.4.10' type='text/css' media='all' />
        <link rel='stylesheet' id='virtue_child-css' href='http://casasdeconvivencias.test/wp-content/themes/virtue-child/style.css?ver=1.0.0' type='text/css' media='all' />
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
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
        <!--[if lt IE 9]>
<script type="text/javascript" src="https://casasdeconvivencias.org.ar/wp-content/themes/virtue/assets/js/vendor/respond.min.js?ver=6.6.2" id="virtue-respond-js"></script>
<![endif]-->
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/plugins/Woocommerce_Products_List_Pro_v1.1.4/assets/js/stupidtable.js?ver=6.6.2" id="wcplpro_table_sort-js"></script>
        <link rel="https://api.w.org/" href="http://casasdeconvivencias.test/wp-json/" />
        <link rel="alternate" title="JSON" type="application/json" href="http://casasdeconvivencias.test/wp-json/wp/v2/pages/7" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://casasdeconvivencias.test/xmlrpc.php?rsd" />
        <meta name="generator" content="WordPress 6.6.2" />
        <meta name="generator" content="WooCommerce 6.8.2" />
        <link rel="canonical" href="http://casasdeconvivencias.test/mi-cuenta/" />
        <link rel='shortlink' href='http://casasdeconvivencias.test/?p=7' />
        <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="http://casasdeconvivencias.test/wp-json/oembed/1.0/embed?url=https%3A%2F%2FCASASDECONVIVENCIAS-MASTER%2Fmi-cuenta%2F" />
        <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="http://casasdeconvivencias.test/wp-json/oembed/1.0/embed?url=https%3A%2F%2FCASASDECONVIVENCIAS-MASTER%2Fmi-cuenta%2F&#038;format=xml" />
        <link rel="Shortcut Icon" type="image/x-icon" href="http://casasdeconvivencias.test/wp-content/themes/virtue-child/favicon/favicon.png" />
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
                background: url(http://casasdeconvivencias.test/wp-content/uploads/2018/06/beige-minimal-background-pattern-wordpress-8.jpg) repeat;
            }

            .topclass {
                background: transparent;
            }

            .headerclass {
                background: url(http://casasdeconvivencias.test/wp-content/uploads/2018/06/header-background-mirror-final-2.jpg) no-repeat;
            }

            body {
                background: url(http://casasdeconvivencias.test/wp-content/uploads/2018/06/grey-background.jpg);
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
        <style type="text/css">
            div.nsl-container[data-align="left"] {
                text-align: left;
            }

            div.nsl-container[data-align="center"] {
                text-align: center;
            }

            div.nsl-container[data-align="right"] {
                text-align: right;
            }


            div.nsl-container div.nsl-container-buttons a[data-plugin="nsl"] {
                text-decoration: none;
                box-shadow: none;
                border: 0;
            }

            div.nsl-container .nsl-container-buttons {
                display: flex;
                padding: 5px 0;
            }

            div.nsl-container.nsl-container-block .nsl-container-buttons {
                display: inline-grid;
                grid-template-columns: minmax(145px, auto);
            }

            div.nsl-container-block-fullwidth .nsl-container-buttons {
                flex-flow: column;
                align-items: center;
            }

            div.nsl-container-block-fullwidth .nsl-container-buttons a,
            div.nsl-container-block .nsl-container-buttons a {
                flex: 1 1 auto;
                display: block;
                margin: 5px 0;
                width: 100%;
            }

            div.nsl-container-inline {
                margin: -5px;
                text-align: left;
            }

            div.nsl-container-inline .nsl-container-buttons {
                justify-content: center;
                flex-wrap: wrap;
            }

            div.nsl-container-inline .nsl-container-buttons a {
                margin: 5px;
                display: inline-block;
            }

            div.nsl-container-grid .nsl-container-buttons {
                flex-flow: row;
                align-items: center;
                flex-wrap: wrap;
            }

            div.nsl-container-grid .nsl-container-buttons a {
                flex: 1 1 auto;
                display: block;
                margin: 5px;
                max-width: 280px;
                width: 100%;
            }

            @media only screen and (min-width: 650px) {
                div.nsl-container-grid .nsl-container-buttons a {
                    width: auto;
                }
            }

            div.nsl-container .nsl-button {
                cursor: pointer;
                vertical-align: top;
                border-radius: 4px;
            }

            div.nsl-container .nsl-button-default {
                color: #fff;
                display: flex;
            }

            div.nsl-container .nsl-button-icon {
                display: inline-block;
            }

            div.nsl-container .nsl-button-svg-container {
                flex: 0 0 auto;
                padding: 8px;
                display: flex;
                align-items: center;
            }

            div.nsl-container svg {
                height: 24px;
                width: 24px;
                vertical-align: top;
            }

            div.nsl-container .nsl-button-default div.nsl-button-label-container {
                margin: 0 24px 0 12px;
                padding: 10px 0;
                font-family: Helvetica, Arial, sans-serif;
                font-size: 16px;
                line-height: 20px;
                letter-spacing: .25px;
                overflow: hidden;
                text-align: center;
                text-overflow: clip;
                white-space: nowrap;
                flex: 1 1 auto;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                text-transform: none;
                display: inline-block;
            }

            div.nsl-container .nsl-button-google[data-skin="dark"] .nsl-button-svg-container {
                margin: 1px;
                padding: 7px;
                border-radius: 3px;
                background: #fff;
            }

            div.nsl-container .nsl-button-google[data-skin="light"] {
                border-radius: 1px;
                box-shadow: 0 1px 5px 0 rgba(0, 0, 0, .25);
                color: RGBA(0, 0, 0, 0.54);
            }

            div.nsl-container .nsl-button-apple .nsl-button-svg-container {
                padding: 0 6px;
            }

            div.nsl-container .nsl-button-apple .nsl-button-svg-container svg {
                height: 40px;
                width: auto;
            }

            div.nsl-container .nsl-button-apple[data-skin="light"] {
                color: #000;
                box-shadow: 0 0 0 1px #000;
            }

            div.nsl-container .nsl-button-facebook[data-skin="white"] {
                color: #000;
                box-shadow: inset 0 0 0 1px #000;
            }

            div.nsl-container .nsl-button-facebook[data-skin="light"] {
                color: #1877F2;
                box-shadow: inset 0 0 0 1px #1877F2;
            }

            div.nsl-container .nsl-button-spotify[data-skin="white"] {
                color: #191414;
                box-shadow: inset 0 0 0 1px #191414;
            }

            div.nsl-container .nsl-button-apple div.nsl-button-label-container {
                font-size: 17px;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            }

            div.nsl-container .nsl-button-slack div.nsl-button-label-container {
                font-size: 17px;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            }

            div.nsl-container .nsl-button-slack[data-skin="light"] {
                color: #000000;
                box-shadow: inset 0 0 0 1px #DDDDDD;
            }

            div.nsl-container .nsl-button-tiktok[data-skin="light"] {
                color: #161823;
                box-shadow: 0 0 0 1px rgba(22, 24, 35, 0.12);
            }


            div.nsl-container .nsl-button-kakao {
                color: rgba(0, 0, 0, 0.85);
            }

            .nsl-clear {
                clear: both;
            }

            .nsl-container {
                clear: both;
            }

            .nsl-disabled-provider .nsl-button {
                filter: grayscale(1);
                opacity: 0.8;
            }

            /*Button align start*/

            div.nsl-container-inline[data-align="left"] .nsl-container-buttons {
                justify-content: flex-start;
            }

            div.nsl-container-inline[data-align="center"] .nsl-container-buttons {
                justify-content: center;
            }

            div.nsl-container-inline[data-align="right"] .nsl-container-buttons {
                justify-content: flex-end;
            }


            div.nsl-container-grid[data-align="left"] .nsl-container-buttons {
                justify-content: flex-start;
            }

            div.nsl-container-grid[data-align="center"] .nsl-container-buttons {
                justify-content: center;
            }

            div.nsl-container-grid[data-align="right"] .nsl-container-buttons {
                justify-content: flex-end;
            }

            div.nsl-container-grid[data-align="space-around"] .nsl-container-buttons {
                justify-content: space-around;
            }

            div.nsl-container-grid[data-align="space-between"] .nsl-container-buttons {
                justify-content: space-between;
            }

            /* Button align end*/

            /* Redirect */

            #nsl-redirect-overlay {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                position: fixed;
                z-index: 1000000;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                backdrop-filter: blur(1px);
                background-color: RGBA(0, 0, 0, .32);
                ;
            }

            #nsl-redirect-overlay-container {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: white;
                padding: 30px;
                border-radius: 10px;
            }

            #nsl-redirect-overlay-spinner {
                content: '';
                display: block;
                margin: 20px;
                border: 9px solid RGBA(0, 0, 0, .6);
                border-top: 9px solid #fff;
                border-radius: 50%;
                box-shadow: inset 0 0 0 1px RGBA(0, 0, 0, .6), 0 0 0 1px RGBA(0, 0, 0, .6);
                width: 40px;
                height: 40px;
                animation: nsl-loader-spin 2s linear infinite;
            }

            @keyframes nsl-loader-spin {
                0% {
                    transform: rotate(0deg)
                }

                to {
                    transform: rotate(360deg)
                }
            }

            #nsl-redirect-overlay-title {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
                font-size: 18px;
                font-weight: bold;
                color: #3C434A;
            }

            #nsl-redirect-overlay-text {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
                text-align: center;
                font-size: 14px;
                color: #3C434A;
            }

            /* Redirect END*/
        </style>
        <style type="text/css">
            /* Notice fallback */
            #nsl-notices-fallback {
                position: fixed;
                right: 10px;
                top: 10px;
                z-index: 10000;
            }

            .admin-bar #nsl-notices-fallback {
                top: 42px;
            }

            #nsl-notices-fallback>div {
                position: relative;
                background: #fff;
                border-left: 4px solid #fff;
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                margin: 5px 15px 2px;
                padding: 1px 20px;
            }

            #nsl-notices-fallback>div.error {
                display: block;
                border-left-color: #dc3232;
            }

            #nsl-notices-fallback>div.updated {
                display: block;
                border-left-color: #46b450;
            }

            #nsl-notices-fallback p {
                margin: .5em 0;
                padding: 2px;
            }

            #nsl-notices-fallback>div:after {
                position: absolute;
                right: 5px;
                top: 5px;
                content: '\00d7';
                display: block;
                height: 16px;
                width: 16px;
                line-height: 16px;
                text-align: center;
                font-size: 20px;
                cursor: pointer;
            }
        </style>
        <style type="text/css" title="dynamic-css" class="options-output">
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

            h1 {
                font-family: Lato;
                line-height: 40px;
                font-weight: 400;
                font-style: normal;
                font-size: 38px;
            }

            h2 {
                font-family: Lato;
                line-height: 40px;
                font-weight: normal;
                font-style: normal;
                font-size: 32px;
            }

            h3 {
                font-family: Lato;
                line-height: 40px;
                font-weight: 400;
                font-style: normal;
                font-size: 28px;
            }

            h4 {
                font-family: Lato;
                line-height: 40px;
                font-weight: 400;
                font-style: normal;
                font-size: 24px;
            }

            h5 {
                font-family: Lato;
                line-height: 24px;
                font-weight: 700;
                font-style: normal;
                font-size: 18px;
            }

            body {
                font-family: Verdana, Geneva, sans-serif;
                line-height: 20px;
                font-weight: 400;
                font-style: normal;
                font-size: 14px;
            }

            #nav-main ul.sf-menu a {
                font-family: Lato;
                line-height: 18px;
                font-weight: 400;
                font-style: normal;
                font-size: 12px;
            }

            #nav-second ul.sf-menu a {
                font-family: Lato;
                line-height: 22px;
                font-weight: 400;
                font-style: normal;
                font-size: 18px;
            }

            .kad-nav-inner .kad-mnav,
            .kad-mobile-nav .kad-nav-inner li a,
            .nav-trigger-case {
                font-family: Lato;
                line-height: 20px;
                font-weight: 400;
                font-style: normal;
                color: #ffffff;
                font-size: 16px;
            }
        </style>
    </head>

    <body class="page-template-default page page-id-7 logged-in admin-bar no-customize-support wp-embed-responsive theme-virtue woocommerce-account woocommerce-page woocommerce-no-js boxed mi-cuenta">
        <div id="kt-skip-link"><a href="#content">Skip to Main Content</a></div>
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
                    <li role='group' id='wp-admin-bar-wp-logo' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='http://casasdeconvivencias.test/wp-admin/about.php'><span class="ab-icon" aria-hidden="true"></span><span class="screen-reader-text">Acerca de WordPress</span></a>
                        <div class="ab-sub-wrapper">
                            <ul role='menu' aria-label='Acerca de WordPress' id='wp-admin-bar-wp-logo-default' class="ab-submenu">
                                <li role='group' id='wp-admin-bar-about'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/about.php'>Acerca de WordPress</a></li>
                                <li role='group' id='wp-admin-bar-contribute'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/contribute.php'>Unite</a></li>
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
                    <li role='group' id='wp-admin-bar-my-sites' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='http://casasdeconvivencias.test/wp-admin/my-sites.php'>Mis sitios</a>
                        <div class="ab-sub-wrapper">
                            <ul role='menu' id='wp-admin-bar-my-sites-list' class="ab-submenu">
                                <li role='group' id='wp-admin-bar-blog-1' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='http://casasdeconvivencias.test/wp-admin/'><span class="wp-admin-bar-arrow" aria-hidden="true"></span>
                                        <div class="blavatar"></div>Casas de Retiros y Convivencias
                                    </a>
                                    <div class="ab-sub-wrapper">
                                        <ul role='menu' id='wp-admin-bar-blog-1-default' class="ab-submenu">
                                            <li role='group' id='wp-admin-bar-blog-1-d'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/'>Escritorio</a></li>
                                            <li role='group' id='wp-admin-bar-blog-1-n'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/post-new.php'>Nueva entrada</a></li>
                                            <li role='group' id='wp-admin-bar-blog-1-c'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/edit-comments.php'>Gestionar comentarios</a></li>
                                            <li role='group' id='wp-admin-bar-blog-1-v'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/'>Visitar sitio</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li role='group' id='wp-admin-bar-site-name' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='http://casasdeconvivencias.test/wp-admin/'>Casas de Retiros y Convivencias</a>
                        <div class="ab-sub-wrapper">
                            <ul role='menu' aria-label='Casas de Retiros y Convivencias' id='wp-admin-bar-site-name-default' class="ab-submenu">
                                <li role='group' id='wp-admin-bar-dashboard'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/'>Escritorio</a></li>
                            </ul>
                            <ul role='menu' aria-label='Casas de Retiros y Convivencias' id='wp-admin-bar-appearance' class="ab-submenu">
                                <li role='group' id='wp-admin-bar-themes'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/themes.php'>Temas</a></li>
                                <li role='group' id='wp-admin-bar-widgets'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/widgets.php'>Widgets</a></li>
                                <li role='group' id='wp-admin-bar-menus'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/nav-menus.php'>Menús</a></li>
                            </ul>
                        </div>
                    </li>
                    <li role='group' id='wp-admin-bar-customize' class="hide-if-no-customize"><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/customize.php?url=https%3A%2F%2FCASASDECONVIVENCIAS-MASTER%2Fmi-cuenta%2F'>Personalizar</a></li>
                    <li role='group' id='wp-admin-bar-comments'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/edit-comments.php'><span class="ab-icon" aria-hidden="true"></span><span class="ab-label awaiting-mod pending-count count-159" aria-hidden="true">159</span><span class="screen-reader-text comments-in-moderation-text">159 comentarios en moderación</span></a></li>
                    <li role='group' id='wp-admin-bar-new-content' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='http://casasdeconvivencias.test/wp-admin/post-new.php'><span class="ab-icon" aria-hidden="true"></span><span class="ab-label">Agregar</span></a>
                        <div class="ab-sub-wrapper">
                            <ul role='menu' aria-label='Agregar' id='wp-admin-bar-new-content-default' class="ab-submenu">
                                <li role='group' id='wp-admin-bar-new-post'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/post-new.php'>Entrada</a></li>
                                <li role='group' id='wp-admin-bar-new-media'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/media-new.php'>Medio</a></li>
                                <li role='group' id='wp-admin-bar-new-page'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/post-new.php?post_type=page'>Página</a></li>
                                <li role='group' id='wp-admin-bar-new-portfolio'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/post-new.php?post_type=portfolio'>Portfolio Item</a></li>
                                <li role='group' id='wp-admin-bar-new-product'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/post-new.php?post_type=product'>Producto</a></li>
                                <li role='group' id='wp-admin-bar-new-shop_order'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/post-new.php?post_type=shop_order'>Pedido</a></li>
                                <li role='group' id='wp-admin-bar-new-shop_coupon'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/post-new.php?post_type=shop_coupon'>Cupón</a></li>
                                <li role='group' id='wp-admin-bar-new-user'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/user-new.php'>Usuario</a></li>
                            </ul>
                        </div>
                    </li>
                    <li role='group' id='wp-admin-bar-edit'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-admin/post.php?post=7&#038;action=edit'>Editar página</a></li>
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
                                <li role='group' id='wp-admin-bar-logout'><a class='ab-item' role="menuitem" href='http://casasdeconvivencias.test/wp-login.php?action=logout&#038;_wpnonce=4b3462bb36'>Cerrar sesión</a></li>
                            </ul>
                        </div>
                    </li>
                    <li role='group' id='wp-admin-bar-search' class="admin-bar-search">
                        <div class="ab-item ab-empty-item" tabindex="-1" role="menuitem">
                            <form action="http://casasdeconvivencias.test" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><label for="adminbar-search" class="screen-reader-text">Buscar</label><input type="submit" class="adminbar-button" value="Buscar" /></form>
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
                                <a class="brand logofont" href="http://casasdeconvivencias.test">
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
                    margin: 10px 0;
                    text-align: center;
                }

                /* Contenedor de los enlaces de navegación */
                .user-navigation {
                    width: 100%;
                    margin-top: 20px;
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

                    margin: 10px 0;
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
                                            <li><a href="<?php //echo esc_url(wc_get_account_endpoint_url('orders')); 
                                                            ?>">Pedidos</a></li>
                                            <li><a href="<?php //echo esc_url(wc_get_account_endpoint_url('downloads')); 
                                                            ?>">Descargas</a></li>
                                            <li><a href="<?php //echo esc_url(wc_get_account_endpoint_url('edit-address')); 
                                                            ?>">Detalles de la cuenta</a></li>
                                            <li><a href="<?php //echo esc_url(wc_get_account_endpoint_url('customer-logout')); 
                                                            ?>">Salir</a></li>
                                        </p>
                                    </nav>

                                    <!-- <nav class="woocommerce-MyAccount-navigation">
                                        <ul>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active">
                                                <a href="http://localhost/CASASDECONVIVENCIAS-MASTER/mi-cuenta/">Escritorio</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                                                <a href="http://localhost/CASASDECONVIVENCIAS-MASTER/mi-cuenta/orders/">Pedidos</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
                                                <a href="http://localhost/CASASDECONVIVENCIAS-MASTER/mi-cuenta/downloads/">Descargas</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                                                <a href="http://localhost/CASASDECONVIVENCIAS-MASTER/mi-cuenta/edit-address/">Direcciones</a>
                                            </li>
                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                                                <a href="http://localhost/CASASDECONVIVENCIAS-MASTER/mi-cuenta/customer-logout/?_wpnonce=26299466d0">Salir</a>
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
                <!-- <footer id="containerfooter" class="footerclass" itemscope itemtype="https://schema.org/WPFooter"> -->
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 footercol1">
                            <div class="widget-1 widget-first footer-widget">
                                <aside id="widget_kadence_social-2" class="widget widget_kadence_social">
                                    <div class="virtue_social_widget clearfix">

                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="footercredits clearfix">

                        <p>ENLACES EXTERNOS : <b>
                                <a style="color: #0088ff;" onmouseover="this.style.color='#0410fa'" onmouseout="this.style.color='#0088ff'" href="www.opusdei.org.ar">Página del Opus Dei</a> -
                                <a style="color: #0088ff;" onmouseover="this.style.color='#0410fa'" onmouseout="this.style.color='#0088ff'" href="https://opusdei.org/es-es/section/san-josemaria/">Página de San Josemaría</a>
                            </b>
                        </p>
                    </div>

                </div>

                <!-- </footer> -->

            </div><!--Wrapper-->
            <div id="wcplpro_added_to_cart_notification" class="autoclose" style="display: none;">
                <a href="http://casasdeconvivencias.test/reservas/" title="Go to cart"><span></span> &times; product(s) added to cart &rarr;</a> <a href="#" class="slideup_panel">&times;</a>
            </div>
            <script type="text/javascript">
                (function() {
                    var c = document.body.className;
                    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
                    document.body.className = c;
                })();
            </script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-includes/js/hoverintent-js.min.js?ver=2.2.1" id="hoverintent-js-js"></script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-includes/js/admin-bar.min.js?ver=6.6.2" id="admin-bar-js"></script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.9-wc.6.8.2" id="selectWoo-js"></script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.6.8.2" id="jquery-blockui-js"></script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.6.8.2" id="js-cookie-js"></script>
            <script type="text/javascript" id="woocommerce-js-extra">
                /* <![CDATA[ */
                var woocommerce_params = {
                    "ajax_url": "\/wp-admin\/admin-ajax.php",
                    "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
                };
                /* ]]> */
            </script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=6.8.2" id="woocommerce-js"></script>
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
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=6.8.2" id="wc-cart-fragments-js"></script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/themes/virtue/assets/js/min/bootstrap-min.js?ver=3.4.10" id="bootstrap-js"></script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-includes/js/hoverIntent.min.js?ver=1.10.2" id="hoverIntent-js"></script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-includes/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js"></script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-includes/js/masonry.min.js?ver=4.2.2" id="masonry-js"></script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/themes/virtue/assets/js/min/plugins-min.js?ver=3.4.10" id="virtue_plugins-js"></script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/themes/virtue/assets/js/min/magnific-popup-min.js?ver=3.4.10" id="magnific-popup-js"></script>
            <script type="text/javascript" id="virtue-lightbox-init-js-extra">
                /* <![CDATA[ */
                var virtue_lightbox = {
                    "loading": "Loading...",
                    "of": "%curr% of %total%",
                    "error": "The Image could not be loaded."
                };
                /* ]]> */
            </script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/themes/virtue/assets/js/min/virtue-lightbox-init-min.js?ver=3.4.10" id="virtue-lightbox-init-js"></script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/themes/virtue/assets/js/min/main-min.js?ver=3.4.10" id="virtue_main-js"></script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/themes/virtue/assets/js/min/kt-add-to-cart-variation-min.js?ver=6.6.2" id="kt-wc-add-to-cart-variation-js"></script>
            <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/themes/virtue/assets/js/min/wc-quantity-increment-min.js?ver=6.6.2" id="wcqi-js-js"></script>
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
                $secret_key = '6LfX0n4qAAAAANGMR1gBsFLCwbbI5gHVrsFtVfuL';
                $verify = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', array(
                    'body' => array(
                        'secret' => $secret_key,
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
                $secret_key = '6LfX0n4qAAAAANGMR1gBsFLCwbbI5gHVrsFtVfuL';
                $verify = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', array(
                    'body' => array(
                        'secret' => $secret_key,
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
        .signup-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
        }

        /* Estilo para el título principal */
        .signup-container h1 {
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
        .signup-container {
            max-width: 900px;
            margin: 2px auto;
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

        /* Ajustar posición del ícono de mostrar/ocultar contraseña */
        .woocommerce form .show-password-input,
        .woocommerce-page form .show-password-input {
            top: 50%;
            transform: translateY(-50%);
            right: 10px;
            color: #0088ff !important;
        }

        /* Mantener el mismo color cuando está activo (ojo tachado) */
        .woocommerce form .show-password-input.display-password,
        .woocommerce-page form .show-password-input.display-password {
            color: #0088ff !important;
        }

        /* Asegurar que el campo de contraseña tenga suficiente padding */
        .woocommerce form .form-row input[type="password"] {
            padding-right: 40px;
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
        <link rel="alternate" type="application/rss+xml" title="Casas de Retiros y Convivencias &raquo; Feed" href="http://casasdeconvivencias.test/feed/" />
        <link rel="alternate" type="application/rss+xml" title="Casas de Retiros y Convivencias &raquo; RSS de los comentarios" href="http://casasdeconvivencias.test/comments/feed/" />
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            window._wpemojiSettings = {
                "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
                "ext": ".png",
                "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
                "svgExt": ".svg",
                "source": {
                    "concatemoji": "https:\/\/casasdeconvivencias.test\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.2"
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
        <style id='wp-emoji-styles-inline-css' type='text/css'>
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
        </style>
        <link rel='stylesheet' id='wp-block-library-css' href='http://casasdeconvivencias.test/wp-includes/css/dist/block-library/style.min.css?ver=6.6.2' type='text/css' media='all' />
        <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='http://casasdeconvivencias.test/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=8.0.0' type='text/css' media='all' />
        <link rel='stylesheet' id='wc-blocks-style-css' href='http://casasdeconvivencias.test/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=8.0.0' type='text/css' media='all' />
        <style id='classic-theme-styles-inline-css' type='text/css'>
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
        <style id='global-styles-inline-css' type='text/css'>
            :root {
                --wp--preset--aspect-ratio--square: 1;
                --wp--preset--aspect-ratio--4-3: 4/3;
                --wp--preset--aspect-ratio--3-4: 3/4;
                --wp--preset--aspect-ratio--3-2: 3/2;
                --wp--preset--aspect-ratio--2-3: 2/3;
                --wp--preset--aspect-ratio--16-9: 16/9;
                --wp--preset--aspect-ratio--9-16: 9/16;
                --wp--preset--color--black: #000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #fff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--color--virtue-primary: #2d5c88;
                --wp--preset--color--virtue-primary-light: #6c8dab;
                --wp--preset--color--very-light-gray: #eee;
                --wp--preset--color--very-dark-gray: #444;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
                --wp--preset--spacing--20: 0.44rem;
                --wp--preset--spacing--30: 0.67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
            }

            :where(.is-layout-flex) {
                gap: 0.5em;
            }

            :where(.is-layout-grid) {
                gap: 0.5em;
            }

            body .is-layout-flex {
                display: flex;
            }

            .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }

            .is-layout-flex> :is(*, div) {
                margin: 0;
            }

            body .is-layout-grid {
                display: grid;
            }

            .is-layout-grid> :is(*, div) {
                margin: 0;
            }

            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }

            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }

            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }

            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }

            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }

            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }

            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }

            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }

            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }

            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }

            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }

            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }

            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }

            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }

            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }

            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }

            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }

            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }

            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }

            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }

            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }

            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }

            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }

            :root :where(.wp-block-pullquote) {
                font-size: 1.5em;
                line-height: 1.6;
            }
        </style>
        <link rel='stylesheet' id='select2-css' href='http://casasdeconvivencias.test/wp-content/plugins/woocommerce/assets/css/select2.css?ver=6.8.2' type='text/css' media='all' />
        <style id='woocommerce-inline-inline-css' type='text/css'>
            .woocommerce form .form-row .required {
                visibility: visible;
            }
        </style>
        <link rel='stylesheet' id='parent-style-css' href='http://casasdeconvivencias.test/wp-content/themes/virtue/style.css?ver=6.6.2' type='text/css' media='all' />
        <link rel='stylesheet' id='wcplpro_css-css' href='http://casasdeconvivencias.test/wp-content/plugins/Woocommerce_Products_List_Pro_v1.1.4/assets/css/wcplpro.css?ver=6.6.2' type='text/css' media='all' />
        <link rel='stylesheet' id='virtue_theme-css' href='http://casasdeconvivencias.test/wp-content/themes/virtue/assets/css/virtue.css?ver=3.4.10' type='text/css' media='all' />
        <link rel='stylesheet' id='virtue_skin-css' href='http://casasdeconvivencias.test/wp-content/themes/virtue/assets/css/skins/default.css?ver=3.4.10' type='text/css' media='all' />
        <link rel='stylesheet' id='virtue_child-css' href='http://casasdeconvivencias.test/wp-content/themes/virtue-child/style.css?ver=1.0.0' type='text/css' media='all' />
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
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
        <!--[if lt IE 9]>
<script type="text/javascript" src="https://casasdeconvivencias.org.ar/wp-content/themes/virtue/assets/js/vendor/respond.min.js?ver=6.6.2" id="virtue-respond-js"></script>
<![endif]-->
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/plugins/Woocommerce_Products_List_Pro_v1.1.4/assets/js/stupidtable.js?ver=6.6.2" id="wcplpro_table_sort-js"></script>
        <link rel="https://api.w.org/" href="http://casasdeconvivencias.test/wp-json/" />
        <link rel="alternate" title="JSON" type="application/json" href="http://casasdeconvivencias.test/wp-json/wp/v2/pages/7" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://casasdeconvivencias.test/xmlrpc.php?rsd" />
        <meta name="generator" content="WordPress 6.6.2" />
        <meta name="generator" content="WooCommerce 6.8.2" />
        <link rel="canonical" href="http://casasdeconvivencias.test/mi-cuenta/" />
        <link rel='shortlink' href='http://casasdeconvivencias.test/?p=7' />
        <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="http://casasdeconvivencias.test/wp-json/oembed/1.0/embed?url=https%3A%2F%2FCASASDECONVIVENCIAS-MASTER%2Fmi-cuenta%2F" />
        <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="http://casasdeconvivencias.test/wp-json/oembed/1.0/embed?url=https%3A%2F%2FCASASDECONVIVENCIAS-MASTER%2Fmi-cuenta%2F&#038;format=xml" />
        <link rel="Shortcut Icon" type="image/x-icon" href="http://casasdeconvivencias.test/wp-content/themes/virtue-child/favicon/favicon.png" />
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
                background: url(http://casasdeconvivencias.test/wp-content/uploads/2018/06/beige-minimal-background-pattern-wordpress-8.jpg) repeat;
            }

            .topclass {
                background: transparent;
            }

            .headerclass {
                background: url(http://casasdeconvivencias.test/wp-content/uploads/2018/06/header-background-mirror-final-2.jpg) no-repeat;
            }

            body {
                background: url(http://casasdeconvivencias.test/wp-content/uploads/2018/06/grey-background.jpg);
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
        <style type="text/css">
            div.nsl-container[data-align="left"] {
                text-align: left;
            }

            div.nsl-container[data-align="center"] {
                text-align: center;
            }

            div.nsl-container[data-align="right"] {
                text-align: right;
            }


            div.nsl-container div.nsl-container-buttons a[data-plugin="nsl"] {
                text-decoration: none;
                box-shadow: none;
                border: 0;
            }

            div.nsl-container .nsl-container-buttons {
                display: flex;
                padding: 5px 0;
            }

            div.nsl-container.nsl-container-block .nsl-container-buttons {
                display: inline-grid;
                grid-template-columns: minmax(145px, auto);
            }

            div.nsl-container-block-fullwidth .nsl-container-buttons {
                flex-flow: column;
                align-items: center;
            }

            div.nsl-container-block-fullwidth .nsl-container-buttons a,
            div.nsl-container-block .nsl-container-buttons a {
                flex: 1 1 auto;
                display: block;
                margin: 5px 0;
                width: 100%;
            }

            div.nsl-container-inline {
                margin: -5px;
                text-align: left;
            }

            div.nsl-container-inline .nsl-container-buttons {
                justify-content: center;
                flex-wrap: wrap;
            }

            div.nsl-container-inline .nsl-container-buttons a {
                margin: 5px;
                display: inline-block;
            }

            div.nsl-container-grid .nsl-container-buttons {
                flex-flow: row;
                align-items: center;
                flex-wrap: wrap;
            }

            div.nsl-container-grid .nsl-container-buttons a {
                flex: 1 1 auto;
                display: block;
                margin: 5px;
                max-width: 280px;
                width: 100%;
            }

            @media only screen and (min-width: 650px) {
                div.nsl-container-grid .nsl-container-buttons a {
                    width: auto;
                }
            }

            div.nsl-container .nsl-button {
                cursor: pointer;
                vertical-align: top;
                border-radius: 4px;
            }

            div.nsl-container .nsl-button-default {
                color: #fff;
                display: flex;
            }

            div.nsl-container .nsl-button-icon {
                display: inline-block;
            }

            div.nsl-container .nsl-button-svg-container {
                flex: 0 0 auto;
                padding: 8px;
                display: flex;
                align-items: center;
            }

            div.nsl-container svg {
                height: 24px;
                width: 24px;
                vertical-align: top;
            }

            div.nsl-container .nsl-button-default div.nsl-button-label-container {
                margin: 0 24px 0 12px;
                padding: 10px 0;
                font-family: Helvetica, Arial, sans-serif;
                font-size: 16px;
                line-height: 20px;
                letter-spacing: .25px;
                overflow: hidden;
                text-align: center;
                text-overflow: clip;
                white-space: nowrap;
                flex: 1 1 auto;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                text-transform: none;
                display: inline-block;
            }

            div.nsl-container .nsl-button-google[data-skin="dark"] .nsl-button-svg-container {
                margin: 1px;
                padding: 7px;
                border-radius: 3px;
                background: #fff;
            }

            div.nsl-container .nsl-button-google[data-skin="light"] {
                border-radius: 1px;
                box-shadow: 0 1px 5px 0 rgba(0, 0, 0, .25);
                color: RGBA(0, 0, 0, 0.54);
            }

            div.nsl-container .nsl-button-apple .nsl-button-svg-container {
                padding: 0 6px;
            }

            div.nsl-container .nsl-button-apple .nsl-button-svg-container svg {
                height: 40px;
                width: auto;
            }

            div.nsl-container .nsl-button-apple[data-skin="light"] {
                color: #000;
                box-shadow: 0 0 0 1px #000;
            }

            div.nsl-container .nsl-button-facebook[data-skin="white"] {
                color: #000;
                box-shadow: inset 0 0 0 1px #000;
            }

            div.nsl-container .nsl-button-facebook[data-skin="light"] {
                color: #1877F2;
                box-shadow: inset 0 0 0 1px #1877F2;
            }

            div.nsl-container .nsl-button-spotify[data-skin="white"] {
                color: #191414;
                box-shadow: inset 0 0 0 1px #191414;
            }

            div.nsl-container .nsl-button-apple div.nsl-button-label-container {
                font-size: 17px;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            }

            div.nsl-container .nsl-button-slack div.nsl-button-label-container {
                font-size: 17px;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            }

            div.nsl-container .nsl-button-slack[data-skin="light"] {
                color: #000000;
                box-shadow: inset 0 0 0 1px #DDDDDD;
            }

            div.nsl-container .nsl-button-tiktok[data-skin="light"] {
                color: #161823;
                box-shadow: 0 0 0 1px rgba(22, 24, 35, 0.12);
            }


            div.nsl-container .nsl-button-kakao {
                color: rgba(0, 0, 0, 0.85);
            }

            .nsl-clear {
                clear: both;
            }

            .nsl-container {
                clear: both;
            }

            .nsl-disabled-provider .nsl-button {
                filter: grayscale(1);
                opacity: 0.8;
            }

            /*Button align start*/

            div.nsl-container-inline[data-align="left"] .nsl-container-buttons {
                justify-content: flex-start;
            }

            div.nsl-container-inline[data-align="center"] .nsl-container-buttons {
                justify-content: center;
            }

            div.nsl-container-inline[data-align="right"] .nsl-container-buttons {
                justify-content: flex-end;
            }


            div.nsl-container-grid[data-align="left"] .nsl-container-buttons {
                justify-content: flex-start;
            }

            div.nsl-container-grid[data-align="center"] .nsl-container-buttons {
                justify-content: center;
            }

            div.nsl-container-grid[data-align="right"] .nsl-container-buttons {
                justify-content: flex-end;
            }

            div.nsl-container-grid[data-align="space-around"] .nsl-container-buttons {
                justify-content: space-around;
            }

            div.nsl-container-grid[data-align="space-between"] .nsl-container-buttons {
                justify-content: space-between;
            }

            /* Button align end*/

            /* Redirect */

            #nsl-redirect-overlay {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                position: fixed;
                z-index: 1000000;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                backdrop-filter: blur(1px);
                background-color: RGBA(0, 0, 0, .32);
                ;
            }

            #nsl-redirect-overlay-container {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: white;
                padding: 30px;
                border-radius: 10px;
            }

            #nsl-redirect-overlay-spinner {
                content: '';
                display: block;
                margin: 20px;
                border: 9px solid RGBA(0, 0, 0, .6);
                border-top: 9px solid #fff;
                border-radius: 50%;
                box-shadow: inset 0 0 0 1px RGBA(0, 0, 0, .6), 0 0 0 1px RGBA(0, 0, 0, .6);
                width: 40px;
                height: 40px;
                animation: nsl-loader-spin 2s linear infinite;
            }

            @keyframes nsl-loader-spin {
                0% {
                    transform: rotate(0deg)
                }

                to {
                    transform: rotate(360deg)
                }
            }

            #nsl-redirect-overlay-title {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
                font-size: 18px;
                font-weight: bold;
                color: #3C434A;
            }

            #nsl-redirect-overlay-text {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
                text-align: center;
                font-size: 14px;
                color: #3C434A;
            }

            /* Redirect END*/
        </style>
        <style type="text/css">
            /* Notice fallback */
            #nsl-notices-fallback {
                position: fixed;
                right: 10px;
                top: 10px;
                z-index: 10000;
            }

            .admin-bar #nsl-notices-fallback {
                top: 42px;
            }

            #nsl-notices-fallback>div {
                position: relative;
                background: #fff;
                border-left: 4px solid #fff;
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                margin: 5px 15px 2px;
                padding: 1px 20px;
            }

            #nsl-notices-fallback>div.error {
                display: block;
                border-left-color: #dc3232;
            }

            #nsl-notices-fallback>div.updated {
                display: block;
                border-left-color: #46b450;
            }

            #nsl-notices-fallback p {
                margin: .5em 0;
                padding: 2px;
            }

            #nsl-notices-fallback>div:after {
                position: absolute;
                right: 5px;
                top: 5px;
                content: '\00d7';
                display: block;
                height: 16px;
                width: 16px;
                line-height: 16px;
                text-align: center;
                font-size: 20px;
                cursor: pointer;
            }
        </style>
        <style type="text/css" title="dynamic-css" class="options-output">
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

            /* 
        h1 {
            font-family: Lato;
            line-height: 40px;
            font-weight: 400;
            font-style: normal;
            font-size: 38px;
        } */

            /* h2 {
            font-family: Lato;
            line-height: 40px;
            font-weight: normal;
            font-style: normal;
            font-size: 32px;
        }

        h3 {
            font-family: Lato;
            line-height: 40px;
            font-weight: 400;
            font-style: normal;
            font-size: 28px;
        }

        h4 {
            font-family: Lato;
            line-height: 40px;
            font-weight: 400;
            font-style: normal;
            font-size: 24px;
        }

        h5 {
            font-family: Lato;
            line-height: 24px;
            font-weight: 700;
            font-style: normal;
            font-size: 18px;
        } */

            /* body {
            font-family: Verdana, Geneva, sans-serif;
            line-height: 20px;
            font-weight: 400;
            font-style: normal;
            font-size: 14px;
        }

        #nav-main ul.sf-menu a {
            font-family: Lato;
            line-height: 18px;
            font-weight: 400;
            font-style: normal;
            font-size: 12px;
        }

        #nav-second ul.sf-menu a {
            font-family: Lato;
            line-height: 22px;
            font-weight: 400;
            font-style: normal;
            font-size: 18px;
        }

        .kad-nav-inner .kad-mnav,
        .kad-mobile-nav .kad-nav-inner li a,
        .nav-trigger-case {
            font-family: Lato;
            line-height: 20px;
            font-weight: 400;
            font-style: normal;
            color: #ffffff;
            font-size: 16px;
        } */
        </style>
    </head>

    <body class="page-template-default page page-id-7 wp-embed-responsive theme-virtue woocommerce-account woocommerce-page woocommerce-no-js boxed mi-cuenta">
        <div id="kt-skip-link"><a href="#content">Skip to Main Content</a></div>
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
                                <a class="brand logofont" href="http://casasdeconvivencias.test/">
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
                            <h1 class="entry-title" itemprop="name">
                                Mi cuenta </h1>
                        </div>
                    </div><!--container-->
                </div><!--titleclass-->
                <div id="content" class="container container-contained">
                    <div class="row">
                        <div class="main col-md-12" role="main">
                            <div class="entry-content" itemprop="mainContentOfPage" itemscope itemtype="https://schema.org/WebPageElement">
                                <div class="woocommerce">
                                    <div class="woocommerce-notices-wrapper"></div>

                                    <div class="u-columns col2-set" id="customer_login">

                                        <div class="u-column1 col-1">

                                            <h2>Iniciar sesión</h2>

                                            <!-- Formulario de inicio de sesión -->
                                            <form class="woocommerce-form woocommerce-form-login login" method="post">
                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="username">Nombre de usuario o correo electrónico&nbsp;<span class="required">*</span></label>
                                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="" required />
                                                </p>
                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="password">Contraseña&nbsp;<span class="required">*</span></label>
                                                    <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" required />
                                                </p>

                                                <div class="form-group recaptcha-container">
                                                    <div class="g-recaptcha" data-sitekey="6LfX0n4qAAAAADG3VOYz7TO2Mw3uAXj-0qOiTQb1"></div>
                                                </div>

                                                <p class="form-row">
                                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" />
                                                        <span>Recordarme</span>
                                                    </label>
                                                    <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
                                                    <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="1">Iniciar sesión</button>
                                                </p>
                                            </form>


                                        </div>

                                        <div class="u-column2 col-2">

                                            <h2>Registrarme</h2>
                                            <form method="post" class="woocommerce-form woocommerce-form-register register">
                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="reg_email">Correo electrónico&nbsp;<span class="required">*</span></label>
                                                    <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="" required />
                                                </p>
                                                <p>Se enviará un enlace para establecer una nueva contraseña a su dirección de correo electrónico.</p>

                                                <div class="form-group recaptcha-container">
                                                    <div class="g-recaptcha" data-sitekey="6LfX0n4qAAAAADG3VOYz7TO2Mw3uAXj-0qOiTQb1"></div>
                                                </div>

                                                <p class="woocommerce-form-row form-row">
                                                    <?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
                                                    <button type="submit" class="woocommerce-Button button" name="register" value="1">Registrarme</button>
                                                </p>
                                            </form>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div><!-- /.main -->
                    </div><!-- /.row-->
                </div><!-- /.content -->
            </div><!-- /.wrap -->
            <footer id="containerfooter" class="footerclass" itemscope itemtype="https://schema.org/WPFooter">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 footercol1">
                            <div class="widget-1 widget-first footer-widget">
                                <aside id="widget_kadence_social-2" class="widget widget_kadence_social">
                                    <div class="virtue_social_widget clearfix">

                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="footercredits clearfix">

                        <p>ENLACES EXTERNOS : <b><a href="www.opusdei.org.ar">Página del Opus Dei</a> - <a href="https://opusdei.org/es-es/section/san-josemaria/">Página de San Josemaría</a></b>
                        </p>
                    </div>

                </div>

            </footer>

        </div><!--Wrapper-->
        <div id="wcplpro_added_to_cart_notification" class="autoclose" style="display: none;">
            <a href="http://casasdeconvivencias.test/reservas/" title="Go to cart"><span></span> &times; product(s) added to cart &rarr;</a> <a href="#" class="slideup_panel">&times;</a>
        </div>
        <script type="text/javascript">
            (function() {
                var c = document.body.className;
                c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
                document.body.className = c;
            })();
        </script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.9-wc.6.8.2" id="selectWoo-js"></script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.6.8.2" id="jquery-blockui-js"></script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.6.8.2" id="js-cookie-js"></script>
        <script type="text/javascript" id="woocommerce-js-extra">
            /* <![CDATA[ */
            var woocommerce_params = {
                "ajax_url": "\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=6.8.2" id="woocommerce-js"></script>
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
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=6.8.2" id="wc-cart-fragments-js"></script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/themes/virtue/assets/js/min/bootstrap-min.js?ver=3.4.10" id="bootstrap-js"></script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-includes/js/hoverIntent.min.js?ver=1.10.2" id="hoverIntent-js"></script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-includes/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js"></script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-includes/js/masonry.min.js?ver=4.2.2" id="masonry-js"></script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/themes/virtue/assets/js/min/plugins-min.js?ver=3.4.10" id="virtue_plugins-js"></script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/themes/virtue/assets/js/min/magnific-popup-min.js?ver=3.4.10" id="magnific-popup-js"></script>
        <script type="text/javascript" id="virtue-lightbox-init-js-extra">
            /* <![CDATA[ */
            var virtue_lightbox = {
                "loading": "Loading...",
                "of": "%curr% of %total%",
                "error": "The Image could not be loaded."
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/themes/virtue/assets/js/min/virtue-lightbox-init-min.js?ver=3.4.10" id="virtue-lightbox-init-js"></script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/themes/virtue/assets/js/min/main-min.js?ver=3.4.10" id="virtue_main-js"></script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/themes/virtue/assets/js/min/kt-add-to-cart-variation-min.js?ver=6.6.2" id="kt-wc-add-to-cart-variation-js"></script>
        <script type="text/javascript" src="http://casasdeconvivencias.test/wp-content/themes/virtue/assets/js/min/wc-quantity-increment-min.js?ver=6.6.2" id="wcqi-js-js"></script>
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


<?php
}
