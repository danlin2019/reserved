    /* ==========================================================================
                  * header menu開啟
      ==========================================================================*/

      $('.item_title').on('click', function() {
        if (!$('.item_nav').hasClass('active')) {
          $('.item_nav').addClass('active')
            $('.item_nav').stop().slideDown()

        } else {
            $('.item_nav').stop().slideUp().removeClass('active');
        }
    });

    $('.closeBtn').on('click', function() {
        $('.item_nav').stop().slideUp();
    });