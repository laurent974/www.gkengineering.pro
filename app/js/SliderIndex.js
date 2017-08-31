var SliderIndex = {
  params: {
    $carousel: $('.carousel'),
    $item: $('.carousel .item'),
    image: '.carousel .item > img',
    windowHeight: "",
  },
  onLoadInit: function() {
    var that = this;
    var $item = $('body').find(".carousel .item");
    $item.removeClass('active');
    $item.eq(0).addClass('active');
    $item.addClass('full-screen');
  },
  loopCarouselImg: function() {
    var src, color;

    $("body").find(this.params.image).each(function() {
      src = $(this).attr('src');
      color = $(this).attr('data-color');

      $(this).parent().css({
        'background-image' : 'url(' + src + ')',
        'background-color' : color
      });
    });
    //$(this).remove();
  },
  handleSwipe: function() {
    $("body").find(".carousel").hammer().on("swipeleft swiperight",function(e) {
      if (e.type == "swipeleft") {
        $(".carousel-control[data-slide=next]").trigger("click");
      } else {
        $(".carousel-control[data-slide=prev]").trigger("click");
      }
    });
  },
  destroyEvents: function() {
    this.params.$carousel.unbind();
  },
  init: function() {
    this.params.windowHeight = $(window).height();
    this.onLoadInit();
    this.handleSwipe();
    this.loopCarouselImg();
    $("body").find(".carousel").carousel({
      interval: 6000,
      pause: "false"
    });
  }
}
