var Menu = {
  switchActive: function(container, MouseEvent) {
    if (MouseEvent.type === "click") {
      $(".menu-item").removeClass('active');
      $(container).parent().addClass('active');
    }
  },
  init: function() {
    var that = this;
    Barba.Dispatcher.on('linkClicked', function(container, MouseEvent) {
      that.switchActive(container, MouseEvent);
    });
  }
}
