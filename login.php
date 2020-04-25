<?php
	include 'header.php';
	require_once 'utility.php';

	if(isset($_POST['submit']))	{
		$input_mail = $_POST['input_mail'];
		$input_pass = $_POST['input_pass'];
		$user = $_POST['user'];
		
		if(login($input_mail, $input_pass, $user)==true)	{
			$_SESSION['logged'] = true;
			header('Location: index.php');
		}
		else 	{
			echo "<script>alert('Wrong Email or Password')</script>";
		}
	}
?>

<div class='forms'>
	
	<h2>Please Login!</h2>
	<p class="form-text text-muted">Don't have an account. Register here</p>
	<p class="form-text text-muted"><a href="vendor_registration.php">Restaurant</a> | <a href="customer_registration.php">Customer</a></p>
	<br>
	
	<form id='login_form' method='POST' action='login.php'>
		<div class="form-group">
			<label class="radio-inline"><input type="radio" name="user" value='Customer' required>Customer</label> &nbsp;&nbsp;
			<label class="radio-inline"><input type="radio" name="user" value='Restaurant' required>Restaurant</label>
		</div>

		<div class="form-group">
			<label for="input_mail">Email address</label>
			<input name='input_mail' type="email" class="form-control" id="input_mail" aria-describedby="emailHelp" placeholder="Enter email" required>
		</div>
		<div class="form-group">
			<label for="input_pass">Password</label>
			<input name='input_pass' type="password" class="form-control" id="input_pass" placeholder="Password" required>
		</div>
		<button name='submit' type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<?php
	include 'footer.php';
?>