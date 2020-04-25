<?php
	include 'header.php';
	require_once 'utility.php';
	
	if(!isset($_SESSION['rest_id']))	{
		
		$message = ($_SESSION['logged']==true) ? "You must be logged as Restaurant" : "Please LogIn as Restaurant first" ;
		session_unset();
		echo "<script type='text/javascript'>
				alert('$message');
				window.location.href = 'login.php';
			</script>";
	}

	if(isset($_POST['submit']))	{
		$item_name = $_POST['item_name'];
		$price = $_POST['price'];
		$item_pref = $_POST['item_pref'];
		$desc = $_POST['desc'];
		
		if(insert_Menu($item_name, $item_pref, $price, $desc))	{

		}
		else 	{

		}
	}
?>

<div class='forms'>
	
	<h3>Add a new delicious item to your Menu!</h3>
	<br><br>
	
	<form id='login_form' method='POST' action='add_item.php'>
		<div class="form-group">
			<label for="item_name">Item Name</label>
			<input name='item_name' type="text" class="form-control" id="item_name"  placeholder="Enter name of your dish" required>
		</div>
		<div class="form-group">
			<label for="price">Item Price</label>
			<input name='price' type="number" class="form-control" id="price" placeholder="Price of the item" required>
		</div>
		<div class="form-group">
			<label for="desc">Item Description</label>
			<input name='desc' type="textarea" class="form-control" id="desc" placeholder="Description of the item" required>
		</div>
		
		<div class="form-group row">
			<label class="col-sm-3 col-form-label" for="item_pref">Preference</label>
			<div class="col-sm-9">
				<select name="item_pref" class="col-sm-9" id="item_pref">
					<option selected value="Veg">Veg</option>
					<option value="Non Veg">Non Veg</option>
				</select>
			</div>
		</div>
		
		<button name='submit' type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

<?php
	include 'footer.php';
?>