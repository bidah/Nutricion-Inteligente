jQuery(document).ready(function($) {
    $.localScroll({offset: -140});
    $("body").fitVids();
    $(window).resize(function() {
        var height = $(window).height();
        var width = $(window).width();
        $('.swiper-container, .swiper-slide').height(height);
        $('.swiper-container, .swiper-slide').width(width);
        $('div.device').height($(window).height()-260);;
        $('div.device .vertical').height($(window).height()-260);;
    })
    
    $("li.request a").click(function() {
        $(".modal-window.request").toggleClass("on");
    });
    
    $("div.team-member").click(function() {
      $(this).parent().find(".modal-window").toggleClass("on");
    });
    
    $("a.close").click(function(){
	    $(this).parent().toggleClass("on");
	  });
	  $(".modal-header").click(function(){
	    $(this).parent().toggleClass("on");
	  });
    $(window).trigger('resize');
    $('div.jumbo').waypoint({
        handler: function(direction) {
            $(".header.sticky").toggleClass("on");
        }
    });
    $('#waypoint').waypoint(function(direction) {
        $("ul.page-navigation").toggleClass("on");
        }, {
  offset: '35%'
  });
    var mySwiper = $('.swiper-container').swiper({
      mode:'horizontal',
      autoplay: 5000,
      loop: false,
      pagination: '.pagination',
      paginationClickable: true,
      loop: true
    });
    $('.arrow-left').on('click', function(e){
      e.preventDefault()
      mySwiper.swipePrev()
    })
    $('.arrow-right').on('click', function(e){
      e.preventDefault()
      mySwiper.swipeNext()
    })
    
});