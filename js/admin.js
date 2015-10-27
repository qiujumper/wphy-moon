jQuery(document).ready(function($) {
   $('.repeat-group .add-field').click(function(event){
      event.preventDefault();
      $repeat_group = $(this).closest('.repeat-group');
      $this_form = $(this).closest('form');
      $new_field = $repeat_group.find('.repeat-fields').last().clone();
      $new_field.find('textarea,select,input:not(:button)').val('');
      $new_field.find('img').attr('src','');
      $fields = $repeat_group.find('.repeat-fields-area');
      $new_field.appendTo($fields);
  });

   $('.repeat-group').on("click", '.remove-field', function(e){
      e.preventDefault();
      $repeat_fields = $(this).closest('.repeat-fields');console.log($repeat_fields.html());
      $repeat_fields.fadeOut(300, function() { $(this).remove(); });
  });

});