var animData = {
  container: document.getElementById("bm"),
  renderer: "svg",
  loop: false,
  autoplay: false,
  animationData: AnimationData,
  rendererSettings: {
    scaleMode: 'noScale'
  }
};

var animation = bodymovin.loadAnimation(animData);

//bodymovin.setSpeed(2);
bodymovin.setQuality('low');


var Transition = Barba.BaseTransition.extend({
  start: function() {
    Promise
      .all([this.newContainerLoading, this.AnimateOut()])
      .then(this.AnimateIn.bind(this));
  },
  AnimateOut: function() {
    var that = this;
    //return $(this.oldContainer).animate({opacity: 0}).promise();

    //Bodyovin animation
    return new Promise(function(resolve) {
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

    // $el.css({
    //   visibility: 'visible',
    //   opacity: 0
    // });

    // $el.animate({opacity: 1}, 400, function() {
    //   that.done();
    // });

    //Bodyovin animation
    animation.goToAndStop(animation.totalFrames, true);
    animation.setDirection(-1);

    animation.play();
    animation.onComplete = function() {
      $(that.oldContainer).hide();
      $el.show();
      that.done();
    }
  }
});
