var app={transitionsInit:function(){Barba.Pjax.getTransition=function(){return Transition}},viewsInit:function(){HomeView.init(),ExampleView.init(),ContactView.init()},menuInit:function(){Menu.init()},homeInit:function(){ClientSlider.init(),SliderIndex.init()},setNoBarbaToLinks:function(){$(".wpml-ls-item a").addClass("no-barba")},init:function(){this.setNoBarbaToLinks(),this.viewsInit(),Barba.Pjax.start(),this.transitionsInit(),Barba.Prefetch.init(),prevReoladingSamePage.init(),this.menuInit(),Navbar.init()}};$(document).ready(function(){app.init()});var ClientSlider={params:{logos:".customer-logos"},handleSlick:function(){$("body").find(this.params.logos).slick({slidesToShow:6,slidesToScroll:1,autoplay:!0,autoplaySpeed:1e3,arrows:!1,dots:!1,pauseOnHover:!1,responsive:[{breakpoint:768,settings:{slidesToShow:4}},{breakpoint:520,settings:{slidesToShow:3}}]})},destroy:function(){$(".body").find(this.params.logos).slick("unslick")},init:function(){this.handleSlick()}},ContactView=Barba.BaseView.extend({namespace:"contactpage",onEnter:function(){console.log("Contact is ready and attached to the DOM")},onEnterCompleted:function(){console.log("Contact Transition has just finished")},onLeave:function(){console.log("Contact Transition for leave")},onLeaveCompleted:function(){console.log("Contact container has just been removed from the DOM")}}),ExampleView=Barba.BaseView.extend({namespace:"examplepage",onEnter:function(){console.log("Example is ready and attached to the DOM")},onEnterCompleted:function(){console.log("Example Transition has just finished")},onLeave:function(){console.log("Example Transition for leave")},onLeaveCompleted:function(){console.log("Example container has just been removed from the DOM")}}),HomeView=Barba.BaseView.extend({namespace:"homepage",onEnter:function(){console.log("Homepage is ready and attached to the DOM"),app.homeInit()},onEnterCompleted:function(){console.log("Homepage Transition has just finished")},onLeave:function(){console.log("Homepage Transition for leave")},onLeaveCompleted:function(){console.log("Homepage container has just been removed from the DOM"),SliderIndex.destroyEvents(),ClientSlider.destroy()}}),Menu={switchActive:function(n,e){"click"===e.type&&($(".menu-item").removeClass("active"),$(n).parent().addClass("active"))},init:function(){var n=this;Barba.Dispatcher.on("linkClicked",function(e,t){n.switchActive(e,t)})}},Navbar={params:{flagAdd:!0,elements:[".navbar",".navbar-inner",".navbar-brand"]},remove:function(){for(var n=this,e=0;e<this.params.elements.length;e++)$(n.params.elements[e]).removeClass("navbar-theme");this.params.flagAdd=!0},add:function(){var n=this;if(this.params.flagAdd){for(var e=0;e<this.params.elements.length;e++)$(n.params.elements[e]).addClass("navbar-theme");this.params.flagAdd=!1}},toggleFixedNavabar:function(){var n=this,e=window.pageYOffset;0<e?n.add():0==e&&n.remove()},handleScroll:function(){var n=this;window.onscroll=function(e){n.toggleFixedNavabar()}},init:function(){this.toggleFixedNavabar(),this.handleScroll()}},prevReoladingSamePage={links:document.querySelectorAll("a[href]"),preventClick:function(n){n.currentTarget.href===window.location.href&&(n.preventDefault(),n.stopPropagation())},handleEvent:function(){for(var n=this,e=0;e<this.links.length;e++)n.links[e].addEventListener("click",n.preventClick)},init:function(){this.handleEvent()}},SliderIndex={params:{$carousel:$(".carousel"),$item:$(".carousel .item"),image:".carousel .item > img",windowHeight:""},onLoadInit:function(){var n=$("body").find(".carousel .item");n.removeClass("active"),n.eq(0).addClass("active"),n.addClass("full-screen")},loopCarouselImg:function(){var n,e;$("body").find(this.params.image).each(function(){n=$(this).attr("src"),e=$(this).attr("data-color"),$(this).parent().css({"background-image":"url("+n+")","background-color":e})})},handleSwipe:function(){$("body").find(".carousel").hammer().on("swipeleft swiperight",function(n){"swipeleft"==n.type?$(".carousel-control[data-slide=next]").trigger("click"):$(".carousel-control[data-slide=prev]").trigger("click")})},destroyEvents:function(){this.params.$carousel.unbind()},init:function(){this.params.windowHeight=$(window).height(),this.onLoadInit(),this.handleSwipe(),this.loopCarouselImg(),$("body").find(".carousel").carousel({interval:6e3,pause:"false"})}},data={renderer:"svg",loop:!1,autoplay:!1,rendererSettings:{scaleMode:"noScale",preserveAspectRatio:"xMidYMid slice"}},animInData={};$.extend(animInData,data,{container:document.getElementById("bmIn"),animationData:AnimationInData});var animOutData={};$.extend(animOutData,data,{container:document.getElementById("bmOut"),animationData:AnimationOutData});var animationIn=bodymovin.loadAnimation(animInData),animationOut=bodymovin.loadAnimation(animOutData);bodymovin.setQuality("low");var Transition=Barba.BaseTransition.extend({start:function(){Promise.all([this.newContainerLoading,this.AnimateOut()]).then(this.AnimateIn.bind(this))},AnimateOut:function(){return new Promise(function(n){$("#bmIn").hide(),$("#bmOut").show(),animationOut.goToAndPlay(0),animationOut.onComplete=function(){$(".LoaderTransition").css("display","table"),n(!0)}})},AnimateIn:function(){var n=this,e=$(this.newContainer);$(n.oldContainer).hide(),$(".LoaderTransition").hide(),$("#bmIn").show(),$("#bmOut").hide(),animationIn.goToAndPlay(0),e.css({visibility:"visible"}),animationIn.onComplete=function(){$("#bmIn").hide(),n.done()}}});