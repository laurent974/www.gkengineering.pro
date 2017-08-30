var TeamView = Barba.BaseView.extend({
  namespace: "teampage",
  onEnter: function() {
    console.log("The Team dom attached");
  },
  onEnterCompleted: function() {
    console.log("The Team Transition has just finished");
  },
  onLeave: function() {
    console.log("The Team transition out start");
  },
  onLeaveCompleted: function() {
    console.log("The Team container has just been removed from the DOM");
  }
});
