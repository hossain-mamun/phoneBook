$(document).ready(function(){

$('.dlt_button').bind('click',function (e) {
   var result=confirm("Are you sure you want to delete this contact?");
    if (!result) {
    	e.preventDefault();
    }
       
    });
});
