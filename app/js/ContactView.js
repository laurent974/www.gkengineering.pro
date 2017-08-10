var ContactView = Barba.BaseView.extend({
  namespace: "contactpage",
  onEnter: function() {
    console.log('Contact is ready and attached to the DOM');
  },
  onEnterCompleted: function() {
    console.log("Contact Transition has just finished");
  },
  onLeave: function() {
    console.log("Contact Transition for leave");
  },
  onLeaveCompleted: function() {
    console.log("Contact container has just been removed from the DOM");
  }
});
