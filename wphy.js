jQuery(document).ready(function($){ 

  //create square block
  make_square();
  
  $('.flexslider').flexslider({
    before:function(slider){
      $title = slider.find('.title');
      $title.addClass('bounceInDown');
      $content = slider.find('.content');
      $content.addClass('bounceInDown');
    },
    after:function(slider){
      $title = slider.find('.title');
      $title.removeClass('bounceInDown');
      $content = slider.find('.content');
      $content.removeClass('bounceInDown');
    }
  });
  $('.image-post-slider-wrapper').flexslider({
    animation: "slide",
    itemWidth: 300,
    itemMargin:30,
    minItems:2,
    maxItems:3,
    move:1,
    controlNav:true,
    directionNav:true,
    prevText:'',
    nextText:''
  }); 

  $('.image-block-slide').hover(function() {
    $(this).find('img').stop(true,false).addClass('pulse');
    $(this).find('.info').stop(true,false).show();
    $(this).find('.info').stop(true,false).find('.title').addClass('slideInUp');
    $(this).find('.info').stop(true,false).find('.content').addClass('slideInUp');
  }, function() {
    $(this).find('img').stop(true,false).removeClass('pulse');
    $(this).find('.info').stop(true,false).hide();
    $(this).find('.info').stop(true,false).find('.title').removeClass('slideInUp');
    $(this).find('.info').stop(true,false).find('.content').removeClass('slideInUp');
  });

  //global hover effect for image
  $('img').hover(function() {
    $(this).stop(true,false).addClass('pulse');
  }, function() {
    $(this).stop(true,false).removeClass('pulse');
  }); 

  $('.option-block').hover(function() {
    $(this).stop(true,false).addClass('bounce');
  }, function() {
    $(this).stop(true,false).removeClass('bounce');
  }); 

  
  $('.image-block .image').hover(function() {
    $(this).find('.img-title').stop(true,false).fadeIn();
  }, function() {
    $(this).find('.img-title').stop(true,false).fadeOut();
  }); 

  $('.scroll-top').click(function() {
    $("html, body").stop(true,false).animate({ scrollTop: 0 }, "slow");
    return false;
  });
});