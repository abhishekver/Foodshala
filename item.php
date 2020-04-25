<?php
	include 'header.php';
	require_once 'utility.php';
	$item_id = $_GET['id'];
	$food_info = getFoodInfo($item_id);
	$res = getAllRes($item_id);
	
?>
<div class='container'>
	<div id='food_item'>
		<h2> <?= $food_info[1]; ?> </h2>
		<p class="lead"> <?= $food_info[2] ?> </p>
		<p> <?= $food_info[3] ?> </p>
		<br>

		<table class="table table-striped">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">Restaurant Name</th>
				<th scope="col">Price INR ( ₹ )</th>
				
				</tr>
			</thead>
			<tbody>
				<?php
					$count=1;
					foreach ($res as $r)	{
						echo '<tr>
							<th scope="row">'.$count++.'</th>
							<td>'.$r[2].'</td>
							<td>'.$r[3].'</td>
							<td><a href="success.php?food='.$food_info[1].'&rest='.$r[2].'&rest_id='.$r[1].'&cust_id='.$_SESSION['cust_id'].'&food_id='.$item_id.'&cost='.$r[3].'">Order</a></td>
							<td><a onclick="addToCart('.$item_id.', \''.$food_info[1].'\', '.$r[3].')">Add to cart</a></td>
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