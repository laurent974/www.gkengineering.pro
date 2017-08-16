var SliderIndex = {
  params: {
    $carousel: $('.carousel'),
    $item: $('.carousel .item'),
    $img: $('.carousel .item > img'),
    windowHeight: "",
  },
  onLoadInit: function() {
    var that = this;
    var $item = $('body').find(".carousel .item");
    $item.removeClass('active');
    $item.eq(0).addClass('active');
    $item.height(that.params.windowHeight);
    $item.addClass('full-screen');
  },
  loopCarouselImg: function() {
    var src, color;

    this.params.$img.each(function() {
      src = $(this).attr('src');
      color = $(this).attr('data-color');

      $(this).parent().css({
        'background-image' : 'url(' + src + ')',
        'background-color' : color
      });
    });
    $(this).remove();
  },
  handleResize: function() {
    var that = this;
    $(window).on('resize', function (){
      that.params.windowHeight = $(window).height();
      $("body").find('.carousel .item').height(that.params.windowHeight);
      console.log("bind resize");
    });
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
    $(window).unbind("resize", function() {
      console.log("unbind resize");
    });
    this.params.$carousel.unbind();
  },
  init: function() {
    this.params.windowHeight = $(window).height();
    this.onLoadInit();
    this.handleSwipe();
    this.loopCarouselImg();
    this.handleResize();
    $("body").find(".carousel").carousel({
      interval: 6000,
      pause: "false"
    });
  }
}
