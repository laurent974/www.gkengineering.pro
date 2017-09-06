var JobsAccordion = {
  params: {
    collapseDiv: ".collapse",
    materialIcons: '.material-icons',
    plusContent: "&#xE145;",
    removeContent: "&#xE15B;"
  },

  handleScrollTo: function() {
    $('body').find('.Button-Apply').on('click', function(event) {
      var target = $("body").find("." + $(this).data('anchor'));

      if( target.length ) {
          event.preventDefault();
          $('html, body').stop().animate({
              scrollTop: target.offset().top - 80
          }, 800);
      }
    });
  },

  init: function() {
    var that = this;

    this.handleScrollTo();

    $("body").find(this.params.collapseDiv).on('shown.bs.collapse', function(){
      $(this).parent().find(that.params.materialIcons).toggle();
    }).on('hidden.bs.collapse', function(){
      $(this).parent().find(that.params.materialIcons).toggle();
    });
  }
}
