var HomeView = Barba.BaseView.extend({
  namespace: 'homepage',
  onEnter: function() {
    app.homeInit();
  },
  onLeaveCompleted: function() {
    SliderIndex.destroyEvents();
    ClientSlider.destroy();
  }
});
