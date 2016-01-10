$(document).ready(function(){
$('.dlt_button').bind('click',function (e) {
   var result=confirm("Are you sure you want to delete this contact?");
    if (!result) {
    	e.preventDefault();
    }
       
    });
$( "#searchWord" ).keyup(function() {
  var searchWordValue=$('#searchWord').val();
  
 $.ajax({

   type:'POST',
   data:{searchWordValue : searchWordValue},
   url:"<?php echo site_url('phonebook_con/suggest'); ?>",
   success: function(result){
      $('#result').html(result);
   }
 });
});
});
