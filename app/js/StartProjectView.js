var StartProjectView = Barba.BaseView.extend({
  namespace: "startprojectpage",
  onEnter: function() {
    console.log("start project dom attached");
  },
  onEnterCompleted: function() {
    console.log("Start a project Transition has just finished");
  },
  onLeave: function() {
    console.log("start a project transition out start");
  },
  onLeaveCompleted: function() {
    console.log("Contact container has just been removed from the DOM");
  }
});
