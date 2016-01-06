$(document).ready(function(){

$('.dlt_button').click(function () {
    //return confirm("Are you sure?");
  

    var result=confirm("Are you sure you want to delete this contact?");
    if (result) 
       return true;
    
    else
    	return false;
    
});
});
