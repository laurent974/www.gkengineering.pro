var HomeView = Barba.BaseView.extend({
  namespace: 'homepage',
  onEnter: function() {
    console.log('Homepage is ready and attached to the DOM');
    app.homeInit();
  },
  onEnterCompleted: function() {
    console.log("Homepage Transition has just finished");

  },
  onLeave: function() {
    console.log("Homepage Transition for leave");
  },
  onLeaveCompleted: function() {
    console.log("Homepage container has just been removed from the DOM");
    SliderIndex.destroyEvents();
    ClientSlider.destroy();
  }
});
