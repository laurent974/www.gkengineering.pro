var AboutUsView=Barba.BaseView.extend({namespace:"aboutpage",onEnter:function(){console.log("About-Us is ready and attached to the DOM")},onEnterCompleted:function(){console.log("About-Us Transition has just finished")},onLeave:function(){console.log("About-Us Transition for leave")},onLeaveCompleted:function(){console.log("About-Us container has just been removed from the DOM")}}),app={transitionsInit:function(){Barba.Pjax.getTransition=function(){return Transition}},viewsInit:function(){HomeView.init(),ContactView.init(),AboutUsView.init(),StartProjectView.init(),JobsView.init(),TeamView.init(),ProjectsView.init(),ServicesView.init()},menuInit:function(){Menu.init()},homeInit:function(){ClientSlider.init(),SliderIndex.init()},setNoBarbaToLinks:function(){$(".wpml-ls-item a").addClass("no-barba")},init:function(){this.setNoBarbaToLinks(),this.viewsInit(),Barba.Pjax.start(),this.transitionsInit(),Barba.Prefetch.init(),prevReoladingSamePage.init(),this.menuInit(),Navbar.init()}};$(document).ready(function(){app.init()});var ClientSlider={params:{logos:".customer-logos"},handleSlick:function(){$("body").find(this.params.logos).slick({slidesToShow:6,slidesToScroll:1,autoplay:!0,autoplaySpeed:1e3,arrows:!1,dots:!1,pauseOnHover:!1,responsive:[{breakpoint:768,settings:{slidesToShow:4}},{breakpoint:520,settings:{slidesToShow:3}}]})},destroy:function(){$(".body").find(this.params.logos).slick("unslick")},init:function(){this.handleSlick()}},ContactView=Barba.BaseView.extend({namespace:"contactpage",onEnter:function(){gMap.init()},onEnterCompleted:function(){console.log("Contact Transition has just finished")},onLeave:function(){gMap.destroy()},onLeaveCompleted:function(){console.log("Contact container has just been removed from the DOM")}}),gMap={params:{map:"",styled_map:""},initGMap:function(){var e={center:new google.maps.LatLng(11.555195,104.894626),styles:[{featureType:"administrative",elementType:"labels.text.fill",stylers:[{color:"#322d2a"}]},{featureType:"administrative",elementType:"labels.text.stroke",stylers:[{color:"#ffffff"},{weight:"3"}]},{featureType:"landscape",elementType:"geometry",stylers:[{color:"#fafafa"}]},{featureType:"poi",elementType:"all",stylers:[{visibility:"simplified"}]},{featureType:"poi",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"poi.park",elementType:"all",stylers:[{visibility:"on"}]},{featureType:"poi.park",elementType:"geometry.fill",stylers:[{saturation:"0"},{lightness:"50"},{gamma:"1.00"}]},{featureType:"poi.park",elementType:"labels.text.fill",stylers:[{color:"#322d2a"},{lightness:"50"},{gamma:"1"}]},{featureType:"road",elementType:"labels.text.fill",stylers:[{color:"#322d2a"}]},{featureType:"road",elementType:"labels.text.stroke",stylers:[{visibility:"on"},{color:"#ffffff"},{weight:"3"}]},{featureType:"road",elementType:"labels.icon",stylers:[{visibility:"on"},{saturation:"-100"}]},{featureType:"road.highway",elementType:"geometry.fill",stylers:[{color:"#f58220"}]},{featureType:"road.highway",elementType:"labels.text.fill",stylers:[{color:"#322d2a"}]},{featureType:"road.highway",elementType:"labels.text.stroke",stylers:[{visibility:"on"},{color:"#ffffff"},{weight:"3"}]},{featureType:"road.arterial",elementType:"geometry.fill",stylers:[{color:"#322d2a"},{lightness:"40"},{gamma:"1.00"}]},{featureType:"road.local",elementType:"geometry.fill",stylers:[{color:"#ece5e3"},{lightness:"-10"},{gamma:"1"}]},{featureType:"transit",elementType:"all",stylers:[{visibility:"off"}]},{featureType:"transit.station",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"transit.station.airport",elementType:"geometry.fill",stylers:[{visibility:"simplified"}]},{featureType:"water",elementType:"geometry.fill",stylers:[{color:"#ece5e3"},{visibility:"on"}]}],zoom:14,gestureHandling:"cooperative"},t=$('<div style="width: 100%; height: 100%"></div>').appendTo("#map-canvas"),n=new google.maps.Map(t[0],e);new google.maps.Marker({position:new google.maps.LatLng(11.555195,104.894626),map:n,title:"GK Engineering",icon:"wp-content/themes/gk-engineering/assets/img/marker-gmap.png"})},destroy:function(){$("#map-canvas div").remove()},init:function(){this.initGMap()}},HomeView=Barba.BaseView.extend({namespace:"homepage",onEnter:function(){app.homeInit()},onEnterCompleted:function(){console.log("Homepage Transition has just finished")},onLeave:function(){console.log("Homepage Transition for leave")},onLeaveCompleted:function(){SliderIndex.destroyEvents(),ClientSlider.destroy()}}),JobsAccordion={params:{collapseDiv:".collapse",materialIcons:".material-icons",plusContent:"&#xE145;",removeContent:"&#xE15B;"},handleScrollTo:function(){$("body").find(".Button-Apply").on("click",function(e){var t=$("body").find("."+$(this).data("anchor"));t.length&&(e.preventDefault(),$("html, body").stop().animate({scrollTop:t.offset().top-80},800))})},init:function(){var e=this;this.handleScrollTo(),$("body").find(this.params.collapseDiv).on("shown.bs.collapse",function(){$(this).parent().find(e.params.materialIcons).toggle()}).on("hidden.bs.collapse",function(){$(this).parent().find(e.params.materialIcons).toggle()})}},JobsView=Barba.BaseView.extend({namespace:"jobspage",onEnter:function(){console.log("Jobs dom attached"),JobsAccordion.init()},onEnterCompleted:function(){console.log("Jobs Transition has just finished")},onLeave:function(){console.log("Jobs Transition out start")},onLeaveCompleted:function(){console.log("Contact container has just been removed from the DOM")}}),Menu={switchActive:function(e,t){"click"===t.type&&($(".menu-item").removeClass("active"),$(e).parent().addClass("active"))},init:function(){var e=this;Barba.Dispatcher.on("linkClicked",function(t,n){e.switchActive(t,n)})}},Navbar={params:{flagAdd:!0,elements:[".navbar",".navbar-inner",".navbar-brand"]},remove:function(){for(var e=this,t=0;t<this.params.elements.length;t++)$(e.params.elements[t]).removeClass("navbar-theme");this.params.flagAdd=!0},add:function(){var e=this;if(this.params.flagAdd){for(var t=0;t<this.params.elements.length;t++)$(e.params.elements[t]).addClass("navbar-theme");this.params.flagAdd=!1}},toggleFixedNavabar:function(){var e=this,t=window.pageYOffset;0<t?e.add():0==t&&e.remove()},handleScroll:function(){var e=this;window.onscroll=function(t){e.toggleFixedNavabar()}},init:function(){this.toggleFixedNavabar(),this.handleScroll()}},prevReoladingSamePage={links:document.querySelectorAll("a[href]"),preventClick:function(e){e.currentTarget.href===window.location.href&&(e.preventDefault(),e.stopPropagation())},handleEvent:function(){for(var e=this,t=0;t<this.links.length;t++)e.links[t].addEventListener("click",e.preventClick)},init:function(){this.handleEvent()}},ProjectLightbox={params:{selector:$("body").find(".swipebox")},destroy:function(){},init:function(){this.params.selector.swipebox()}},ProjectsFilter={params:{$grid:"",$itemSelector:".ProjectsBox-item",$filtersBar:"",$FiltersBarMobile:"",$gridActivated:""},initParams:function(){this.params.$grid=$("body").find(".Projects"),this.params.$filtersBar=$("body").find(".Projects-FilterList"),this.params.$filtersBarMobile=$("body").find("#Projects-FilterSelect")},handleFilterButton:function(){var e=this;this.params.$filtersBar.on("click",".js-buttonFilter",function(){var t=$(this),n=t.attr("data-filter");$("body").find(".js-buttonFilter").closest("li").removeClass("active"),t.closest("li").addClass("active"),e.params.$gridActivated.isotope({filter:n})})},handleFilterButtonMobile:function(){this.params.$filtersBarMobile.on("change",function(){var e=$(this).find("option:selected").val();$("body").find('[data-filter="'+e+'"]').click()})},destroy:function(){this.params.$gridActivated.isotope("destroy"),this.params.$gridActivated=""},init:function(){var e=this;this.initParams(),this.params.$gridActivated=this.params.$grid.isotope({itemSelector:e.params.$itemSelector,layoutMode:"vertical"}),this.handleFilterButton(),this.handleFilterButtonMobile()}},ProjectsView=Barba.BaseView.extend({namespace:"projectspage",onEnter:function(){console.log("Projects is ready and attached to the DOM"),ProjectLightbox.init(),ProjectsFilter.init()},onEnterCompleted:function(){console.log("Projects Transition has just finished")},onLeave:function(){ProjectLightbox.destroy(),ProjectsFilter.destroy(),console.log("Projects Transition for leave")},onLeaveCompleted:function(){console.log("Projects container has just been removed from the DOM")}}),ServicesView=Barba.BaseView.extend({namespace:"servicepage",onEnter:function(){WhatWeDo.init()},onEnterCompleted:function(){console.log("Homepage Transition has just finished")},onLeave:function(){console.log("Homepage Transition for leave")},onLeaveCompleted:function(){}}),SliderIndex={params:{$carousel:$(".carousel"),$item:$(".carousel .item"),image:".carousel .item > img",windowHeight:""},onLoadInit:function(){var e=$("body").find(".carousel .item");e.removeClass("active"),e.eq(0).addClass("active"),e.addClass("full-screen")},loopCarouselImg:function(){var e,t;$("body").find(this.params.image).each(function(){e=$(this).attr("src"),t=$(this).attr("data-color"),$(this).parent().css({"background-image":"url("+e+")","background-color":t})})},handleSwipe:function(){$("body").find(".carousel").hammer().on("swipeleft swiperight",function(e){"swipeleft"==e.type?$(".carousel-control[data-slide=next]").trigger("click"):$(".carousel-control[data-slide=prev]").trigger("click")})},destroyEvents:function(){this.params.$carousel.unbind()},init:function(){this.params.windowHeight=$(window).height(),this.onLoadInit(),this.handleSwipe(),this.loopCarouselImg(),$("body").find(".carousel").carousel({interval:6e3,pause:"false"})}},StartProjectView=Barba.BaseView.extend({namespace:"startprojectpage",onEnter:function(){console.log("start project dom attached")},onEnterCompleted:function(){console.log("Start a project Transition has just finished")},onLeave:function(){console.log("start a project transition out start")},onLeaveCompleted:function(){console.log("Contact container has just been removed from the DOM")}}),TeamView=Barba.BaseView.extend({namespace:"teampage",onEnter:function(){console.log("The Team dom attached")},onEnterCompleted:function(){console.log("The Team Transition has just finished")},onLeave:function(){console.log("The Team transition out start")},onLeaveCompleted:function(){console.log("The Team container has just been removed from the DOM")}}),data={renderer:"svg",loop:!1,autoplay:!1,rendererSettings:{scaleMode:"noScale",preserveAspectRatio:"none",preserveAspectRatio:"xMidYMid slice"}},animInData={};$.extend(animInData,data,{container:document.getElementById("bmIn"),animationData:AnimationInData});var animOutData={};$.extend(animOutData,data,{container:document.getElementById("bmOut"),animationData:AnimationOutData});var animationIn=bodymovin.loadAnimation(animInData),animationOut=bodymovin.loadAnimation(animOutData);bodymovin.setQuality("low");var Transition=Barba.BaseTransition.extend({start:function(){Promise.all([this.newContainerLoading,this.AnimateOut()]).then(this.AnimateIn.bind(this))},AnimateOut:function(){return new Promise(function(e){$("#bmOut").show(),bodymovin.setDirection(1),animationOut.play(),animationOut.onComplete=function(){$(".LoaderTransition").css("display","table"),$("#bmOut").hide(),e(!0)}})},AnimateIn:function(){var e=this,t=$(this.newContainer);$(e.oldContainer).hide(),$(".LoaderTransition").hide(),$("#bmOut").show(),bodymovin.setDirection(-1),animationOut.play(),$("#menu-menu-1.nav").hasClass("in")&&$("button.navbar-toggle").click(),t.css({visibility:"visible"}),window.scrollTo(0,0),animationOut.onComplete=function(){$("#bmOut").hide(),e.done()}}}),WhatWeDo={params:{$menu:"",$button:""},initParams:function(){this.params.$menu=$("body").find(".WhatWeDo-MenuList"),this.params.$button=$("body").find(".WhatWeDo-MenuList").find(".Button")},init:function(){this.initParams(),this.params.$button.on("click",function(e){var t=$(this.getAttribute("data-anchor"));t.length&&(e.preventDefault(),$("html, body").stop().animate({scrollTop:t.offset().top-80},800))})}};