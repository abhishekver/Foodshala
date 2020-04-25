function openItem(item_id)	{
	window.location.href='item.php?id='+item_id;
}

function getCartValue()	{
	var count = sessionStorage.getItem('Cart');
	var amount = 0;
	for(var i=0; i<count; i++)	{
		var arr = sessionStorage.getItem('Cart'+i);
		amount += arr[2];
	}
	return amount;
}

function getCartItems()	{
	var count = sessionStorage.getItem('Cart');
	var items = [];
	for(var i=0; i<count; i++)	{
		var arr = sessionStorage.getItem('Cart'+i);
		items.push(arr);
	}
	return arr;
}

function addToCart(item_id, item_name, item_price)	{
	var n = [item_id, item_name, item_price];
	var i = sessionStorage.getItem('Count');
	if(i == null)
		i = 0;
	var key = 'Cart'+i;
	sessionStorage.setItem(key, n);
	sessionStorage.setItem('Count', ++i);
}

function showCart()	{
	var items = getCartItems();
	var amount = getCartValue();
	document.cookie="cart_items="+items;
	var cart = document.getElementById("cart");
	for(var i=0; i<items.length; i++)	{
		var item = document.createElement("h5");
		var name = document.createTextNode(items[i][1]);
		item.appendChild(name);
		cart.appendChild(item);
	}
	var bill_am = document.createElement("h4");
	var bill_title = document.createTextNode("Your total cart value is "+amount);
	bill_am.appendChild(bill_title);
	cart.appendChild();
}