<?php
	include 'header.php';
	require_once 'utility.php';

	if(isset($_POST['submit']))	{
		$cust_name = $_POST['input_name'];
		$cust_phone = $_POST['input_phone'];
		$cust_email = $_POST['input_mail'];
		$cust_addr = $_POST['input_addr'];
		$cust_pass = $_POST['input_pass'];
		$cust_pref = $_POST['input_pref'];
		if(insert_Customer($cust_name, $cust_email, $cust_phone, $cust_addr, $cust_pref, $cust_pass))	{
			echo "<script>alert('You have registered successfully.');</script>";
		}
		else {
			echo "<script>alert('Some problem occurred on our end.');</script>";
		}
	}
?>

<form class='forms' method='POST' action='customer_registration.php'>
	<h3>Customer Registration</h3>
	<small class="form-text text-muted">You're going to be amazed by the food & services. </small>
	<small class="form-text text-muted"><a href="vendor_registration.php">Restaurant</a> | <a href="customer_registration.php">Customer</a></small>
	<small class="form-text text-muted">Already have an account? <a href="login.php"> Log In </a>here</small>
	<br>

	<div class="form-group row">
		<label for="input_name" class="col-sm-3 col-form-label">Name</label>
		<div class="col-sm-9">
			<input name='input_name' type="text" class="form-control" id="input_name" placeholder="Name" required>
		</div>
	</div>

	<div class="form-group row">
		<label for="input_phone" class="col-sm-3 col-form-label">Phone</label>
		<div class="col-sm-9">
			<input name='input_phone' type="phone" class="form-control" id="input_phone" placeholder="Phone Number" required>
		</div>
	</div>

	<div class="form-group row">
		<label for="input_mail" class="col-sm-3 col-form-label">Email</label>
		<div class="col-sm-9">
			<input name='input_mail' type="email" class="form-control" id="input_mail" placeholder="Email" required>
		</div>
	</div>

	<div class="form-group row">
		<label for="input_addr" class="col-sm-3 col-form-label">Address</label>
		<div class="col-sm-9">
			<input name='input_addr' type="text" class="form-control" id="input_addr" placeholder="Address" required>
		</div>
	</div>
		
	<div class="form-group row">
		<label for="input_pass" class="col-sm-3 col-form-label">Password</label>
		<div class="col-sm-9">
		<input name='input_pass' type="password" class="form-control" id="input_pass" placeholder="Password" required>
		</div>
	</div>
	
	<div class="form-group row">
		<label class="col-sm-3 col-form-label" for="input_pref">Preference</label>
		<div class="col-sm-9">
			<select name='input_pref' class="col-sm-9" id="input_pref">
				<option selected value="Veg">Veg</option>
				<option value="Non Veg">Non Veg</option>
			</select>
		</div>
	</div>
	<small class="form-text text-muted">We don't share your information with anyone, but the restaurants you place your orders to.</small><br>
	<br>

	<div class="form-group row">
		<div class="col-sm-10">
		<button name='submit' type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>

<?php
	include 'footer.php';
?>