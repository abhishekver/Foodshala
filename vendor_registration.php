<?php
	include 'header.php';
	require_once 'utility.php';

	if(isset($_POST['submit']))	{
		$rest_name = $_POST['rest_name'];
		$rest_mail = $_POST['rest_mail'];
		$rest_pass = $_POST['rest_pass'];
		
		if(insert_Restaurant($rest_name, $rest_mail, $rest_pass))	{
			echo "<script>alert('You have registered successfully.');</script>";
		}
		else {
			echo "<script>alert('Some problem occurred on our end.');</script>";
		}
	}
?>

<form class='forms' method='POST' action='vendor_registration.php'>
	<h3>Restaurant Registration</h3>
	<small class="form-text text-muted">Register with us and increase your neighbourhood. </small>
	<small class="form-text text-muted"><a href="vendor_registration.php">Restaurant</a> | <a href="customer_registration.php">Customer</a></small>
	<small class="form-text text-muted">Already have an account? <a href="login.php"> Log In </a>here</small>
	<br>
	<div class="form-group">
		<label for="rest_name">Restaurant Name</label>
		<input name='rest_name' type="text" class="form-control" id="rest_name" placeholder="Restaurant Name" required>
	</div>
	<div class="form-group">
		<label for="rest_mail">Restaurant Email</label>
		<input name='rest_mail', type="email" class="form-control" id="rest_mail" aria-describedby="emailHelp" placeholder="Enter email" required>
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div>
	<div class="form-group">
		<label for="rest_pass">Password</label>
		<input name='rest_pass' type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
	</div>
	<div class="form-group form-check">
		<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
		<label class="form-check-label" for="exampleCheck1">I agree to all the <a href="#">Terms & conditions</a></label>
	</div>
	<button type="submit" name='submit' class="btn btn-primary">Submit</button>
</form>

<?php
	include 'footer.php';
?>
