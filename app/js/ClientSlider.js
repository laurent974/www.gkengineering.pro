var ClientSlider = {
  params: {
    logos: ".customer-logos"
  },
  handleSlick: function() {
    $("body").find(this.params.logos).slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1000,
      arrows: false,
      dots: false,
      pauseOnHover: true, 
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 520,
        settings: {
          slidesToShow: 3
        }
      }]
    });
  },
  destroy: function() {
    $(".body").find(this.params.logos).slick('unslick');
  },
  init: function() {
    this.handleSlick();
  }
}
