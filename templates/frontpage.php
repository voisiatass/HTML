<?php include 'inc/header.php';?>



    <!-- Example row of columns -->
    <div class="row justify-content-md-center margin-bottom">
        <div class="col-md-10">
            <h2>Krizių centas</h2>
            <p>Jei jums reikia pagalbos, susisiekite su mumis!</p>
            <a class="btn btn-secondary" href="call.php" role="button">Skambinkite!</a>
        </div>
    </div>
    <div class="row justify-content-md-center margin-bottom">
        <div class="col-md-10">
            <h2 class="text-center">Jūsų vertinimai</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <h2>Komunikabilumas</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><?php echo $komun ?></p>
        </div>
        <div class="col-md-4">
            <h2>Ryšio Kokybė</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><?php echo $kokybe?></p>
        </div>
        <div class="col-md-4">
            <h2>Pagalba</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><?php echo $pagalba?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">

        </div>

        <div class="col-md-4">

        </div>
        <div class="col-md-4">

        </div>
    </div>

    <hr>



<?php include 'inc/footer.php';?>
