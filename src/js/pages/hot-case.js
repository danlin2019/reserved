    /* ==========================================================================
                  * header menu開啟
      ==========================================================================*/

      $('.item_title').on('click', function() {
        if (!$('.item_title').hasClass('active')) {
          $('.item_title').addClass('active')
            $('.item_nav').stop().slideDown()

        } else {
            $('.item_title').removeClass('active');
            $('.item_nav').stop().slideUp();
        }
    });

    $('.closeBtn').on('click', function() {
        $('.item_nav').stop().slideUp();
    });