jQuery(document).ready(function($) {
   $('.repeat-group .add-field').click(function(event){
      event.preventDefault();
      $repeat_group = $(this).parent('.repeat-group');
      $this_form = $(this).parent('form');
      $new_field = $repeat_group.find('.repeat-fields').last().clone();
      $new_field.find('input,textarea,select').val('');
      $fields = $repeat_group.find('.repeat-fields-area');
      $new_field.appendTo($fields);
  });

   $('.repeat-group').on("click", '.remove-field', function(e){
      e.preventDefault();
      $repeat_fields = $(this).parent('.repeat-fields');
      $repeat_fields.remove();
  });

});