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
});