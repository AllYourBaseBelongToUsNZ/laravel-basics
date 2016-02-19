$( document ).ready(function() {
   	
   	$('.deletebtn').click(function(e)
{
    if(confirm("Are you sure?"))
    {
        alert('navigate!');
    }
    else
    {
        e.preventDefault();
    }
});
});

	
