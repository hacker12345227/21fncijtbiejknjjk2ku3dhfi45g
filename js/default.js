// path: /js/default.js

// ==============================
// Default site JS
// - Klikbare items
// - Input focus/blur handling
// - Flexslider init
// - FlexNav responsive menu
// - Diensten hover effect
// ==============================

$(document).ready(function() {

    // ----- Klikbare rijen -----
    $(".clickable").click(function(e) {
        e.preventDefault();
        const link = $(this).find('a').attr('href');
        if (link) window.location = link;
    });

    // ----- Input focus/blur -----
    $('input[type="text"]').on('focus', function() {
        $(this).addClass("focused");
        if (this.value === this.defaultValue) this.value = '';
        if (this.value !== this.defaultValue) this.select();
    }).on('blur', function() {
        $(this).removeClass("focused");
        if ($.trim(this.value) === '') this.value = this.defaultValue || '';
    });

    // ----- Flexslider init -----
    // Requires: /js/jquery.flexslider.min.js
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
    // Requires: /js/jquery.flexnav.min.js
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
        function() {
            const $img = $(this).find('img');
            $img.attr('src', $img.attr('src').replace(".png", "-over.png"));
        },
        function() {
            const $img = $(this).find('img');
            $img.attr('src', $img.attr('src').replace("-over.png", ".png"));
        }
    );

});
