var ContactView = Barba.BaseView.extend({
  namespace: "contactpage",
  onEnter: function() {
    gMap.init();
  },
  onEnterCompleted: function() {
    console.log("Contact Transition has just finished");
  },
  onLeave: function() {
    gMap.destroy();
  },
  onLeaveCompleted: function() {
    console.log("Contact container has just been removed from the DOM");
  }
});
