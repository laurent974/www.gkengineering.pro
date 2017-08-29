var data = {
  renderer: "svg",
  loop: false,
  autoplay: false,
  rendererSettings: {
    scaleMode: 'noScale',
    preserveAspectRatio:'none',
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
      //$("#bmIn").hide();
      $("#bmOut").show();

      //Bodymovin Controls
      bodymovin.setDirection(1);
      animationOut.play();

      animationOut.onComplete = function() {
        //Affiche le loader
        $('.LoaderTransition').css("display", "table");
        $("#bmOut").hide();
        resolve(true);
      }
    });
  },
  AnimateIn :function() {
    var that = this;
    var $el = $(this.newContainer);

    //hide Loader
    $(that.oldContainer).hide();
    $(".LoaderTransition").hide();

    //toggle animation div
    $("#bmOut").show();
    //$("#bmIn").show();

    //Animation Control
    //animationIn.goToAndStop(animationIn.totalFrames);
    bodymovin.setDirection(-1);
    //animationIn.goToAndStop(33, true);
    animationOut.play();

    //Close Menu on Mobile
    if ($("#menu-menu-1.nav").hasClass("in")) {
      $("button.navbar-toggle").click();
    }

    //Show Content
    $el.css({
      "visibility": "visible"
    });

    //Scroll top
    window.scrollTo(0, 0);

    animationOut.onComplete = function() {
      $("#bmOut").hide();
      that.done();
    }
  }
});
