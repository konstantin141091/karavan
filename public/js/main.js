$(function() {
  $('.gallery-image').hover(
    function() {
      $( this ).addClass( "hovered" );
    }, function() {
      $( this ).removeClass( "hovered" );
    }
  )
  $('.popup').magnificPopup({
    type: 'inline',
    closeOnBgClick: false,
    showCloseBtn:false,
    removalDelay: 500, //delay removal by X to allow out-animation
    callbacks: {
        beforeOpen: function () {
            this.st.mainClass = this.st.el.attr('data-effect');
        }
    },
    midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
  })
  $('.gallery-image').magnificPopup({
    type: 'inline',
    removalDelay: 500, //delay removal by X to allow out-animation
    callbacks: {
        beforeOpen: function () {
            this.st.mainClass = this.st.el.attr('data-effect');
        }
    },
    midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
  })

  $('#close').on( "click", function() {
    $.magnificPopup.close();
  })
  $('#close-done').on( "click", function() {
    $.magnificPopup.close();
  })
  $('.header__btn').on('click', function() {
    $(this).toggleClass('open')
    $('.header__contacts-mobile').toggleClass('open')
    const $logo = $('.mobile-logo')
    if ($logo.attr('src') ==='images/white-logo.png') {
      $logo.attr('src', 'images/logo.png')
    } else {
      $logo.attr('src', 'images/white-logo.png')
    }
    $('.header__menu-mobile').toggleClass('open')
  })

  var mixer = mixitup('.vacancy__box', {
    load: {
      filter: '.factory'
    }
  })
})
