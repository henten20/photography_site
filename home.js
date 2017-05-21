
//============ Sidebar JQuery ============//
$(document).ready(function(){
	
	$('#sidebarbutton').click(function(){
		$('#sidebar').toggleClass('visible');
	});


	$('#sidebarbutton').click(function(){
		$('#sidebarbutton').toggleClass('clicked');
	});
	
});
		
//=========== Homepage Slideshow ============//
var index = 0;
slideshow();

// Syntax for strict mode - "use strict"

function slideshow() 
{
	var x = document.getElementsByClassName("slide");
	for (var i = 0; i < x.length; i++) 
	{
		x[i].style.display = "none"; 
	}
			
	index++;
			
	if (index > x.length - 1) 
	{
		index = 0;
	} 
			
	x[index].style.display = "block"; 
	setTimeout(slideshow, 5000); 
}

function checkform()
{
	var i;
	var x = document.getElementsByClassName("tf");
	var y = document.getElementsByClassName("label");
	var length = x.length;
	var z = 0;
	
	for(i = 0; i < length ; i++)
	{
		if(x[i].value == "")
		{
			y[i].style.color = "red";
			y[i].style.fontStyle = "bold";
			z++;
		}
	}
	
	if(z > 0)
	{
		alert("Please fill out all fields before submitting.");
		return false;
	}
}

	
