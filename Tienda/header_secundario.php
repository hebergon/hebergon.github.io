

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
    <?php
        
        //require functions
        require('functions.php');
        
    ?>

</head>
<body id="myPage">

    <!-- start #header -->
    <header id="header">
        <div class="strip text-right px-4 py-1 white">
            <p class="font-monse font-size-12 text-black-90 m-0">Blvd. Manuel Gómez Morín 8809, Bermúdez, Cd Juárez, Chih.</p>
            
        </div>
        <!-- Nav -->
        <nav class="navbar navbar-expand-lg navbar-light white">
          <div class="container">
              <a class="navbar-brand" href="#"><img id="logo" src="./assets/logoazul.png" style="width: 150px;"></a>
              
              <h1 class="font-shadows azul" id="somos" style="letter-spacing: 2px;"><strong>¡Somos Hidrodinámica!</strong></h1>
          </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark fondo-azul sticky-top" id="navegacion">
        <div class="container">
            <a class="navbar-brand font-monse" href="#myPage">Grupo Hidrodinámica</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav font-monse ml-auto font-size-18 text-white-50" id="navbarb">
                    <li>
                        <a class="nav-link rounded" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown fondo-azul">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" href="#">Productos </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="letter-spacing: 1px;">
                            <a class="dropdown-item" href="productos.php">Todos</a>
                            <a class="dropdown-item" href="productos2.php?val='bombas'">Bombas</a>
                            <a class="dropdown-item" href="productos2.php?val='piscina'">Piscinas</a>
                            <a class="dropdown-item" href="productos2.php?val='filtracion'">Filtración</a>
                            <a class="dropdown-item" href="productos2.php?val='incendios'">Contra Incendio</a>
                            <a class="dropdown-item" href="productos2.php?val='almacenamiento'">Almacenamiento</a>
                            <a class="dropdown-item" href="productos2.php?val='tratamiento'">Tratamiento</a>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link rounded" href="nosotros.php">Nosotros</a>
                    </li>
                    <li>
                        <a class="nav-link rounded" href="noticias.php">Noticias</a>
                    </li>
                    <li>
                        <a class="nav-link rounded" href="marcas.php">Marcas</a>
                    </li>
                    <li>
                        <a class="nav-link rounded" href="galeria.php">Galería</a>
                    </li>
                    <li>
                        <a class="nav-link rounded" style="color: white;" href="#">Ir a tienda</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
        <!-- !Nav -->

    </header>
    <!-- !start #header -->

    <!-- Start Main -->
    <main>