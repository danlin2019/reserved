// @prepros-prepend ./about.js
// @prepros-prepend ./media.js
// @prepros-prepend ./media-detail.js
// @prepros-prepend ./hot-case.js
// @prepros-prepend ./hot-case-detail.js
// @prepros-prepend ./history-case.js
// @prepros-prepend ./history-case-detail.js
// @prepros-prepend ./contact.js
// @prepros-prepend ../section/banner.js
// @prepros-prepend ../section/index/featured-case.js
// @prepros-prepend ../section/index/hot-case.js
// @prepros-prepend ../section/index/brand-case.js
// @prepros-prepend ../section/index/history-case.js
// @prepros-prepend ../section/index/about.js


    /* ==========================================================================
                  * header menu開啟
      ==========================================================================*/

      $('.menu-wrapper').on('click', function() {
        if (!$('.hamburger-menu').hasClass('animate')) {
            $('.hamburger-menu').addClass('animate');
            $('.nav-box').stop().slideDown()
            $('body,html').css({ 'overflow': 'hidden' });

        } else {
            $('.hamburger-menu').removeClass('animate');
            $('.nav-box').stop().slideUp().removeClass('open');
            $('body,html').removeAttr("style");
        }
    });

    $('.closeBtn').on('click', function() {
        $('.hamburger-menu').removeClass('animate');
        $('.nav_item').stop().slideUp();
        $('body,html').removeAttr("style");
    });

    