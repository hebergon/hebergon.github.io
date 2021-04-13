<?php
    $brand_shuffle = $marca->reversa();
?>

<div class="section section-md">
    <div class="jumbotron text-center font-monse fondo-azul text-white rounded-0 mb-0">
        <h1 class="font-monse text-center">¡!</h1>
    </div> 
    <br>
    <div class="container">
        <div class="row align-items-center justify-content-center text-center text-md-left">
            <div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
                <span class="counter counter-alternate display-1 text-dark d-block">+35</span> 
                <span class="h5 text-gray">Marcas</span>
            </div><div class="col-md-4 col-lg-5">
                <p class="lead">Trabajamos con gran parte de las marcas más reconocidas en el sector, garantizando así que siempre obtengas la mejor calidad en cualquier producto que adquieras con nosotros.</p>
            </div>
        </div>
        <br>
        <div class="row mt-4 mt-lg-6" id="marcas">
            
            <div class="owl-carousel owl-theme">
                <?php
                    array_map(function($item){
                ?>
                <div class="item">
                    <img src="<?php echo $item["imagen"] ?? "./assets/qstnmrk.jpg"; ?>" style="width: 92.8px; height: auto; margin-right: 5px;" alt="banner1">
                </div>
                <?php
                    }, $brand_shuffle)
                ?>
            </div>

            
        </div>
    </div>
</div>
