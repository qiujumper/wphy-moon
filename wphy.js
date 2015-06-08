jQuery(document).ready(function($){ 
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
    directionNav:false
  });   
});