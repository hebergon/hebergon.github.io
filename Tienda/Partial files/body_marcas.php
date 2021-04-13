<?php
    $brand_shuffle = $marca->getData();
?>
<br>
<div class="section section-md">
    <div class="container">
        <div class="row align-items-center mt-5 mt-lg-6">
            <?php
                array_map(function($item){
            ?>
            <div class="col-md-6 col-lg-4 text-center">
                <div class="card cardd border-gray-300 mb-4">
                    <div class="card-body py-5">
                        <img src="<?php echo $item["imagen"] ?? "./assets/qstnmrk.jpg"; ?>" class="img-fluid image-sm" alt="Airbnb logo">
                        <p class="card-text py-4 mb-0"><?php echo $item["descripcion"] ?? "lorem ipsum dolor"; ?></p>
                    </div>
                </div>
            </div>
            <?php
                }, $brand_shuffle)
            ?>
        </div>
    </div>
</div>
<br>