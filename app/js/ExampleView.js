var ExampleView = Barba.BaseView.extend({
  namespace: "examplepage",
  onEnter: function() {
    console.log('Example is ready and attached to the DOM');
  },
  onEnterCompleted: function() {
    console.log("Example Transition has just finished");
  },
  onLeave: function() {
    console.log("Example Transition for leave");
  },
  onLeaveCompleted: function() {
    console.log("Example container has just been removed from the DOM");
  }
});
