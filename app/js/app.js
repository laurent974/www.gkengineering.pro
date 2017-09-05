var app = {
  transitionsInit: function() {
    Barba.Pjax.getTransition = function() {
      return Transition;
    };
  },
  viewsInit: function() {
    //Please note, the DOM should be ready
    HomeView.init();
    ContactView.init();
    AboutUsView.init();
    StartProjectView.init();
    JobsView.init();
    TeamView.init();
    ProjectsView.init();
    ServicesView.init();
  },
  menuInit: function() {
    Menu.init();
  },
  homeInit: function() {
    ClientSlider.init();
    SliderIndex.init();
  },
  setNoBarbaToLinks: function() {
    $(".wpml-ls-item a").addClass("no-barba");
  },
  init: function() {
    this.setNoBarbaToLinks();
    this.viewsInit();
    //Please note, the DOM should be ready
    Barba.Pjax.start();
    this.transitionsInit();
    Barba.Prefetch.init();
    prevReoladingSamePage.init();
    this.menuInit();
    Navbar.init();
  }
}

$(document).ready(function() {
  app.init();
});
