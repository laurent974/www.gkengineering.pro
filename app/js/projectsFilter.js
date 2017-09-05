var ProjectsFilter = {
  params: {
    $grid: $("body").find(".Projects"),
    $itemSelector: ".ProjectsBox-item",
    $filtersBar: $("body").find(".Projects-FilterList"),
    $gridActivated: ""
  },

  initParams: function() {
    this.params.$grid = $("body").find(".Projects");
    this.params.$filtersBar = $("body").find(".Projects-FilterList");
  },

  handleFilterButton: function() {
    var that = this;

    this.params.$filtersBar.on("click", ".js-buttonFilter", function() {
      var $this = $(this);
      var filterValue = $this.attr('data-filter');
      $('body').find('.js-buttonFilter').closest("li").removeClass('active');
      $this.closest("li").addClass("active");
      that.params.$gridActivated.isotope({ filter: filterValue });
    });
  },

  destroy: function() {
    this.params.$gridActivated.isotope('destroy');
    this.params.$gridActivated = "";
  },

  init: function() {
    var that = this;

    this.initParams();

    this.params.$gridActivated = this.params.$grid.isotope({
      itemSelector: that.params.$itemSelector,
      layoutMode: 'vertical'
    });

    this.handleFilterButton();
  }
}
