<?php
    include 'header.php';
    require_once 'utility.php';
    $menu = getAllMenu();
	
?>
<div class="container">
    <div class="row ">
        <div class="col-lg-10 mx-auto col-12 text-center mb-3">
            <h1 class="mt-0 text-primary">Our Menu</h1>
            <p class="lead">Begin with a selection from our award winning beverage menu or choose a wine from our extensive wine list. Our wine list features over 100 different vintages and has received the chamber of commerce award of excellence.</p>
        </div>

        <div class="col-12 mt-4">
            <h3 class="text-center">Serve Thy Hunger!!</h3>
            <hr class="accent my-5">
        </div>

        <div class="card-columns">
            <?php
                foreach ($menu as $m)   { 
                    // echo '<div class="panel-body"
                    //         <div class="col-sm-5 col-md-5">
                    //             <div class="thumbnail">
                    //                 <h4></h4>'.$m[2].'</h4><br>
                    //                 <h3>'.$m[1].'</h3><br>
                    //                 <p>'.$m[3].'</p>
                    //             </div>
                    //                 <button class="btn btn-success" id="'.$m[0].'" onClick="openItem(this.id)">Check Item</button>
                    //         </div>
                    //     </div>';
                    echo '<div class="menu-box card card-body" onClick="openItem(this.id)" id="'.$m[0].'">
                        <span class="float-right font-weight-bold">'.$m[2].'</span>
                        <h6 class="text-truncate">'.$m[1].'</h6>
                        <p class="small">'.$m[3].'</p>
                        <button class="btn-centre btn btn-success" id="'.$m[0].'" onClick="openItem(this.id)">Check Item</button>
                        </div>';
                }
            ?>
        </div>
    </div>
</div>
<?php
	include 'footer.php';
?>