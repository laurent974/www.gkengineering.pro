var ProjectsView = Barba.BaseView.extend({
  namespace: "projectspage",
  onEnter: function() {
    console.log('Projects is ready and attached to the DOM');
    ProjectLightbox.init();
  },
  onEnterCompleted: function() {
    console.log("Projects Transition has just finished");
  },
  onLeave: function() {
    ProjectLightbox.destroy();
    console.log("Projects Transition for leave");
  },
  onLeaveCompleted: function() {
    console.log("Projects container has just been removed from the DOM");
  }
});
