var JobsView = Barba.BaseView.extend({
  namespace: "jobspage",
  onEnter: function() {
    console.log('Jobs dom attached');
  },
  onEnterCompleted: function() {
    console.log("Jobs Transition has just finished");
  },
  onLeave: function() {
    console.log('Jobs Transition out start');
  },
  onLeaveCompleted: function() {
    console.log("Contact container has just been removed from the DOM");
  }
});
