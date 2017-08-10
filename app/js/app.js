var app = {
  transitionsInit: function() {
    Barba.Pjax.getTransition = function() {
      console.log(Transition)
      return Transition;
    };
  },
  viewsInit: function() {
    //Please note, the DOM should be ready
    HomeView.init();
    ExampleView.init();
    ContactView.init();
  },
  init: function() {
    this.viewsInit();
    //Please note, the DOM should be ready
    Barba.Pjax.start();
    this.transitionsInit();
    Barba.Prefetch.init();
    prevReoladingSamePage.init();
  }
}

$(document).ready(function() {
  app.init();
});
