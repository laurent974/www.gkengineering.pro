var animData = {
  container: document.getElementById("bm"),
  renderer: "svg",
  loop: false,
  autoplay: false,
  animationData: AnimationData,
  rendererSettings: {
    scaleMode: 'noScale',
    preserveAspectRatio: 'xMidYMid slice'
  }
};

var animation = bodymovin.loadAnimation(animData);
bodymovin.setQuality('low');


var Transition = Barba.BaseTransition.extend({
  start: function() {
    Promise
      .all([this.newContainerLoading, this.AnimateOut()])
      .then(this.AnimateIn.bind(this));
  },
  AnimateOut: function() {
    var that = this;

    //Bodyovin animation
    return new Promise(function(resolve) {
      //Bodymovin Controls
      animation.goToAndStop(0);
      animation.setDirection(1);
      animation.play();

      animation.onComplete = function() {
        resolve(true);
      }
    })
  },
  AnimateIn :function() {
    var that = this;
    var $el = $(this.newContainer);

    //Animation Control
    animation.goToAndStop(animation.totalFrames, true);
    animation.setDirection(-1);
    animation.play();

    //Show Content
    $(that.oldContainer).hide();
    $el.show();

    animation.onComplete = function() {
      that.done();
    }
  }
});
