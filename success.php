<?php
	include 'header.php';
	require_once 'utility.php';
	

	if(!isset($_SESSION['cust_id']))	{
		$message = ($_SESSION['logged']==true) ? "You must be logged as Customer" : "Please LogIn as Customer first" ;
		session_unset();
		echo "<script type='text/javascript'>
				alert('$message');
				window.location.href = 'login.php';
			</script>";
	}
	else {
		$cust_id = $_GET['cust_id'];
		$rest_id = $_GET['rest_id'];
		$food_id = $_GET['food_id'];
		if(addToOrder($cust_id, $rest_id, $food_id))	{
			
		}
		else {

		}
	}
?>
<div class="jumbotron text-center">
	<h1 class="display-3">Thank You!</h1>
	<p class="lead"><strong>Your order for <?= $_GET['food'] ?> from <?= $_GET['rest'] ?> is successfully placed.</strong> Our delivery partner will reach you soon.</p>
	<p class="lead">Please pay ₹<?= $_GET['cost'] ?> to the delivery person.</p>
	<hr>
	
	<p class="lead">
		<a class="btn btn-primary btn-sm" href="index.php" role="button">Continue to homepage</a>
	</p>
</div>
<?php
	include 'footer.php';
?>