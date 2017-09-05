var ProjectsFilter = {
  params: {
    $grid: $(".Projects"),
    $itemSelector: ".ProjectsBox-item",
    $filtersBar: $(".Projects-FilterList")
  },

  handleFilterButton: function(grid) {
    var that = this;

    this.params.$filtersBar.on("click", ".js-buttonFilter", function() {
      var $this = $(this);
      var filterValue = $this.attr('data-filter');
      $('.js-buttonFilter').closest("li").removeClass('active');
      $this.closest("li").addClass("active");
      grid.isotope({ filter: filterValue });
    });
  },

  init: function() {
    var that = this;

    var $grid = this.params.$grid.isotope({
      itemSelector: that.params.$itemSelector,
      layoutMode: 'vertical'
    });

    this.handleFilterButton($grid);
  }
}
