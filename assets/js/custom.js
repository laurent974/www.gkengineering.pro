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

var Transition = Barba.BaseTransition.extend({
  start: function() {
    Promise
      .all([this.newContainerLoading, this.AnimateOut()])
      .then(this.AnimateIn.bind(this));
  },
  AnimateOut: function() {
    return $(this.oldContainer).animate({opacity: 0}).promise();
  },
  AnimateIn :function() {
    var that = this;
    var $el = $(this.newContainer);

    $(this.oldContainer).hide();

    $el.css({
      visibility: 'visible',
      opacity: 0
    });

    $el.animate({opacity: 1}, 400, function() {
      that.done();
    });
  }
});
