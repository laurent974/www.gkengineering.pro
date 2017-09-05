var ServicesView = Barba.BaseView.extend({
  namespace: 'servicepage',
  onEnter: function() {
    WhatWeDo.init();
  },
  onEnterCompleted: function() {
    console.log("Homepage Transition has just finished");

  },
  onLeave: function() {
    console.log("Homepage Transition for leave");
  },
  onLeaveCompleted: function() {
  }
});
