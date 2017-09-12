var ContactView = Barba.BaseView.extend({
  namespace: "contactpage",
  onEnter: function() {
    gMap.init();
  },
  onLeave: function() {
    gMap.destroy();
  }
});
