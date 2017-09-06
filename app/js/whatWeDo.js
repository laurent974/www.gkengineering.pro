var WhatWeDo = {
  params: {
    $menu: "",
    $button: "",
    $menuMobile: ""
  },

  initParams: function() {
    this.params.$menu = $('body').find('.WhatWeDo-MenuList');
    this.params.$button = $('body').find('.WhatWeDo-MenuList').find('.Button');
    this.params.$menuMobile = $('body').find('#WhatWeDo-MenuMobileSelect');
  },

  handleMenuButtonMobile: function() {
    var that = this;

    this.params.$menuMobile.on("change", function() {
      var optionSelected = $(this).find("option:selected");
      var valueSelected  = optionSelected.val();

      $("body").find('[data-anchor="' + valueSelected + '"]').click();
    });
  },

  init: function() {
    this.initParams();
    this.params.$button.on('click', function(event) {
      var target = $(this.getAttribute('data-anchor'));

      if( target.length ) {
          event.preventDefault();
          $('html, body').stop().animate({
              scrollTop: target.offset().top - 80
          }, 800);
      }
    });
    
    this.handleMenuButtonMobile();
  }
}
