var ProjectsFilter = {
  params: {
    $grid: "",
    $itemSelector: ".ProjectsBox-item",
    $filtersBar: "",
    $FiltersBarMobile: "",
    $gridActivated: ""
  },

  initParams: function() {
    this.params.$grid = $("body").find(".Projects");
    this.params.$filtersBar = $("body").find(".Projects-FilterList");
    this.params.$filtersBarMobile = $("body").find("#Projects-FilterSelect");
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

  handleFilterButtonMobile: function() {
    var that = this;

    this.params.$filtersBarMobile.on("change", function() {
      var optionSelected = $(this).find("option:selected");
      var valueSelected  = optionSelected.val();

      $("body").find('[data-filter="' + valueSelected + '"]').click();
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
    this.handleFilterButtonMobile();
  }
}
