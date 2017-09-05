var ProjectLightbox = {
  params: {
    selector: $("body").find(".swipebox"),
  },

  destroy: function() {

  },

  init: function() {
    var that = this;

    this.params.selector.swipebox();
  }
}
