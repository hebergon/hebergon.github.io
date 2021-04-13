        <script>
            function openModal() {
                document.getElementById("view").style.display = "block";
                document.getElementById("navegacion").style.display = "none";
                document.onkeydown=function(e){
                    if(e.which == 27) {
                        closeModal();
                        return false;
                    }
                }
            }
            function closeModal() {
                document.getElementById("view").style.display = "none";
                document.getElementById("navegacion").style.display = "block";
            }
        </script>
        <section id="top">
            <div class="jumbotron text-center font-monse fondo-azul text-white rounded-0 mb-0">
                <h1 class="font-monse text-center">¡Mira nuestras mejores imágenes!</h1>
            </div> 
        </section>   
        <br>
        <section id="grid">
            <div class="container">
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="card">
                        <a href="#uno">
                            <img src="./assets/descargas/LIMPIEZA DE TANQUES.jpg" class="card-img-top hover-shadow" onclick="openModal();currentSlide(0)" style="cursor: pointer;">
                        </a>
                        <div class="card-body">              
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, odit consequuntur perspiciatis fugiat aliquid accusantium.</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="card">
                        <a href="#dos">
                            <img src="./assets/descargas/BOMBAS CENTRIFUGAS.jpg" class="card-img-top hover-shadow" onclick="openModal();currentSlide(1)" style="cursor: pointer;">
                        </a>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, odit consequuntur perspiciatis fugiat aliquid accusantium.</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="card">
                        <a href="#tres">
                            <img src="./assets/descargas/BOMBA SUMERGIBLE.png" class="card-img-top hover-shadow" onclick="openModal();currentSlide(1)" style="cursor: pointer;">
                        </a>
                      <div class="card-body">
                        
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, odit consequuntur perspiciatis fugiat aliquid accusantium.</p>
                        
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="card">
                        <a href="#cuatro">
                            <img src="./assets/descargas/FUENTE.png" class="card-img-top hover-shadow" onclick="openModal();currentSlide(1)" style="cursor: pointer;">
                        </a>
                      <div class="card-body">
                        
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, odit consequuntur perspiciatis fugiat aliquid accusantium.</p>
                        
                        
                      </div>
                    </div>
                  </div>
                  
                </div>
            </div>
        </section>
        <section id="view" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="owl-carousel owl-theme modal-content">
                <div class="item" data-hash="uno">
                    <img src="./assets/descargas/LIMPIEZA DE TANQUES.jpg" alt="banner1">
                </div>
                <div class="item" data-hash="dos">
                    <img src="./assets/descargas/BOMBAS CENTRIFUGAS.jpg"  alt="banner2">
                </div>
                <div class="item" data-hash="tres">
                    <img src="./assets/descargas/BOMBA SUMERGIBLE.png" alt="banner3">
                </div>
                <div class="item" data-hash="cuatro">
                    <img src="./assets/descargas/FUENTE.png" alt="banner3">
                </div>
            </div>
        </section>