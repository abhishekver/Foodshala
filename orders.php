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

	$customers = getCustomers($_SESSION['rest_id']);
	function getOrders($cust_id)	{
		$orders = getResCusOrders($_SESSION['rest_id'], $cust_id);
		$list = "<ul>";
		foreach ($orders as $order)	{
			$list.=" <li>".$order[0]."</li> ";
		}
		$list .= "</ul>";
		return $list;
	}
?>
	<div class='container'>
		<div id='food_item'>
			<h2> <?= $_SESSION['name']; ?> </h2>
			<p class="lead"> <?= $food_info[2] ?> </p>
			<p> <?= $food_info[3] ?> </p>
			<br>

			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Customer Name</th>
						<th scope="col">Items Ordered</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$count=1;
						foreach ($customers as $cust)	{
							echo '<tr>
								<th scope="row">'.$count++.'</th>
								<td>'.$cust[1].'</td>
								<td>'.getOrders($cust[0]).'</td>
							</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
<?php
	include 'footer.php';
?>