<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>FoodShala</title>

    <!-- <link rel='stylesheet' type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <link rel='stylesheet' type="text/css" href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
	<link rel='stylesheet' type="text/css" href="assets/css/main.css">

</head>
<body>
    <div id='top'>
        <h1 onclick="window.location.href='index.php'">FoodShala</h1>
        <h5 onclick="window.location.href='cart.php'">Cart<span class="glyphicon glyphicon-shopping-cart"></span></h5>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="menu.php">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="add_item.php">Add Item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orders.php">Order Page</a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="account.php">
                        <?php 
                            if($_SESSION['logged']==true) {?> LogOut <?php }
                            else {?> Register/Login <?php } ?>
                    </a>
                </li>
            </ul>
        </div>
    </nav>