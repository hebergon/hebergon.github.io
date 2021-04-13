<?php
    $product_shuffle = $product->getData();
?>

<section id="top">
            <div class="jumbotron text-center font-monse fondo-azul text-white rounded-0 mb-0">
                <h1 class="font-monse text-center">¡Conoce nuestros productos!</h1>
            </div> 
        </section>   
         <br>
        <div class="container">
            <div class="filters">
                <div class="ui-group">
                    <div class="button-group text-right font-lato js-radio-button-group" data-filter-group="categoria">
                        <button class="button is-checked" data-filter="*">Todo</button>
                        <button class="button" data-filter=".bombas">Bombas</button>
                        <button class="button" data-filter=".piscina">Piscinas</button>
                        <button class="button" data-filter=".filtracion">Filtración</button>
                        <button class="button" data-filter=".incendios">Contra Incendio</button>
                        <button class="button" data-filter=".almacenamiento">Almacenamiento</button>
                        <button class="button" data-filter=".tratamiento">Tratamiento</button>
                    </div>
                </div>
                <div class="ui-group">
                    <div class="button-group text-right font-lato js-radio-button-group" data-filter-group="marca">
                        
                        <button class="button is-checked" data-filter="*">Todo</button>
                        <button class="button" data-filter=".M1">Marca 1</button>
                        <button class="button" data-filter=".M2">Marca 2</button>
                    </div>
                </div>
            </div>
  
            <div class="grid font-lato">
                
                <div class="row">
                    <?php
                        array_map(function($item){
                    ?>
                    <div class="card mb-3 col-sm-6 col-12 py-2 grid-item <?php echo $item["categoria"] ?? "Categoria"; ?> M1">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?php echo $item["imagen"] ?? "./assets/qstnmrk.jpg"; ?>" class="card-img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?php echo $item["nombre"] ?? "Producto"; ?></h5>
                                    <p class="card-text"><?php echo $item["descripcion"] ?? "Descripcion" ?></p>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-warning font-size-12">Comprar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }, $product_shuffle)
                    ?>
                </div>
            </div>