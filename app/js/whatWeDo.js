var WhatWeDo = {
  params: {
    $menu: "",
    $button: ""
  },

  initParams: function() {
    this.params.$menu = $('body').find('.WhatWeDo-MenuList');
    this.params.$button = $('body').find('.WhatWeDo-MenuList').find('.Button');
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
  }
}
