var AboutUsView = Barba.BaseView.extend({
  namespace: "aboutpage",
  onEnter: function() {
    console.log('About-Us is ready and attached to the DOM');
  },
  onEnterCompleted: function() {
    console.log("About-Us Transition has just finished");
  },
  onLeave: function() {
    console.log("About-Us Transition for leave");
  },
  onLeaveCompleted: function() {
    console.log("About-Us container has just been removed from the DOM");
  }
});
