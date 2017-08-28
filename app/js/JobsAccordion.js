var JobsAccordion = {
  params: {
    collapseDiv: ".collapse",
    materialIcons: '.material-icons',
    plusContent: "&#xE145;",
    removeContent: "&#xE15B;"
  },
  init: function() {
    var that = this;

    $("body").find(this.params.collapseDiv).on('shown.bs.collapse', function(){
      $(this).parent().find(that.params.materialIcons).toggle();
    }).on('hidden.bs.collapse', function(){
      $(this).parent().find(that.params.materialIcons).toggle();
    });
  }
}
