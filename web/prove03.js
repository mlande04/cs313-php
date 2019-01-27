// Add to Cart function
function addCart()
{
	document.getElementById("cartItem").value += document.querySelectorAll(".price");
}

// Total cost of items in cart
function total() 
{
	// get total added to cart
	var cart = addCart();
	
    var x = document.forms[0];
	var numItems = 0;
    var costItems = 0;
	var totalCost = 0;
	
    for (var i = 0; i < 10; i++) 
	{
		numItems = numItems + x.elements[i].value;
		costItems = numItems * x.elements[i].nextElementSibling;
    }
    document.getElementById("cart").innerHTML = totalCost;
}

// Validate country dropbox
function countryselect(countryOf)
{
	if(countryOf.value == "Default")
	{
		countryOf.focus();
		return false;
	}
	else
	{
		return true;
	}
}

// Select Yes or No Box for Email
function signUp(yesAdd,noAdd)
{
	x=0;

	if(yesAdd.checked) 
	{
		x++;
	} 
	if(noAdd.checked)
	{
		x++; 
	}
	if(x==0)
	{
		yesAdd.focus();
		return false;
	}
	else
	{
		window.location.reload()
		return true;
	}
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function payButton() 
{
    document.getElementById("myPay").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) 
{
  if (!event.target.matches('.dropBtn')) 
  {

    var dropdowns = document.getElementsByClassName("btnType");
    var i;
    for (i = 0; i < dropdowns.length; i++) 
	{
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) 
	  {
        openDropdown.classList.remove('show');
      }
    }
  }
}