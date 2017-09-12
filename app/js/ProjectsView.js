var ProjectsView = Barba.BaseView.extend({
  namespace: "projectspage",
  onEnter: function() {
    ProjectLightbox.init();
    ProjectsFilter.init();
  },
  onLeave: function() {
    ProjectLightbox.destroy();
    ProjectsFilter.destroy();
  }
});
