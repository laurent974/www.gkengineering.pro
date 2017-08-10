var Transition = Barba.BaseTransition.extend({
  start: function() {
    Promise
      .all([this.newContainerLoading, this.AnimateOut()])
      .then(this.AnimateIn.bind(this));
  },
  AnimateOut: function() {
    return $(this.oldContainer).animate({opacity: 0}).promise();
  },
  AnimateIn :function() {
    var that = this;
    var $el = $(this.newContainer);

    $(this.oldContainer).hide();

    $el.css({
      visibility: 'visible',
      opacity: 0
    });

    $el.animate({opacity: 1}, 400, function() {
      that.done();
    });
  }
});
