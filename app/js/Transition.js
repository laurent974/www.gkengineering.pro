var data = {
  renderer: "svg",
  loop: false,
  autoplay: false,
  rendererSettings: {
    scaleMode: 'noScale',
    preserveAspectRatio: 'xMidYMid slice'
  }
}

//Chargement des animations
var animInData = {};
$.extend(animInData, data, {
  container: document.getElementById("bmIn"),
  animationData: AnimationInData
});

var animOutData = {};
$.extend(animOutData, data, {
  container: document.getElementById("bmOut"),
  animationData: AnimationOutData
});

var animationIn = bodymovin.loadAnimation(animInData);
var animationOut = bodymovin.loadAnimation(animOutData);

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
      //toggle animation div
      $("#bmIn").hide();
      $("#bmOut").show();

      //Bodymovin Controls
      animationOut.goToAndPlay(0);

      animationOut.onComplete = function() {
        //Affiche le loader
        $('.LoaderTransition').css("display", "table");
        resolve(true);
      }
    });
  },
  AnimateIn :function() {
    var that = this;
    var $el = $(this.newContainer);

    //hide Loader
    $(".LoaderTransition").hide();

    //toggle animation div
    $("#bmIn").show();
    $("#bmOut").hide();

    //Animation Control
    animationIn.goToAndPlay(0);

    //Show Content
    $(that.oldContainer).hide();
    $el.css({
      "visibility": "visible"
    });

    animationIn.onComplete = function() {
      $("#bmIn").hide();
      that.done();
    }
  }
});
