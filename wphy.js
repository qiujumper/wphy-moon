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
    $(this).find('img').addClass('pulse');
    $(this).find('.info').stop(true,false).show();
    $(this).find('.info').find('.title').addClass('slideInUp');
    $(this).find('.info').find('.content').addClass('slideInUp');
  }, function() {
    $(this).find('img').removeClass('pulse');
    $(this).find('.info').stop(true,false).hide();
    $(this).find('.info').find('.title').removeClass('slideInUp');
    $(this).find('.info').find('.content').removeClass('slideInUp');
  });

  //global hover effect for image
  $('img').hover(function() {
    $(this).addClass('pulse');
  }, function() {
    $(this).removeClass('pulse');
  }); 

  $('.option-block').hover(function() {
    $(this).addClass('bounce');
  }, function() {
    $(this).removeClass('bounce');
  }); 

  
  $('.image-block .image').hover(function() {
    $(this).find('.img-title').fadeIn();
  }, function() {
    $(this).find('.img-title').fadeOut();
  }); 

  $('.scroll-top').click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });
});