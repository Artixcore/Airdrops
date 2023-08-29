(function($) {
    "use strict";

    /*----------  Menu sticky ----------*/

    var windows = $(window);
    var screenSize = windows.width();
    var sticky = $('.header-sticky');
    var stickyAbsolute = $('.header-sticky--absolute');
    var $html = $('html');
    var $body = $('body');


    windows.on('scroll', function() {
        var scroll = windows.scrollTop();
        var headerHeight = sticky.height();
        var headerHeightAbsolute = stickyAbsolute.height();

        if (screenSize >= 992) {
            if (scroll < headerHeight) {
                sticky.removeClass('is-sticky');
            } else {
                sticky.addClass('is-sticky');
            }

            if (scroll < headerHeightAbsolute) {
                stickyAbsolute.removeClass('is-sticky--absolute');
            } else {
                stickyAbsolute.addClass('is-sticky--absolute');
            }
        }

    });


    /*----------  Scroll to top  ----------*/
    function scrollToTop() {
        var $scrollUp = $('#scroll-top'),
            $lastScrollTop = 0,
            $window = $(window);

        $window.on('scroll', function() {
            var st = $(this).scrollTop();
            if (st > $lastScrollTop) {
                $scrollUp.removeClass('show');
            } else {
                if ($window.scrollTop() > 200) {
                    $scrollUp.addClass('show');
                } else {
                    $scrollUp.removeClass('show');
                }
            }
            $lastScrollTop = st;
        });

        $scrollUp.on('click', function(evt) {
            $('html, body').animate({ scrollTop: 0 }, 600);
            evt.preventDefault();
        });
    }

    scrollToTop();


    /*=============================================
    =            smooth scroll            =
    =============================================*/

    $('.smooth-scroll-demos').on('click', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - sticky.height()
        }, 800);
    });

    /*=====  End of smooth scroll  ======*/



})(jQuery);




// Dark to light mode js
const lightToDarkButton = document.getElementById("light--to-dark-button");
lightToDarkButton?.addEventListener("click", function () {
    if (localStorage.getItem("theme-color")) {
      if (localStorage.getItem("theme-color") === "light") {
        document.documentElement.classList.add("is_dark");
        localStorage.setItem("theme-color", "dark");
        lightToDarkButton?.classList.add("dark--mode");
      } else {
        document.documentElement.classList.remove("is_dark");
        localStorage.setItem("theme-color", "light");
        lightToDarkButton?.classList?.remove("dark--mode");
      }
    } else {
      if (document.documentElement.classList.contains("is_dark")) {
        document.documentElement.classList.remove("is_dark");
        lightToDarkButton?.classList?.remove("dark--mode");
        localStorage.setItem("theme-color", "light");
      } else {
        document.documentElement.classList.add("is_dark");
        localStorage.setItem("theme-color", "dark");
        lightToDarkButton?.classList.add("dark--mode");
      }
    }
});


var windowOn = $(window);
////////////////////////////////////////////////////
// 01. PreLoader Js
windowOn.on('load', function() {
    $("#loading").fadeOut(500);
});