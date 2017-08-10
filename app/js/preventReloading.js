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
