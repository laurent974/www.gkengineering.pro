var HomeView = Barba.BaseView.extend({
  namespace: 'homepage',
  onEnter: function() {
    app.homeInit();
  },
  onEnterCompleted: function() {
    console.log("Homepage Transition has just finished");

  },
  onLeave: function() {
    console.log("Homepage Transition for leave");
  },
  onLeaveCompleted: function() {
    SliderIndex.destroyEvents();
    ClientSlider.destroy();
  }
});
