$( document ).ready(function() {
   	
	$('.deletebtn').click(function(e)
	{
		    if(confirm("Are you sure?"))
		    {
		       //deletes the list item
		    }
		    else
		    {
		        e.preventDefault();
		    }
	});
 });

	
