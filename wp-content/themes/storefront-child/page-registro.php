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
    <link rel="alternate" type="application/rss+xml" title="Casas de Retiros y Convivencias &raquo; Feed" href="https://casasdeconvivencias.org.ar/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Casas de Retiros y Convivencias &raquo; RSS de los comentarios" href="https://casasdeconvivencias.org.ar/comments/feed/" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/casasdeconvivencias.org.ar\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.2"
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
    <link rel='stylesheet' id='wp-block-library-css' href='https://casasdeconvivencias.org.ar/wp-includes/css/dist/block-library/style.min.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='https://casasdeconvivencias.org.ar/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=8.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-css' href='https://casasdeconvivencias.org.ar/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=8.0.0' type='text/css' media='all' />
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
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='parent-style-css' href='https://casasdeconvivencias.org.ar/wp-content/themes/virtue/style.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='wcplpro_select2_css-css' href='https://casasdeconvivencias.org.ar/wp-content/plugins/Woocommerce_Products_List_Pro_v1.1.4/select2/select2.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='wcplpro_css-css' href='https://casasdeconvivencias.org.ar/wp-content/plugins/Woocommerce_Products_List_Pro_v1.1.4/assets/css/wcplpro.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='virtue_theme-css' href='https://casasdeconvivencias.org.ar/wp-content/themes/virtue/assets/css/virtue.css?ver=3.4.10' type='text/css' media='all' />
    <link rel='stylesheet' id='virtue_skin-css' href='https://casasdeconvivencias.org.ar/wp-content/themes/virtue/assets/css/skins/default.css?ver=3.4.10' type='text/css' media='all' />
    <link rel='stylesheet' id='virtue_child-css' href='https://casasdeconvivencias.org.ar/wp-content/themes/virtue-child/style.css?ver=1.0.0' type='text/css' media='all' />
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
    <script type="text/javascript" src="https://casasdeconvivencias.org.ar/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="https://casasdeconvivencias.org.ar/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <!--[if lt IE 9]>
<script type="text/javascript" src="https://casasdeconvivencias.org.ar/wp-content/themes/virtue/assets/js/vendor/respond.min.js?ver=6.6.2" id="virtue-respond-js"></script>
<![endif]-->
    <script type="text/javascript" src="https://casasdeconvivencias.org.ar/wp-content/plugins/Woocommerce_Products_List_Pro_v1.1.4/select2/select2.min.js?ver=6.6.2" id="wcplpro_select2_js-js"></script>
    <script type="text/javascript" src="https://casasdeconvivencias.org.ar/wp-content/plugins/Woocommerce_Products_List_Pro_v1.1.4/assets/js/stupidtable.js?ver=6.6.2" id="wcplpro_table_sort-js"></script>
    <script type="text/javascript" id="wcplpro_js-js-extra">
        /* <![CDATA[ */
        var wcplprovars = {
            "ajax_url": "https:\/\/casasdeconvivencias.org.ar\/wp-admin\/admin-ajax.php",
            "cart_url": "https:\/\/casasdeconvivencias.org.ar\/finalizar-comprar\/",
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
    <script type="text/javascript" src="https://casasdeconvivencias.org.ar/wp-content/plugins/Woocommerce_Products_List_Pro_v1.1.4/assets/js/wcplpro.js?ver=6.6.2" id="wcplpro_js-js"></script>
    <link rel="https://api.w.org/" href="https://casasdeconvivencias.org.ar/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json" href="https://casasdeconvivencias.org.ar/wp-json/wp/v2/pages/15" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://casasdeconvivencias.org.ar/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.6.2" />
    <meta name="generator" content="WooCommerce 6.8.2" />
    <link rel="canonical" href="https://casasdeconvivencias.org.ar/" />
    <link rel='shortlink' href='https://casasdeconvivencias.org.ar/' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://casasdeconvivencias.org.ar/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcasasdeconvivencias.org.ar%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://casasdeconvivencias.org.ar/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcasasdeconvivencias.org.ar%2F&#038;format=xml" />
    <link rel="Shortcut Icon" type="image/x-icon" href="https://casasdeconvivencias.org.ar/wp-content/themes/virtue-child/favicon/favicon.png" />
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
            background: url(https://casasdeconvivencias.org.ar/wp-content/uploads/2018/06/beige-minimal-background-pattern-wordpress-8.jpg) repeat;
        }

        .topclass {
            background: transparent;
        }

        .headerclass {
            background: url(https://casasdeconvivencias.org.ar/wp-content/uploads/2018/06/header-background-mirror-final-2.jpg) no-repeat;
        }

        body {
            background: url(https://casasdeconvivencias.org.ar/wp-content/uploads/2018/06/grey-background.jpg);
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
        .mu_register {
            width: 90%;
            margin: 0 auto;
        }

        .mu_register form {
            margin-top: 2em;
        }

        .mu_register fieldset,
        .mu_register legend {
            margin: 0;
            padding: 0;
            border: none;
        }

        .mu_register .error {
            font-weight: 600;
            padding: 10px;
            color: #333;
            background: #ffebe8;
            border: 1px solid #c00;
        }

        .mu_register input[type="submit"],
        .mu_register #blog_title,
        .mu_register #user_email,
        .mu_register #blogname,
        .mu_register #user_name {
            width: 100%;
            font-size: 24px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        .mu_register #site-language {
            display: block;
        }

        .mu_register .prefix_address,
        .mu_register .suffix_address {
            font-size: 18px;
            display: inline-block;
            direction: ltr;
        }

        .mu_register label,
        .mu_register legend,
        .mu_register .label-heading {
            font-weight: 600;
            font-size: 15px;
            display: block;
            margin: 10px 0;
        }

        .mu_register legend+p,
        .mu_register input+p {
            margin-top: 0;
        }

        .mu_register label.checkbox {
            display: inline;
        }

        .mu_register .mu_alert {
            font-weight: 600;
            padding: 10px;
            color: #333;
            background: #ffffe0;
            border: 1px solid #e6db55;
        }

        .mu_register .mu_alert a {
            color: inherit;
            text-decoration: underline;
        }

        .mu_register .signup-options .wp-signup-radio-button {
            display: block;
        }

        .mu_register .privacy-intro .wp-signup-radio-button {
            margin-right: 0.5em;
        }

        .rtl .mu_register .wp-signup-blogname {
            direction: ltr;
            text-align: right;
        }
    </style>
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

<body class="home page-template-default page page-id-15 wp-embed-responsive theme-virtue woocommerce-no-js boxed">
    <div id="kt-skip-link"><a href="#content">Skip to Main Content</a></div>
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
        /* Reducido de 40px a 20px */
        padding: 20px;
    }

    /* Línea decorativa debajo del título */
    /* .signup-container h1:after {
        content: '';
        display: block;
        width: 150px;
        height: 3px;
        background: #0088ff;
        margin: 20px auto 0;
        border-radius: 2px;
    } */

    .form-group {
        margin-bottom: 25px;
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

    .submit-button {
        background-color: #0088ff;
        color: #fff !important;
        padding: 12px 30px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
    }

    .submit-button:hover {
        background-color: #0410fa;
    }

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

    /* Estilo para el contenedor de reCAPTCHA */
    .recaptcha-container {
        display: flex;
        justify-content: center;
        margin: 20px 0;
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

<?php
//get_footer();
