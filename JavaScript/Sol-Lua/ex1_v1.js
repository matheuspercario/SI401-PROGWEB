function swap(id)
	{
		if (document.getElementById(id).getAttribute("src") === "image/sun.gif")
		{
			document.getElementById(id).setAttribute("src", "image/moon.jpeg");
		}
		else
		{
			document.getElementById(id).setAttribute("src", "image/sun.gif");
		}
	}
	
function show(id)
	{
		if (document.getElementById(id).getAttribute("src") === "image/sun.gif")
		{
			document.getElementById("show").innerHTML = "Sol";
		}
		else
		{
			document.getElementById("show").innerHTML = "Lua";
		}
	}