var ProjectView = Barba.BaseView.extend({
  namespace: 'projectpage',
  onEnter: function() {
      ProjectLightbox.init();
  },
  onLeaveCompleted: function() {
    ProjectLightbox.destroy();
    ClientSlider.destroy();
  }
});
