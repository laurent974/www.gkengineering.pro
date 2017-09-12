var JobsView = Barba.BaseView.extend({
  namespace: "jobspage",
  onEnter: function() {
    JobsAccordion.init();
  }
});
