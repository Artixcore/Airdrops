<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- CSS here -->
    {{-- <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/aos.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/icofont.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/slick.css">
    <link rel="stylesheet" href="../../../cdn.jsdelivr.net/npm/swiper%409/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css"> --}}

    <style>
        @media only screen and (min-width: 782px) and (max-width: 887px) {
            #wpadminbar ul#wp-admin-bar-root-default>li a {
                font-size: 10px;
            }
        }
    </style>
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="alternate" type="application/rss+xml" title="Edali &raquo; Feed"
        href="https://themes.envytheme.com/edali/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Edali &raquo; Comments Feed"
        href="https://themes.envytheme.com/edali/comments/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            ext: ".png",
            svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            svgExt: ".svg",
            source: {
                concatemoji: "https:\/\/themes.envytheme.com\/edali\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2.2",
            },
        };
        /*! This file is auto-generated */
        !(function(e, a, t) {
            var n,
                r,
                o,
                i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                p.clearRect(0, 0, i.width, i.height), p.fillText(e, 0, 0);
                e = i.toDataURL();
                return (
                    p.clearRect(0, 0, i.width, i.height),
                    p.fillText(t, 0, 0),
                    e === i.toDataURL()
                );
            }

            function c(e) {
                var t = a.createElement("script");
                (t.src = e),
                (t.defer = t.type = "text/javascript"),
                a.getElementsByTagName("head")[0].appendChild(t);
            }
            for (
                o = Array("flag", "emoji"),
                t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0,
                },
                r = 0; r < o.length; r++
            )
                (t.supports[o[r]] = (function(e) {
                    if (p && p.fillText)
                        switch (
                            ((p.textBaseline = "top"),
                                (p.font = "600 32px Arial"),
                                e)
                        ) {
                            case "flag":
                                return s(
                                        "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                                        "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
                                    ) ?
                                    !1 :
                                    !s(
                                        "\ud83c\uddfa\ud83c\uddf3",
                                        "\ud83c\uddfa\u200b\ud83c\uddf3"
                                    ) &&
                                    !s(
                                        "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                        "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                    );
                            case "emoji":
                                return !s(
                                    "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                                    "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff"
                                );
                        }
                    return !1;
                })(o[r])),
                (t.supports.everything =
                    t.supports.everything && t.supports[o[r]]),
                "flag" !== o[r] &&
                (t.supports.everythingExceptFlag =
                    t.supports.everythingExceptFlag &&
                    t.supports[o[r]]);
            (t.supports.everythingExceptFlag =
                t.supports.everythingExceptFlag && !t.supports.flag),
            (t.DOMReady = !1),
            (t.readyCallback = function() {
                t.DOMReady = !0;
            }),
            t.supports.everything ||
                ((n = function() {
                        t.readyCallback();
                    }),
                    a.addEventListener ?
                    (a.addEventListener("DOMContentLoaded", n, !1),
                        e.addEventListener("load", n, !1)) :
                    (e.attachEvent("onload", n),
                        a.attachEvent("onreadystatechange", function() {
                            "complete" === a.readyState &&
                                t.readyCallback();
                        })),
                    (e = t.source || {}).concatemoji ?
                    c(e.concatemoji) :
                    e.wpemoji &&
                    e.twemoji &&
                    (c(e.twemoji), c(e.wpemoji)));
        })(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
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
    <link rel="stylesheet" id="wp-block-library-css"
        href="https://themes.envytheme.com/edali/wp-includes/css/dist/block-library/style.min.css?ver=6.2.2" type="text/css"
        media="all" />
    <link rel="stylesheet" id="wc-blocks-vendors-style-css"
        href="https://themes.envytheme.com/edali/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=10.0.5"
        type="text/css" media="all" />
    <link rel="stylesheet" id="wc-blocks-style-css"
        href="https://themes.envytheme.com/edali/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=10.0.5"
        type="text/css" media="all" />
    <link rel="stylesheet" id="classic-theme-styles-css"
        href="https://themes.envytheme.com/edali/wp-includes/css/classic-themes.min.css?ver=6.2.2" type="text/css"
        media="all" />
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
                    rgba(6, 147, 227, 1) 0%,
                    rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
                    rgb(122, 220, 180) 0%,
                    rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
                    rgba(252, 185, 0, 1) 0%,
                    rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
                    rgba(255, 105, 0, 1) 0%,
                    rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
                    rgb(238, 238, 238) 0%,
                    rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
                    rgb(74, 234, 220) 0%,
                    rgb(151, 120, 209) 20%,
                    rgb(207, 42, 186) 40%,
                    rgb(238, 44, 130) 60%,
                    rgb(251, 105, 98) 80%,
                    rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
                    rgb(255, 206, 236) 0%,
                    rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
                    rgb(254, 205, 165) 0%,
                    rgb(254, 45, 45) 50%,
                    rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
                    rgb(255, 203, 112) 0%,
                    rgb(199, 81, 192) 50%,
                    rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
                    rgb(255, 245, 203) 0%,
                    rgb(182, 227, 212) 50%,
                    rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg,
                    rgb(202, 248, 128) 0%,
                    rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg,
                    rgb(2, 3, 129) 0%,
                    rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url("#wp-duotone-dark-grayscale");
            --wp--preset--duotone--grayscale: url("#wp-duotone-grayscale");
            --wp--preset--duotone--purple-yellow: url("#wp-duotone-purple-yellow");
            --wp--preset--duotone--blue-red: url("#wp-duotone-blue-red");
            --wp--preset--duotone--midnight: url("#wp-duotone-midnight");
            --wp--preset--duotone--magenta-yellow: url("#wp-duotone-magenta-yellow");
            --wp--preset--duotone--purple-green: url("#wp-duotone-purple-green");
            --wp--preset--duotone--blue-orange: url("#wp-duotone-blue-orange");
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
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
                6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
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

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css"
        href="https://themes.envytheme.com/edali/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.7.7"
        type="text/css" media="all" />
    <link rel="stylesheet" id="font-awesome-4.7-css"
        href="https://themes.envytheme.com/edali/wp-content/plugins/edali-toolkit/assets/css/font-awesome.min.css?ver=6.2.2"
        type="text/css" media="all" />
    <link rel="stylesheet" id="woocommerce-layout-css"
        href="https://themes.envytheme.com/edali/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=7.7.1"
        type="text/css" media="all" />
    <link rel="stylesheet" id="woocommerce-smallscreen-css"
        href="https://themes.envytheme.com/edali/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=7.7.1"
        type="text/css" media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" id="woocommerce-general-css"
        href="https://themes.envytheme.com/edali/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=7.7.1"
        type="text/css" media="all" />
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel="stylesheet" id="edali-style-css"
        href="https://themes.envytheme.com/edali/wp-content/themes/edali/style.css?ver=6.2.2" type="text/css"
        media="all" />
    <link rel="stylesheet" id="vendor-css"
        href="https://themes.envytheme.com/edali/wp-content/themes/edali/assets/css/vendor.min.css?ver=1691336045"
        type="text/css" media="all" />
    <link rel="stylesheet" id="edali-woocommerce-css"
        href="https://themes.envytheme.com/edali/wp-content/themes/edali/assets/css/woocommerce.css?ver=6.2.2"
        type="text/css" media="all" />
    <link rel="stylesheet" id="edali-main-style-css"
        href="https://themes.envytheme.com/edali/wp-content/themes/edali/assets/css/style.css?ver=1691336045"
        type="text/css" media="all" />
    <style id="edali-main-style-inline-css" type="text/css">
        :root {
            --mainColor: #ff1949;
            --optional-color: #0eb582;
        }

        .single-banner-item h1,
        .health-coaching-banner-slides.owl-theme .owl-nav [class*="owl-"],
        .single-featured-box .icon,
        .single-services-box .icon,
        .single-program-box .icon,
        .single-program-box .link-btn:hover,
        .feedback-content::before {
            color: #005d40;
        }

        .single-featured-box:hover .icon,
        .single-services-box:hover .icon,
        .experience-content .features-list li span i::after,
        .program-area::before,
        .single-courses-box-item .courses-image .price,
        .single-events-box-item .image .date {
            background-color: #005d40;
        }

        .single-services-box:hover .icon,
        .health-coaching-banner-slides.owl-theme .owl-nav [class*="owl-"]::before {
            border-color: #005d40;
        }

        .default-btn,
        .top-header,
        .top-header-style-four,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
        .search-overlay .search-overlay-form form button,
        .main-banner,
        .main-banner-content .sub-title::before,
        .banner-section,
        .banner-content .sub-title::before,
        .home-slides.owl-theme .owl-nav [class*="owl-"]:hover,
        .home-slides.owl-theme .owl-dots .owl-dot:hover span,
        .home-slides.owl-theme .owl-dots .owl-dot.active span,
        .hero-banner,
        .hero-banner-content .sub-title::before,
        .banner-wrapper-content form button,
        .wrapper-content .sub-title::before,
        .wrapper-content form button,
        .banner-courses-category ul li a::before,
        .single-boxes-item.bg-color,
        .single-boxes-item.bg-image,
        .about-text h3::before,
        .about-text .features-list li:hover i,
        .single-categories-courses-item,
        .single-courses-category a::before,
        .courses-categories-slides.owl-theme .owl-nav [class*="owl-"]:hover,
        .courses-categories-slides.owl-theme .owl-nav [class*="owl-"]:focus,
        .partner-area.bg-color,
        .offer-area,
        .single-offer-box:hover .icon,
        .become-instructor-partner-content.bg-color,
        .funfacts-inner,
        .funfacts-style-two,
        .owl-item:nth-child(2) .single-courses-box:hover .courses-image .courses-tag,
        .owl-item:nth-child(2) .single-courses-box:focus .courses-image .courses-tag,
        .owl-item:nth-child(8) .single-courses-box:hover .courses-image .courses-tag,
        .owl-item:nth-child(8) .single-courses-box:focus .courses-image .courses-tag,
        .col-lg-4:nth-child(2) .single-courses-box:hover .courses-image .courses-tag,
        .col-lg-4:nth-child(2) .single-courses-box:focus .courses-image .courses-tag,
        .col-lg-4:nth-child(8) .single-courses-box:hover .courses-image .courses-tag,
        .col-lg-4:nth-child(8) .single-courses-box:focus .courses-image .courses-tag,
        .col-lg-6:nth-child(2) .single-courses-box:hover .courses-image .courses-tag,
        .col-lg-6:nth-child(2) .single-courses-box:focus .courses-image .courses-tag,
        .col-lg-6:nth-child(8) .single-courses-box:hover .courses-image .courses-tag,
        .col-lg-6:nth-child(8) .single-courses-box:focus .courses-image .courses-tag,
        .col-lg-3:nth-child(2) .single-courses-box:hover .courses-image .courses-tag,
        .col-lg-3:nth-child(2) .single-courses-box:focus .courses-image .courses-tag,
        .col-lg-3:nth-child(8) .single-courses-box:hover .courses-image .courses-tag,
        .col-lg-3:nth-child(8) .single-courses-box:focus .courses-image .courses-tag,
        .courses-slides.owl-theme .owl-nav [class*="owl-"]:hover,
        .courses-slides.owl-theme .owl-nav [class*="owl-"]:focus,
        .courses-slides.owl-theme .owl-dots .owl-dot:hover span,
        .courses-slides.owl-theme .owl-dots .owl-dot.active span,
        .courses-list-tab .tabs li a::after,
        .courses-details-desc .courses-author .author-profile-header,
        .courses-details-desc .courses-author .author-profile .author-profile-title .author-profile-edali-profile a:hover,
        .courses-details-desc .courses-author .author-profile .author-profile-title .author-profile-edali-profile a:focus,
        .courses-purchase-info::before,
        .single-instructor-member .member-content .social li a:hover,
        .single-instructor-member .member-content .social li a:focus,
        .single-instructor-box .image .social li a:hover,
        .team-slides.owl-theme .owl-nav [class*="owl-"]:hover,
        .team-slides.owl-theme .owl-nav [class*="owl-"]:focus,
        .single-team-member .member-content .social li a:hover,
        .single-team-member .member-content .social li a:focus,
        .instructor-details-desc .instructor-details-sidebar .social-link li a,
        .mission-content .owl-theme .owl-nav [class*="owl-"]:hover,
        .mission-content .owl-theme .owl-nav [class*="owl-"]:focus,
        .owl-item.active.center .single-testimonials-item,
        .testimonials-slides.owl-theme .owl-dots .owl-dot:hover span,
        .testimonials-slides.owl-theme .owl-dots .owl-dot.active span,
        .feedback-slides.owl-theme .owl-nav [class*="owl-"]:hover,
        .feedback-slides.owl-theme .owl-nav [class*="owl-"]:focus,
        .students-feedback-form h3,
        .single-blog-post .post-content .read-more-btn::before,
        .single-blog-post:hover .post-image .tag a,
        .single-blog-post:focus .post-image .tag a,
        .blog-slides.owl-theme .owl-nav [class*="owl-"]:hover,
        .blog-slides.owl-theme .owl-nav [class*="owl-"]:focus,
        blockquote::after,
        .blockquote::after,
        .prev-link-wrapper .image-prev::after,
        .next-link-wrapper .image-next::after,
        .how-it-works-area,
        .page-title-area,
        .single-events-box .events-box .events-date .date,
        .events-details .events-info-links a,
        .countdown-area,
        .single-product-box .product-image .add-to-cart-btn:hover,
        .single-product-box .product-image .add-to-cart-btn:focus,
        .products-details-tab .tabs li a:hover,
        .products-details-tab .tabs li a:focus,
        .products-details-tab .tabs li.current a,
        .cart-buttons .shopping-coupon-code button:hover,
        .register-content .register-form form button,
        .register-content .register-form form .connect-with-social button:hover,
        .faq-accordion-tab .tabs li a:hover,
        .faq-accordion-tab .tabs li.current a,
        .contact-info-box:hover .icon,
        .go-top,
        .sidebar .widget_search form button,
        .blog-details .blog-details-content .article-author .author-profile-header,
        .blog-details .blog-details-content .article-author .author-profile .author-profile-title .author-profile-edali-profile a:hover,
        .blog-details .blog-details-content .article-author .author-profile .author-profile-title .author-profile-edali-profile a:focus,
        #comments .comment-list .comment-body .reply a:hover,
        .wp-block-button .wp-block-button__link,
        .page-links .post-page-numbers:hover,
        .page-links .current,
        .post-password-form input[type="submit"],
        .comment-navigation .nav-links .nav-previous a:hover,
        .comment-navigation .nav-links .nav-next a:hover,
        .footer-area .tagcloud a:hover,
        .single-footer-widget .newsletter-box form button,
        .lp-profile-content button,
        #course-item-content-header .form-button.lp-button-back button,
        .login-content .login-form form button,
        .sidebar .tagcloud a:hover,
        .footer-area .widget_search form button,
        body.single-lp_course.course-item-popup .course-item-nav a:hover,
        .learnpress .become-teacher-form button,
        .learnpress #learn-press-checkout-login button,
        .learnpress #learn-press-user-profile button,
        .no-results form button,
        button#bbp_reply_submit,
        button#bbp_topic_submit,
        .services-box:hover,
        .experience-content .features-list li span:hover i,
        .courses-box .courses-image .course-price .price,
        .courses-box .courses-content::before,
        .events-box .content .date,
        .faq-video .video-btn,
        .single-feedback-slides-item::after,
        .feedback-slides-two.owl-theme .owl-dots .owl-dot:hover span::before,
        .feedback-slides-two.owl-theme .owl-dots .owl-dot.active span::before,
        .pmpro_login_wrap #content-item-quiz button,
        input[type="submit"],
        #popup_ok {
            background-color: #ff1949;
        }

        .preloader::before,
        .preloader::after,
        .search-overlay .search-overlay-close:hover .search-overlay-close-line,
        .col-lg-4:nth-child(2) .single-offer-box::before,
        .col-lg-4:nth-child(5) .single-offer-box::before,
        .students-feedback-form form .form-group .label-title::before,
        .pricing-table table thead tr,
        .single-events-box .events-box .events-content .content .join-now-btn::before,
        .billing-details .title::before,
        .order-details .title::before,
        .order-details .payment-box .payment-method p [type="radio"]:checked+label::after,
        .order-details .payment-box .payment-method p [type="radio"]:not(:checked)+label::after,
        .order-details .payment-box .payment-method p [type="radio"]:checked+label::after,
        .order-details .payment-box .payment-method p [type="radio"]:not(:checked)+label::after,
        .pagination-area .page-numbers:hover,
        .pagination-area .page-numbers:focus,
        .pagination-area .page-numbers.current,
        .coming-soon-content form .form-group .label-title::before,
        .sidebar .widget .widget-title::before,
        .comments-area .comment-respond .form-submit input,
        .footer-area .single-footer-widget h3::before,
        .footer-area .single-footer-widget ul li::before,
        .learn-press-pagination .page-numbers>li a:hover,
        .learn-press-pagination .page-numbers>li a.current,
        .learn-press-pagination .page-numbers>li a:hover,
        .learn-press [type="button"],
        .learn-press [type="reset"],
        .learn-press [type="submit"],
        .learn-press button,
        body.single-lp_course.course-item-popup .curriculum-sections .section .section-content .course-item.current,
        .learnpress .become-teacher-form .learn-press-message:before,
        .learnpress #learn-press-checkout-login .learn-press-message:before,
        #user-submit,
        #bbp_search_submit,
        .tutor-button.tutor-success,
        .tutor-login-form-wrap input[type="submit"],
        .tutor-form-group.tutor-reg-form-btn-wrap .tutor-button,
        .pmpro-has-access a.pmpro_btn,
        .pmpro-has-access input.pmpro_btn {
            background: #ff1949;
        }

        a:hover,
        a:focus,
        .section-title .sub-title,
        .top-header-btn .default-btn,
        .top-header-style-two .top-header-contact-info li a:hover,
        .top-header-style-two .top-header-contact-info li a:focus,
        .top-header-style-three .top-header-contact-info li a:hover,
        .top-header-style-three .top-header-contact-info li a:focus,
        .top-header-login-register li a:hover,
        .top-header-login-register li a:focus,
        .edali-nav .navbar .navbar-nav .nav-item a:hover,
        .edali-nav .navbar .navbar-nav .nav-item a:focus,
        .edali-nav .navbar .navbar-nav .nav-item a.active,
        .edali-nav .navbar .navbar-nav .nav-item:hover a,
        .edali-nav .navbar .navbar-nav .nav-item.active a,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li a:hover,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li a:focus,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li a.active,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:hover,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:focus,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a.active,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li.active a,
        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li.active a,
        .edali-nav .navbar .others-option .search-box:hover,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item a:hover,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item a:focus,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item a.active,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item:hover a,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item.active a,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li a:hover,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li a:focus,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li a.active,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:hover,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:focus,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a.active,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li.active a,
        .navbar-style-two .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li.active a,
        .navbar-style-two .edali-nav .navbar .others-option .cart-wrapper-btn:hover,
        .navbar-style-two .edali-nav .navbar .others-option .cart-wrapper-btn:focus,
        .navbar-style-two .edali-nav .navbar .others-option .search-box:hover,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item a:hover,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item a:focus,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item a.active,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item:hover a,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item.active a,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li a:hover,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li a:focus,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li a.active,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:hover,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:focus,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a.active,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li.active a,
        .navbar-style-two.is-sticky .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu li.active a,
        .navbar-style-two.is-sticky .edali-nav .navbar .others-option .cart-wrapper-btn:hover,
        .navbar-style-two.is-sticky .edali-nav .navbar .others-option .cart-wrapper-btn:focus,
        .navbar-style-two.is-sticky .edali-nav .navbar .others-option .search-box,
        .navbar-style-two.is-sticky .edali-nav .navbar .others-option .search-box:hover,
        .edali-responsive-nav .edali-responsive-menu.mean-container .mean-nav ul li a.active,
        .edali-responsive-nav .edali-responsive-menu.mean-container .mean-nav .others-option .search-box:hover,
        .banner-courses-category ul li a i,
        .about-content .sub-title,
        .about-right-image .text-box .inner span,
        .single-courses-category a i,
        .single-offer-box .icon,
        .single-courses-box .courses-box-footer ul .courses-price,
        .single-courses-box .courses-box-footer ul .courses-price .origin-price,
        .single-courses-item .courses-box-footer ul .courses-price,
        .single-courses-item .courses-box-footer ul .courses-price .origin-price,
        .single-courses-list-box .box-item .courses-desc .courses-box-footer ul .courses-price,
        .owl-item:nth-child(2) .single-courses-box .courses-image .courses-tag a,
        .owl-item:nth-child(8) .single-courses-box .courses-image .courses-tag a,
        .col-lg-4:nth-child(2) .single-courses-box .courses-image .courses-tag a,
        .col-lg-4:nth-child(8) .single-courses-box .courses-image .courses-tag a,
        .col-lg-6:nth-child(2) .single-courses-box .courses-image .courses-tag a,
        .col-lg-6:nth-child(8) .single-courses-box .courses-image .courses-tag a,
        .col-lg-3:nth-child(2) .single-courses-box .courses-image .courses-tag a,
        .col-lg-3:nth-child(8) .single-courses-box .courses-image .courses-tag a,
        .shorting-menu .filter:hover,
        .shorting-menu .filter:focus,
        .shorting-menu .filter.active,
        .courses-list-tab .tabs li.current a,
        .courses-topbar .topbar-ordering-and-search .topbar-ordering .nice-select .list .option:hover,
        .courses-topbar .topbar-ordering-and-search .topbar-ordering .nice-select .list .option.focus,
        .courses-topbar .topbar-ordering-and-search .topbar-ordering .nice-select .list .option.selected.focus,
        .courses-topbar .topbar-ordering-and-search .topbar-search form label,
        .courses-details-header .courses-meta ul li span,
        .courses-details-header .courses-meta ul li a:hover,
        .courses-details-header .courses-meta ul li a:focus,
        .courses-details-desc .why-you-learn ul li span i,
        .courses-sidebar-information ul li span i,
        .courses-sidebar-syllabus .chapter,
        .courses-sidebar-syllabus .courses-list ul li a:hover,
        .courses-sidebar-syllabus .courses-list ul li a:focus,
        .single-instructor-member .member-content span,
        .single-instructor-box .content span,
        .single-team-member .member-content span,
        .instructor-details-desc .instructor-details-sidebar .instructor-details-meta ul li span,
        .instructor-details-desc .instructor-details-sidebar .instructor-details-meta ul li a:hover,
        .instructor-details-desc .instructor-details-sidebar .instructor-details-meta ul li a:focus,
        .instructor-details-desc .instructor-details-sidebar .social-link li a:hover,
        .instructor-details-desc .instructor-details-sidebar .social-link li a:focus,
        .instructor-details-desc .instructor-details .sub-title,
        .instructor-details-desc .instructor-details .instructor-details-info ul li span,
        .single-testimonials-item .info span,
        .single-feedback-item .info span,
        .single-blog-post .post-image .tag a,
        .single-blog-post .post-content .post-meta li a:hover,
        .single-blog-post .post-content .post-meta li a:focus,
        .blog-details-desc .article-content .features-list li i,
        .prev-link-wrapper a:hover .prev-link-info-wrapper,
        .next-link-wrapper a:hover .next-link-info-wrapper,
        .single-work-process:hover .icon,
        .page-title-content ul li a:hover,
        .page-title-content ul li a:focus,
        .single-events-box .events-box .events-content .content .location i,
        .events-details-header .back-all-events:hover,
        .events-details-header .back-all-events:focus,
        .events-details-header .events-meta ul li span,
        .events-details-header .events-meta ul li a:hover,
        .events-details-header .events-meta ul li a:focus,
        .events-details .events-info-links a:hover,
        .events-details .events-info-links a:focus,
        .woocommerce-topbar .topbar-ordering-and-search .topbar-ordering .nice-select .list .option:hover,
        .woocommerce-topbar .topbar-ordering-and-search .topbar-ordering .nice-select .list .option.focus,
        .woocommerce-topbar .topbar-ordering-and-search .topbar-ordering .nice-select .list .option.selected.focus,
        .login-content .login-form form .forgot-password a,
        .login-content .login-form form .connect-with-social button,
        .register-content .register-form form .connect-with-social button,
        .contact-info-box .icon,
        .contact-info-box p a:hover,
        .footer-bottom-area p a:hover,
        .footer-bottom-area p a:focus,
        .entry-meta ul li span,
        .entry-meta ul li a:hover,
        .entry-meta ul li a:focus,
        .sidebar .widget_rss ul li .rsswidget:hover,
        .widget_contact:hover .text .icon,
        .top-header-style-two .top-header-contact-info li i,
        .wp-block-image figcaption a,
        .blog-details .blog-details-content ul li a,
        .blog-details .blog-details-content p a,
        .wp-caption .wp-caption-text a,
        table th a,
        .blog-details .blog-details-content dd a,
        .is-style-outline,
        .page-main-content .entry-content a,
        .single-courses-box .courses-content h3 a:hover,
        body.single-lp_course.course-item-popup .curriculum-sections .section .section-content .course-item .section-item-link::before,
        body.single-lp_course.course-item-popup .curriculum-sections .section .section-content .course-item .course-item-meta .item-meta.course-item-status,
        .learnpress .become-teacher-form .message-info::before,
        .learnpress #learn-press-checkout-login #checkout-form-login .row a:hover,
        .learnpress #learn-press-user-profile .learn-press-form-login .row a:hover,
        .learnpress #learn-press-user-profile .learn-press-form-register .row a:hover,
        #breadcrumbs span a:hover,
        .bbpress-wrapper a,
        #bbpress-forums div.bbp-topic-author a.bbp-author-name,
        #bbpress-forums div.bbp-reply-author a.bbp-author-name,
        #bbpress-forums #bbp-single-user-details #bbp-user-navigation a:hover,
        a.bbp-register-link,
        a.bbp-lostpass-link,
        .right-sidebar ul li a:hover,
        .bbp-author-name:hover,
        .course-author span a,
        .single-featured-box .link-btn,
        .experience-content .sub-title,
        .experience-content .features-list li span:hover i,
        .single-program-box .link-btn,
        .single-courses-box-item .courses-content .course-author span,
        .courses-box .courses-image .fav:hover,
        .courses-box .courses-content .course-author span,
        .courses-box .courses-content .courses-box-footer li i,
        .courses-info p a,
        .feedback-content .client-info .title span,
        .single-events-box-item .content .location i,
        .events-box .content .location i,
        .single-blog-post-box .post-content .category:hover,
        .single-blog-post-box .post-content .post-content-footer li .post-author span,
        .single-blog-post-box .post-content .post-content-footer li i,
        .subscribe-content .sub-title,
        .premium-access-content .sub-title,
        .distance-learning-content .sub-title,
        .distance-learning-content .features-list li span i,
        .faq-video .video-btn:hover,
        .single-funfacts-box h3,
        .feedback-slides-content .sub-title,
        .feedback-slides-content .feedback-info p a,
        .single-feedback-slides-item .client-info .title h3,
        .lp-pmpro-membership-list .item-td.item-desc,
        .lp-pmpro-membership-list .item-td.item-check,
        .lp-pmpro-membership-list .item-td a:hover,
        #pmpro_account-profile a {
            color: #ff1949;
        }

        .slider_area .metis .tp-bullet.selected,
        .slider_area .metis .tp-bullet:hover,
        .slider_area .default-btn,
        .billing-details .form-group .nice-select .list .option:hover,
        .wp-block-file .wp-block-file__button,
        .single-footer-widget .social-link li a:hover,
        .slider_area .default-btn,
        .wp-block-search button,
        .wp-block-tag-cloud a:hover,
        .guest-and-class a:hover,
        .learn-press-pmpro-buy-membership .purchase-button {
            background-color: #ff1949 !important;
        }

        .learn-press-pagination .page-numbers>li a.current,
        .learn-press-pagination .page-numbers>li .current,
        .question-numbers li.current a,
        .question-numbers li a:hover,
        .learnpress-page .lp-button {
            background: #ff1949 !important;
        }

        .footer-area .widget_rss ul li .rsswidget:hover,
        .single-footer-widget .contact-us-link li a:hover,
        .single-footer-widget .contact-us-link li a:focus,
        .single-footer-widget .social-link li a,
        #learn-press-profile-nav .tabs>li ul li.active a,
        .top-header-btn .default-btn .icon-arrow,
        .top-header-btn .default-btn,
        span.bbp-admin-links a,
        .page-title-content .bbpress-breadcrumbs a:hover {
            color: #ff1949 !important;
        }

        .edali-nav .navbar .navbar-nav .nav-item .dropdown-menu,
        .instructor-details-desc .instructor-details-sidebar .social-link li a,
        .events-details .events-info-links a,
        .user-actions,
        .login-content .login-form form .connect-with-social button,
        .register-content .register-form form .connect-with-social button,
        .courses-categories-slides.owl-theme .owl-nav [class*="owl-"]:hover,
        .courses-categories-slides.owl-theme .owl-nav [class*="owl-"]:focus,
        .footer-area .tagcloud a:hover,
        .feedback-slides-two.owl-theme .owl-dots .owl-dot:hover span,
        .feedback-slides-two.owl-theme .owl-dots .owl-dot.active span,
        .services-box:hover,
        .faq-video .video-btn:hover::before,
        .faq-video .video-btn:hover::after,
        .feedback-slides-two.owl-theme .owl-dots .owl-dot:hover span,
        .feedback-slides-two.owl-theme .owl-dots .owl-dot.active span,
        .tutor-button.tutor-success,
        .tutor-form-group.tutor-reg-form-btn-wrap .tutor-button {
            border-color: #ff1949;
        }

        .slider_area .default-btn,
        .default-btn,
        .question-numbers li.current a,
        .question-numbers li a:hover,
        .learnpress .become-teacher-form .form-fields .form-field input:focus,
        .learnpress .become-teacher-form .form-fields .form-field textarea:focus,
        .learnpress #learn-press-checkout-login .form-fields .form-field input:focus,
        .learnpress #learn-press-checkout-login .form-fields .form-field textarea:focus,
        .learnpress #learn-press-user-profile .form-fields .form-field input:focus,
        .learnpress #learn-press-user-profile .form-fields .form-field textarea:focus,
        .learnpress .learn-press-checkout-comment .order-comments:focus,
        .tutor-login-form-wrap input[type="submit"] {
            border-color: #ff1949 !important;
        }

        .default-btn:hover,
        .default-btn:focus,
        .main-banner-content .btn-box .optional-btn::after,
        .hero-banner-content .btn-box .optional-btn::after,
        .hero-banner-content.black-color .btn-box .optional-btn::after,
        .banner-wrapper-content form button:hover,
        .banner-wrapper-content form button:focus,
        .wrapper-content form button:hover,
        .wrapper-content form button:focus,
        .banner-courses-category ul li:nth-child(2) a::before,
        .banner-courses-category ul li:nth-child(11) a::before,
        .about-content .features-text i,
        .single-categories-courses-box,
        .owl-item:nth-child(2) .single-courses-category a::before,
        .owl-item:nth-child(11) .single-courses-category a::before,
        .col-lg-3:nth-child(2) .single-courses-category a::before,
        .col-lg-3:nth-child(11) .single-courses-category a::before,
        .col-lg-4:nth-child(2) .single-offer-box:hover .icon,
        .col-lg-4:nth-child(5) .single-offer-box:hover .icon,
        .single-courses-box:hover .courses-image .courses-tag,
        .single-courses-box:focus .courses-image .courses-tag,
        .single-courses-item:hover .courses-image .courses-tag,
        .single-courses-item:focus .courses-image .courses-tag,
        .single-courses-list-box:hover .box-item .courses-image .image .courses-tag,
        .single-instructor-member .member-content .social li a,
        .owl-item:nth-child(3) .single-instructor-box .image .social li a:hover,
        .owl-item:nth-child(5) .single-instructor-box .image .social li a:hover,
        .col-lg-4:nth-child(3) .single-instructor-box .image .social li a:hover,
        .col-lg-4:nth-child(5) .single-instructor-box .image .social li a:hover,
        .single-team-member .member-content .social li a,
        .feedback-form-inner .feedback-form h3,
        .owl-item:nth-child(2) .single-blog-post:hover .post-image .tag a,
        .owl-item:nth-child(2) .single-blog-post:focus .post-image .tag a,
        .owl-item:nth-child(7) .single-blog-post:hover .post-image .tag a,
        .owl-item:nth-child(7) .single-blog-post:focus .post-image .tag a,
        .col-lg-4:nth-child(2) .single-blog-post:hover .post-image .tag a,
        .col-lg-4:nth-child(2) .single-blog-post:focus .post-image .tag a,
        .col-lg-4:nth-child(7) .single-blog-post:hover .post-image .tag a,
        .col-lg-4:nth-child(7) .single-blog-post:focus .post-image .tag a,
        .col-lg-6:nth-child(2) .single-blog-post:hover .post-image .tag a,
        .col-lg-6:nth-child(2) .single-blog-post:focus .post-image .tag a,
        .col-lg-6:nth-child(7) .single-blog-post:hover .post-image .tag a,
        .col-lg-6:nth-child(7) .single-blog-post:focus .post-image .tag a,
        .col-lg-3:nth-child(2) .single-blog-post:hover .post-image .tag a,
        .col-lg-3:nth-child(2) .single-blog-post:focus .post-image .tag a,
        .col-lg-3:nth-child(7) .single-blog-post:hover .post-image .tag a,
        .col-lg-3:nth-child(7) .single-blog-post:focus .post-image .tag a,
        .pricing-table table tbody td i,
        .login-content .login-form form button:hover,
        .login-content .login-form form button:focus,
        .sidebar .widget_search form button:hover,
        .sidebar .widget_search form button:focus,
        .comments-area .comment-respond .form-submit input:hover,
        .comments-area .comment-respond .form-submit input:focus,
        .wp-block-button .wp-block-button__link:hover,
        .post-password-form input[type="submit"]:hover,
        .no-results form button:hover,
        .footer-area .widget_search form button:hover,
        .footer-area .widget_search form button:focus,
        .single-footer-widget .newsletter-box form button:hover,
        .single-footer-widget .newsletter-box form button:focus,
        .lp-profile-content button:hover,
        .lp-profile-content button:focus,
        #course-item-content-header .form-button.lp-button-back button:hover,
        #course-item-content-header .form-button.lp-button-back button:focus {
            background-color: #0eb582;
        }

        .slider_area .default-btn:hover,
        .slider_area .default-btn:focus,
        .wp-block-file .wp-block-file__button:hover,
        .wp-block-search button:hover {
            background-color: #0eb582 !important;
        }

        .single-offer-box::before,
        .courses-sidebar-syllabus .courses-list ul li a .free-lesson,
        .sidebar .widget .widget-title::after,
        .sidebar .widget ul li::before {
            background: #0eb582;
        }

        .default-btn:hover,
        .default-btn:focus,
        .single-categories-courses-box:hover .icon,
        .single-categories-courses-box:focus .icon,
        .col-lg-4:nth-child(2) .single-offer-box .icon,
        .col-lg-4:nth-child(5) .single-offer-box .icon,
        .owl-item:nth-child(3) .single-instructor-box:hover .image,
        .owl-item:nth-child(5) .single-instructor-box:hover .image,
        .col-lg-4:nth-child(3) .single-instructor-box:hover .image,
        .col-lg-4:nth-child(5) .single-instructor-box:hover .image,
        .login-content .login-form form button:hover,
        .login-content .login-form form button:focus,
        .register-content .register-form form button:hover,
        .register-content .register-form form button:focus,
        .lp-profile-content button:hover,
        .lp-profile-content button:focus,
        #course-item-content-header .form-button.lp-button-back button:hover,
        #course-item-content-header .form-button.lp-button-back button:focus {
            border-color: #0eb582;
        }

        .slider_area .default-btn:hover,
        .slider_area .default-btn:focus,
        .default-btn:hover {
            border-color: #0eb582 !important;
        }

        .banner-courses-category ul li:nth-child(2) a i,
        .banner-courses-category ul li:nth-child(11) a i,
        .single-categories-courses-box:hover .icon,
        .single-categories-courses-box:focus .icon,
        .owl-item:nth-child(2) .single-courses-category a i,
        .owl-item:nth-child(11) .single-courses-category a i,
        .col-lg-3:nth-child(2) .single-courses-category a i,
        .col-lg-3:nth-child(11) .single-courses-category a i,
        .col-lg-4:nth-child(2) .single-offer-box .icon,
        .col-lg-4:nth-child(5) .single-offer-box .icon,
        .single-courses-box .courses-image .courses-tag a,
        .single-courses-list-box .box-item .courses-image .image .courses-tag a,
        .courses-details-desc .courses-author .author-profile .author-profile-title .author-profile-title-details .author-profile-details span,
        .owl-item:nth-child(3) .single-instructor-box .content span,
        .owl-item:nth-child(5) .single-instructor-box .content span,
        .col-lg-4:nth-child(3) .single-instructor-box .content span,
        .col-lg-4:nth-child(5) .single-instructor-box .content span,
        .single-blog-post .post-content .post-meta li.post-author a,
        .owl-item:nth-child(2) .single-blog-post .post-image .tag a,
        .owl-item:nth-child(7) .single-blog-post .post-image .tag a,
        .col-lg-4:nth-child(2) .single-blog-post .post-image .tag a,
        .col-lg-4:nth-child(7) .single-blog-post .post-image .tag a,
        .col-lg-6:nth-child(2) .single-blog-post .post-image .tag a,
        .col-lg-6:nth-child(7) .single-blog-post .post-image .tag a,
        .col-lg-3:nth-child(2) .single-blog-post .post-image .tag a,
        .col-lg-3:nth-child(7) .single-blog-post .post-image .tag a,
        .col-lg-4:nth-child(2) .single-work-process:hover .icon,
        .product-details-desc .product-meta span span.in-stock,
        .login-content .login-form form .forgot-password a:hover,
        .blog-details .blog-details-content .article-author .author-profile .author-profile-title .author-profile-title-details .author-profile-details span {
            color: #0eb582;
        }

        .single-products .sale-btn,
        .single-products .products-image ul li a:hover,
        .productsQuickView .modal-dialog .modal-content .products-content form button,
        .productsQuickView .modal-dialog .modal-content button.close:hover,
        .productsQuickView .modal-dialog .modal-content button.close:hover,
        .woocommerce ul.products li.product:hover .add-to-cart-btn,
        .shop-sidebar .widget_product_search form button,
        .shop-sidebar a.button,
        .shop-sidebar .woocommerce-widget-layered-nav-dropdown__submit,
        .shop-sidebar .woocommerce button.button,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt,
        .products_details div.product .woocommerce-tabs .panel #respond input#submit,
        .products_details div.product .product_title::before,
        .woocommerce #respond input#submit.alt.disabled,
        .woocommerce #respond input#submit.alt.disabled:hover,
        .woocommerce #respond input#submit.alt:disabled,
        .woocommerce #respond input#submit.alt:disabled:hover,
        .woocommerce #respond input#submit.alt:disabled[disabled],
        .woocommerce #respond input#submit.alt:disabled[disabled]:hover,
        .woocommerce a.button.alt.disabled,
        .woocommerce a.button.alt.disabled:hover,
        .woocommerce a.button.alt:disabled,
        .woocommerce a.button.alt:disabled:hover,
        .woocommerce a.button.alt:disabled[disabled],
        .woocommerce a.button.alt:disabled[disabled]:hover,
        .woocommerce button.button.alt.disabled,
        .woocommerce button.button.alt.disabled:hover,
        .woocommerce button.button.alt:disabled,
        .woocommerce button.button.alt:disabled:hover,
        .woocommerce button.button.alt:disabled[disabled],
        .woocommerce button.button.alt:disabled[disabled]:hover,
        .woocommerce input.button.alt.disabled,
        .woocommerce input.button.alt.disabled:hover,
        .woocommerce input.button.alt:disabled,
        .woocommerce input.button.alt:disabled:hover,
        .woocommerce input.button.alt:disabled[disabled],
        .woocommerce input.button.alt:disabled[disabled]:hover,
        .btn-primary:hover,
        .woocommerce #respond input#submit,
        .woocommerce a.button,
        .woocommerce button.button,
        .woocommerce input.button,
        .woocommerce .woocommerce-MyAccount-navigation ul .is-active a,
        .woocommerce .woocommerce-MyAccount-navigation ul li a:hover,
        .products_details div.product span.sale-btn {
            background-color: #ff1949;
        }

        .btn-primary,
        .btn-primary.disabled,
        .btn-primary:disabled {
            background-color: #0eb582;
        }

        .productsQuickView .modal-dialog .modal-content .products-content .product-meta span a:hover,
        .woocommerce ul.products li.product h3 a:hover,
        .woocommerce ul.products li.product .add-to-cart-btn,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
        .products_details div.product .woocommerce-tabs ul.tabs li a:hover,
        .products_details div.product .woocommerce-tabs ul.tabs li.active,
        .products_details div.product .woocommerce-tabs ul.tabs li.active a:hover,
        .products_details div.product .product_meta span.posted_in a:hover,
        .products_details div.product .product_meta span.tagged_as a:hover,
        .products_details div.product span.price,
        .cart-table table tbody tr td.product-name a,
        .woocommerce-message::before,
        .woocommerce-info::before {
            color: #ff1949;
        }

        .woocommerce-info,
        .woocommerce-message {
            border-top-color: #ff1949;
        }

        .shop-sidebar ul li a:hover {
            color: #ff1949 !important;
        }

        .woocommerce ul.products li.product:hover .add-to-cart-btn,
        .form-control:focus,
        .woocommerce .form-control:focus {
            border-color: #ff1949;
        }

        .footer-area {
            background-color: #12141b;
        }

        .footer-bottom-area {
            background-color: #090a0e;
        }

        #learn-press-profile-nav .tabs>li ul li a:hover {
            color: #fff !important;
        }

        .become-instructor-partner-content.bg-color .default-btn .icon-arrow {
            color: #252525 !important;
        }

        .become-instructor-partner-content.bg-color .default-btn:focus .icon-arrow,
        .become-instructor-partner-content.bg-color .default-btn:hover .icon-arrow {
            color: #ffffff !important;
        }

        .entry-meta ul li a {
            text-transform: capitalize;
        }

        .top-header,
        .top-header-style-four {
            background-color: #ff1949;
        }

        .blog-details .blog-details-content .article-author {
            clear: both;
        }

        .edali-nav .navbar,
        .navbar-style-three .edali-nav,
        .navbar-area.header-sticky .edali-nav,
        .top-header-style-two {
            background-color: #ffffff;
        }

        .cart-link span {
            background-color: #ff0000;
        }

        .edali-responsive-nav .edali-responsive-menu.mean-container .mean-nav ul .menu-item-new a::after {
            content: "New";
            position: absolute;
            font-size: 8px;
            line-height: 1;
            color: var(--whiteColor);
            background-color: red;
            z-index: 1;
            pointer-events: none;
            border-radius: 2px;
            padding: 5px 6px 4.2px;
            margin: 3px 0 0 5px;
        }

        .edali-nav .navbar .navbar-nav .nav-item.menu-item-new a::after {
            content: "New";
            position: absolute;
            font-size: 8px;
            line-height: 1;
            color: var(--whiteColor);
            background-color: red;
            z-index: 1;
            pointer-events: none;
            border-radius: 2px;
            padding: 5px 6px 4.2px;
            margin: 3px 0 0 5px;
        }

        #particles-js-circle-bubble-4,
        #particles-js-circle-bubble,
        #particles-js-circle-bubble-2,
        #particles-js-circle-bubble-3 {
            display: none;
        }

        @media only screen and (max-width: 767px) {

            #particles-js-circle-bubble-4,
            #particles-js-circle-bubble,
            #particles-js-circle-bubble-2,
            #particles-js-circle-bubble-3 {
                display: none;
            }
        }

        @media only screen and (max-width: 767px) {

            .hero-banner-image img,
            .single-categories-courses-item .icon,
            .single-offer-box .icon,
            .single-categories-courses-box:focus .icon,
            .single-categories-courses-box:hover .icon {
                animation: none;
            }
        }

        li.section-tab.change-password {
            display: none !important;
        }

        .blog-details .article-image img {
            width: 100%;
        }
    </style>
    <link rel="stylesheet" id="edali-responsive-css"
        href="https://themes.envytheme.com/edali/wp-content/themes/edali/assets/css/responsive.css?ver=1691336045"
        type="text/css" media="all" />
    <link rel="stylesheet" id="edali-fonts-css"
        href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C500%2C600%2C700%2C800%7CPoppins%3A400%2C500%2C600%2C700%2C800%2C900&amp;display=swap&amp;ver=1.0.0"
        type="text/css" media="screen" />
    <link rel="stylesheet" id="newsletter-css"
        href="https://themes.envytheme.com/edali/wp-content/plugins/newsletter/style.css?ver=7.7.0" type="text/css"
        media="all" />
    <link rel="stylesheet" id="elementor-icons-css"
        href="https://themes.envytheme.com/edali/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.20.0"
        type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-frontend-legacy-css"
        href="https://themes.envytheme.com/edali/wp-content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.13.4"
        type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-frontend-css"
        href="https://themes.envytheme.com/edali/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.13.4"
        type="text/css" media="all" />
    <link rel="stylesheet" id="swiper-css"
        href="https://themes.envytheme.com/edali/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css?ver=5.3.6"
        type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-post-1942-css"
        href="https://themes.envytheme.com/edali/wp-content/uploads/elementor/css/post-1942.css?ver=1685520191"
        type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-post-445-css"
        href="https://themes.envytheme.com/edali/wp-content/uploads/elementor/css/post-445.css?ver=1685529891"
        type="text/css" media="all" />
    <link rel="stylesheet" id="video-conferencing-with-zoom-api-css"
        href="https://themes.envytheme.com/edali/wp-content/plugins/video-conferencing-with-zoom-api/assets/public/css/style.min.css?ver=4.2.0"
        type="text/css" media="all" />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Poppins%7COpen%20Sans&amp;subset=latin&amp;display=swap&amp;ver=1655996471" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins%7COpen%20Sans&amp;subset=latin&amp;display=swap&amp;ver=1655996471"
        media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Poppins%7COpen%20Sans&amp;subset=latin&amp;display=swap&amp;ver=1655996471" />
    </noscript>
    <link rel="stylesheet" id="learnpress-widgets-css"
        href="https://themes.envytheme.com/edali/wp-content/plugins/learnpress/assets/css/widgets.css?ver=64cfbd6d5fee3"
        type="text/css" media="all" />
    <link rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.2.2"
        type="text/css" media="all" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <script src="https://themes.envytheme.com/edali/wp-includes/js/jquery/jquery.min.js?ver=3.6.4" id="jquery-core-js">
    </script>
    <script src="https://themes.envytheme.com/edali/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0"
        id="jquery-migrate-js"></script>
    <script type="text/javascript" id="ajax-login-script-js-extra">
        /* <![CDATA[ */
        var ajax_login_object = {
            ajaxurl: "https:\/\/themes.envytheme.com\/edali\/wp-admin\/admin-ajax.php",
            redirecturl: "https:\/\/themes.envytheme.com\/edali\/profile",
            loadingmessage: "<p class='alert alert-primary'>Loading...<\/p>",
        };
        /* ]]> */
    </script>
    <script src="https://themes.envytheme.com/edali/wp-content/themes/edali/assets/js/ajax-login-script.js?ver=6.2.2"
        id="ajax-login-script-js"></script>
    <script src="https://themes.envytheme.com/edali/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.5.15"
        async id="tp-tools-js"></script>
    <script src="https://themes.envytheme.com/edali/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.5.15"
        async id="revmin-js"></script>
    <script src="https://themes.envytheme.com/edali/wp-content/themes/edali/assets/js/vendor.min.js?ver=1691336045"
        id="vendor-js"></script>
    <script src="https://themes.envytheme.com/edali/wp-content/themes/edali/assets/js/main.js?ver=1691336045"
        id="edali-main-js"></script>
    <script
        src="https://themes.envytheme.com/edali/wp-content/plugins/edali-toolkit/inc/lp-addons/content-drip/assets/js/frontend.js?ver=6.2.2"
        id="lpcd-frontend-js"></script>
    <link rel="https://api.w.org/" href="https://themes.envytheme.com/edali/wp-json/" />
    <link rel="alternate" type="application/json" href="https://themes.envytheme.com/edali/wp-json/wp/v2/pages/445" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://themes.envytheme.com/edali/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="https://themes.envytheme.com/edali/wp-includes/wlwmanifest.xml" />
 
    <link rel="canonical" href="https://themes.envytheme.com/edali/" />
    <link rel="shortlink" href="https://themes.envytheme.com/edali/" />
    <link rel="alternate" type="application/json+oembed"
        href="https://themes.envytheme.com/edali/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthemes.envytheme.com%2Fedali%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://themes.envytheme.com/edali/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthemes.envytheme.com%2Fedali%2F&amp;format=xml" />
    <meta name="generator" content="Redux 4.3.20" />
    <style id="learn-press-custom-css">
        :root {
            --lp-primary-color: #ff1949;
            --lp-secondary-color: #442e66;
        }
    </style>

    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.13.4; features: a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto" />
    <meta name="generator"
        content="Powered by Slider Revolution 6.5.15 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="https://themes.envytheme.com/edali/wp-content/uploads/2020/02/favicon-1.png"
        sizes="32x32" />
    <link rel="icon" href="https://themes.envytheme.com/edali/wp-content/uploads/2020/02/favicon-1.png"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="https://themes.envytheme.com/edali/wp-content/uploads/2020/02/favicon-1.png" />
    <meta name="msapplication-TileImage"
        content="https://themes.envytheme.com/edali/wp-content/uploads/2020/02/favicon-1.png" />
    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW =
                window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH =
                window.RSIH === undefined ?
                window.innerHeight :
                window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode
                    .offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide =
                    e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide =
                    e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh =
                    e.mh === undefined || e.mh == "" || e.mh === "auto" ?
                    0 :
                    parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0)
                            e.gw[i] = e.gw[i - 1];
                    e.gh =
                        e.el === undefined ||
                        e.el === "" ||
                        (Array.isArray(e.el) && e.el.length == 0) ?
                        e.gh :
                        e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0)
                            e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl)
                        nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m =
                        pw > e.gw[ix] + e.tabw + e.thumbw ?
                        1 :
                        (pw - (e.tabw + e.thumbw)) / e.gw[ix];
                    newh = e.gh[ix] * m + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e);
            }
            //});
        }
    </script>
    <style id="edali_opt-dynamic-css" title="dynamic-css" class="redux-options-output">
        .page-title-content h2 {
            font-display: swap;
        }

        .page-title-content ul li,
        .learn-press-breadcrumb,
        .woocommerce-breadcrumb,
        .page-title-content ul li a,
        .page-title-content ul li::before {
            font-display: swap;
        }

        body,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .slider_area .tp-caption.NotGeneric-Icon,
        .slider_area .tp-caption .NotGeneric-Icon,
        .slider_area .tp-caption.NotGeneric-Title,
        .slider_area .tp-caption .NotGeneric-Title,
        .single-funfact p,
        .single-courses-box .courses-content .course-author .author-name a,
        .single-courses-item .courses-content .course-author .author-name a,
        .single-courses-list-box .box-item .courses-desc .courses-content .course-author .author-name a,
        .courses-topbar .topbar-result-count p,
        .single-feedback-item p,
        .woocommerce-topbar .topbar-result-count p,
        .products-details-tab .tab-content .tabs-item .products-details-tab-content .product-review-form .review-form form .form-group .form-control,
        .coming-soon-content form .form-group .input-newsletter,
        .comments-area .comment-respond .form-submit input,
        .wp-block-verse,
        .single-footer-widget .newsletter-box p {
            font-family: Poppins;
            font-display: swap;
        }

        p,
        .slider_area .tp-caption.NotGeneric-SubTitle,
        .slider_area .tp-caption .NotGeneric-SubTitle,
        .courses-details-desc .requirements-list li,
        .courses-details-desc .description-features-list li,
        .courses-details-desc .audience-list li {
            font-family: "Open Sans";
            font-display: swap;
        }
    </style>

</head>



</head>

<body
    class="home page-template-default page page-id-445 theme-edali woocommerce-no-js Online Education Portal elementor-default elementor-kit-1942 elementor-page elementor-page-445">

    <!-- MAIN WRAPPER ================================================== -->

    <div class="main-wrapper">
        @include('front.nav.header')

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> {{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
 

        @yield('content')

        @include('front.nav.footer')
    </div>


    <script data-cfasync="false"
    src="https://themes.envytheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script>
    window.RS_MODULES = window.RS_MODULES || {};
    window.RS_MODULES.modules = window.RS_MODULES.modules || {};
    window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
    window.RS_MODULES.defered = false;
    window.RS_MODULES.moduleWaiting =
        window.RS_MODULES.moduleWaiting || {};
    window.RS_MODULES.type = "compiled";
</script>
<script>
    var body = document.body;
    body.classList.add("body-header-style-1");
</script>
<script type="text/javascript">
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, "woocommerce-js");
        document.body.className = c;
    })();
</script>
<link rel="stylesheet" id="font-awesome-5-all-css"
    href="https://themes.envytheme.com/edali/wp-content/plugins/learnpress/assets/src/css/vendor/font-awesome-5.min.css?ver=64cfbd6d5fee3"
    type="text/css" media="all" />
<link rel="stylesheet" id="learnpress-css"
    href="https://themes.envytheme.com/edali/wp-content/plugins/learnpress/assets/css/learnpress.css?ver=64cfbd6d5fee3"
    type="text/css" media="all" />
<link rel="stylesheet" id="e-animations-css"
    href="https://themes.envytheme.com/edali/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.13.4"
    type="text/css" media="all" />
<link rel="stylesheet" id="rs-plugin-settings-css"
    href="https://themes.envytheme.com/edali/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.5.15"
    type="text/css" media="all" />
<style id="rs-plugin-settings-inline-css" type="text/css">
    #rs-demo-id {}
</style>
<script src="https://themes.envytheme.com/edali/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.7.7"
    id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
    /* <![CDATA[ */
    var wpcf7 = {
        api: {
            root: "https:\/\/themes.envytheme.com\/edali\/wp-json\/",
            namespace: "contact-form-7\/v1",
        },
    };
    /* ]]> */
</script>
<script src="https://themes.envytheme.com/edali/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.7.7"
    id="contact-form-7-js"></script>
<script
    src="https://themes.envytheme.com/edali/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.7.7.1"
    id="jquery-blockui-js"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        ajax_url: "\/edali\/wp-admin\/admin-ajax.php",
        wc_ajax_url: "\/edali\/?wc-ajax=%%endpoint%%",
        i18n_view_cart: "View cart",
        cart_url: "https:\/\/themes.envytheme.com\/edali\/cart\/",
        is_cart: "",
        cart_redirect_after_add: "no",
    };
    /* ]]> */
</script>
<script
    src="https://themes.envytheme.com/edali/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=7.7.1"
    id="wc-add-to-cart-js"></script>
<script
    src="https://themes.envytheme.com/edali/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.7.7.1"
    id="js-cookie-js"></script>
<script type="text/javascript" id="woocommerce-js-extra">
    /* <![CDATA[ */
    var woocommerce_params = {
        ajax_url: "\/edali\/wp-admin\/admin-ajax.php",
        wc_ajax_url: "\/edali\/?wc-ajax=%%endpoint%%",
    };
    /* ]]> */
</script>
<script
    src="https://themes.envytheme.com/edali/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=7.7.1"
    id="woocommerce-js"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        ajax_url: "\/edali\/wp-admin\/admin-ajax.php",
        wc_ajax_url: "\/edali\/?wc-ajax=%%endpoint%%",
        cart_hash_key: "wc_cart_hash_5564e6fea7fe76e19a409e4564a8a744",
        fragment_name: "wc_fragments_5564e6fea7fe76e19a409e4564a8a744",
        request_timeout: "5000",
    };
    /* ]]> */
</script>
<script
    src="https://themes.envytheme.com/edali/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=7.7.1"
    id="wc-cart-fragments-js"></script>
<script src="https://themes.envytheme.com/edali/wp-content/plugins/learnpress/assets/js/dist/utils.js?ver=64cfbd6d5fee3"
    id="lp-utils-js"></script>
<script
    src="https://themes.envytheme.com/edali/wp-content/plugins/learnpress/assets/js/dist/frontend/become-teacher.js?ver=64cfbd6d5fee3"
    id="lp-become-a-teacher-js"></script>
<script
    src="https://themes.envytheme.com/edali/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.13.4"
    id="elementor-webpack-runtime-js"></script>
<script
    src="https://themes.envytheme.com/edali/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.13.4"
    id="elementor-frontend-modules-js"></script>
<script
    src="https://themes.envytheme.com/edali/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
    id="elementor-waypoints-js"></script>
<script src="https://themes.envytheme.com/edali/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js">
</script>
<script src="https://themes.envytheme.com/edali/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6"
    id="swiper-js"></script>
<script
    src="https://themes.envytheme.com/edali/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.13.4"
    id="share-link-js"></script>
<script src="https://themes.envytheme.com/edali/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.9.0"
    id="elementor-dialog-js"></script>
<script id="elementor-frontend-js-before">
    var elementorFrontendConfig = {
        environmentMode: {
            edit: false,
            wpPreview: false,
            isScriptDebug: false,
        },
        i18n: {
            shareOnFacebook: "Share on Facebook",
            shareOnTwitter: "Share on Twitter",
            pinIt: "Pin it",
            download: "Download",
            downloadImage: "Download image",
            fullscreen: "Fullscreen",
            zoom: "Zoom",
            share: "Share",
            playVideo: "Play Video",
            previous: "Previous",
            next: "Next",
            close: "Close",
        },
        is_rtl: false,
        breakpoints: {
            xs: 0,
            sm: 480,
            md: 768,
            lg: 1025,
            xl: 1440,
            xxl: 1600,
        },
        responsive: {
            breakpoints: {
                mobile: {
                    label: "Mobile Portrait",
                    value: 767,
                    default_value: 767,
                    direction: "max",
                    is_enabled: true,
                },
                mobile_extra: {
                    label: "Mobile Landscape",
                    value: 880,
                    default_value: 880,
                    direction: "max",
                    is_enabled: false,
                },
                tablet: {
                    label: "Tablet Portrait",
                    value: 1024,
                    default_value: 1024,
                    direction: "max",
                    is_enabled: true,
                },
                tablet_extra: {
                    label: "Tablet Landscape",
                    value: 1200,
                    default_value: 1200,
                    direction: "max",
                    is_enabled: false,
                },
                laptop: {
                    label: "Laptop",
                    value: 1366,
                    default_value: 1366,
                    direction: "max",
                    is_enabled: false,
                },
                widescreen: {
                    label: "Widescreen",
                    value: 2400,
                    default_value: 2400,
                    direction: "min",
                    is_enabled: false,
                },
            },
        },
        version: "3.13.4",
        is_static: false,
        experimentalFeatures: {
            a11y_improvements: true,
            additional_custom_breakpoints: true,
            "landing-pages": true,
        },
        urls: {
            assets: "https:\/\/themes.envytheme.com\/edali\/wp-content\/plugins\/elementor\/assets\/",
        },
        swiperClass: "swiper-container",
        settings: {
            page: [],
            editorPreferences: []
        },
        kit: {
            active_breakpoints: ["viewport_mobile", "viewport_tablet"],
            global_image_lightbox: "yes",
            lightbox_enable_counter: "yes",
            lightbox_enable_fullscreen: "yes",
            lightbox_enable_zoom: "yes",
            lightbox_enable_share: "yes",
            lightbox_title_src: "title",
            lightbox_description_src: "description",
        },
        post: {
            id: 445,
            title: "Edali%20%E2%80%93%20Elementor%20Online%20Courses%20%26%20Coaching%20WP%20Theme",
            excerpt: "",
            featuredImage: false,
        },
    };
</script>
<script src="https://themes.envytheme.com/edali/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.13.4"
    id="elementor-frontend-js"></script>
<script
    src="https://themes.envytheme.com/edali/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.13.4"
    id="preloaded-modules-js"></script>




    <!-- JS here -->
    {{-- <script src="{{ asset('frontend') }}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.meanmenu.min.js"></script>
    <script src="{{ asset('frontend') }}/js/ajax-form.js"></script>
    <script src="{{ asset('frontend') }}/js/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('frontend') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins.js"></script>
    <script src="{{ asset('frontend') }}/../../../cdn.jsdelivr.net/npm/swiper%409/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>
 --}}

</body>
</html>
