var app = {
  transitionsInit: function() {
    Barba.Pjax.getTransition = function() {
      return Transition;
    };
  },
  viewsInit: function() {
    //Please note, the DOM should be ready
    HomeView.init();
    ExampleView.init();
    ContactView.init();
  },
  menuInit: function() {
    Menu.init();
  },
  init: function() {
    this.viewsInit();
    //Please note, the DOM should be ready
    Barba.Pjax.start();
    this.transitionsInit();
    Barba.Prefetch.init();
    prevReoladingSamePage.init();
    this.menuInit();
  }
}

$(document).ready(function() {
  app.init();
});

var ContactView = Barba.BaseView.extend({
  namespace: "contactpage",
  onEnter: function() {
    console.log('Contact is ready and attached to the DOM');
  },
  onEnterCompleted: function() {
    console.log("Contact Transition has just finished");
  },
  onLeave: function() {
    console.log("Contact Transition for leave");
  },
  onLeaveCompleted: function() {
    console.log("Contact container has just been removed from the DOM");
  }
});

var ExampleView = Barba.BaseView.extend({
  namespace: "examplepage",
  onEnter: function() {
    console.log('Example is ready and attached to the DOM');
  },
  onEnterCompleted: function() {
    console.log("Example Transition has just finished");
  },
  onLeave: function() {
    console.log("Example Transition for leave");
  },
  onLeaveCompleted: function() {
    console.log("Example container has just been removed from the DOM");
  }
});

var HomeView = Barba.BaseView.extend({
  namespace: 'homepage',
  onEnter: function() {
    console.log('Homepage is ready and attached to the DOM');
  },
  onEnterCompleted: function() {
    console.log("Homepage Transition has just finished");
  },
  onLeave: function() {
    console.log("Homepage Transition for leave");
  },
  onLeaveCompleted: function() {
    console.log("Homepage container has just been removed from the DOM");
  }
});

var Menu = {
  switchActive: function(container, MouseEvent) {
    if (MouseEvent.type === "click") {
      $(".menu-item").removeClass('active');
      $(container).parent().addClass('active');
    }
  },
  init: function() {
    var that = this;
    Barba.Dispatcher.on('linkClicked', function(container, MouseEvent) {
      that.switchActive(container, MouseEvent);
    });
  }
}

var prevReoladingSamePage = {
  links: document.querySelectorAll('a[href]'),
  preventClick: function(event) {
    if (event.currentTarget.href === window.location.href) {
      event.preventDefault();
      event.stopPropagation();
    }
  },
  handleEvent: function() {
    var that = this;
    for (var i = 0; i < this.links.length; i++) {
      that.links[i].addEventListener('click', that.preventClick);
    }
  },
  init: function() {
    this.handleEvent();
  }
}

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
    $(that.oldContainer).hide();
    $(".LoaderTransition").hide();

    //toggle animation div
    $("#bmIn").show();
    $("#bmOut").hide();

    //Animation Control
    animationIn.goToAndPlay(0);

    //Show Content
    $el.css({
      "visibility": "visible"
    });

    animationIn.onComplete = function() {
      $("#bmIn").hide();
      that.done();
    }
  }
});
