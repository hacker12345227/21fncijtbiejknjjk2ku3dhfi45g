// path: /js/default.js
// ==============================
// Unified Default JS
// - FlexSlider (v2.4.0)
// - FlexNav responsive menu
// - Klikbare items
// - Input focus/blur
// - Diensten hover effect
// ==============================

$(document).ready(function () {

    // ----- Klikbare rijen -----
    $(".clickable").click(function (e) {
        e.preventDefault();
        const link = $(this).find('a').attr('href');
        if (link) window.location = link;
    });

    // ----- Input focus/blur -----
    $('input[type="text"]').on('focus', function () {
        $(this).addClass("focused");
        if (this.value === this.defaultValue) this.value = '';
        if (this.value !== this.defaultValue) this.select();
    }).on('blur', function () {
        $(this).removeClass("focused");
        if ($.trim(this.value) === '') this.value = this.defaultValue || '';
    });

    // ----- Flexslider init -----
    $('.flexslider').flexslider({
        animation: "fade",
        slideshowSpeed: 7000,
        animationSpeed: 600,
        controlNav: true,
        directionNav: true,
        smoothHeight: true,
        pauseOnHover: true
    });

    // ----- FlexNav init -----
    const $nav = $('nav ul').first();
    $nav.attr({
        "class": "flexnav",
        "data-breakpoint": "990"
    });
    $(".flexnav").flexNav({
        animationSpeed: 250,
        transitionOpacity: true,
        buttonSelector: ".menu-button",
        hover: true
    });

    // ----- Diensten hover effect -----
    $("#diensten a").hover(
        function () {
            const $img = $(this).find('img');
            $img.attr('src', $img.attr('src').replace(".png", "-over.png"));
        },
        function () {
            const $img = $(this).find('img');
            $img.attr('src', $img.attr('src').replace("-over.png", ".png"));
        }
    );

});

// ==============================
// FlexNav (simplified, readable version)
// ==============================
(function ($) {
    $.fn.flexNav = function (options) {
        const settings = $.extend({
            animationSpeed: 250,
            transitionOpacity: true,
            buttonSelector: ".menu-button",
            hover: true,
            calcItemWidths: false,
            hoverIntent: false,
            hoverIntentTimeout: 150
        }, options);

        const $nav = $(this);
        $nav.addClass("with-js");
        if (settings.transitionOpacity) $nav.addClass("opacity");

        // mark items with submenus
        $nav.find("li").each(function () {
            if ($(this).has("ul").length) {
                $(this).addClass("item-with-ul").find("ul").hide();
            }
        });

        const $items = $nav.find(">li");
        const itemCount = $items.length;
        const percentageWidth = 100 / itemCount + "%";

        function resizeMenu() {
            const breakpoint = $nav.data("breakpoint") || 990;
            if ($(window).width() <= breakpoint) {
                $nav.removeClass("lg-screen").addClass("sm-screen");
                if (settings.calcItemWidths) $items.css("width", "100%");
            } else {
                $nav.removeClass("sm-screen").addClass("lg-screen");
                if (settings.calcItemWidths) $items.css("width", percentageWidth);
            }
        }

        // toggle submenu
        function toggleSubmenu($item) {
            const $submenu = $item.find(">ul");
            if ($submenu.hasClass("flexnav-show")) {
                $submenu.removeClass("flexnav-show").slideUp(settings.animationSpeed);
            } else {
                $submenu.addClass("flexnav-show").slideDown(settings.animationSpeed);
            }
        }

        // add touch buttons
        $(".item-with-ul, " + settings.buttonSelector).append('<span class="touch-button"><i class="navicon">&#9660;</i></span>');

        $(".touch-button").click(function (e) {
            e.preventDefault();
            toggleSubmenu($(this).parent());
        });

        $(window).on("resize", resizeMenu);
        resizeMenu();
    };
}(jQuery));

// ==============================
// FlexSlider (simplified init wrapper, real plugin stays external)
// ==============================
// Include original jquery.flexslider.min.js in your HTML
// <script src="/js/jquery.flexslider.min.js"></script>
