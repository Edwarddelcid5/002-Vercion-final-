<?php
session_start();

if (isset($_SESSION['admin'])) {

} 
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!--====== Title ======-->
    <title>Pagina Mascotas</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/cuidado-de-mascotas.png" type="image/png">

    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
        
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- JavaScript Bundle with Popper -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>



    
</head>

<body>
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <h5 class="navbar-brand">
                                <img src="./img/perro.png">
                            MASCOT</h5>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home"></i>Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features"> Menu </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">Acerca de</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="./publicaciones/Index.php">Publicaciones</a>
                                    </li>
                            
                                    <li class="nav-item">
                                        <a class="page-scroll" href="">Contacto</a>
                                    </li> 
                                </ul>
                               <!-- Button trigger modal -->
                                    <button type="button" class="main-btn" data-toggle="modal" data-target="#exampleModal">
                                    Admin
                                    </button>
                            </div> <!-- navbar collapse -->
                          
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/banner-bg.svg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Pagina de informacion sobre el cuidado y adpcion de Mascotas</h3>
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">MASCOT</h2>
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Deseas saber mas informacion? Sigue deslisando </p>
            
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                            <img src="./img/kisspng-pet-sitting-dog-cat-beechwood-veterinary-clinic-pet-dogs-and-cats-5a6894d23996e7.7920605615168032822359.png" alt="hero">
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>
    
    <!--====== HEADER PART ENDS ======-->


<!-- Modal  ADMIN-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Administrador</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="php/admin.php" method="POST"   class="sign-in-form">
        <div class="modal-body">
          <!-- Nombre -->
          <div class="from-group">
            <label for="">Usuario</label>
            <input type="text" name="Nombre" class="form-control">
          </div>
          <!-- Nombre -->
          <div class="from-group">
            <label for="">contraseña</label>
            <input type="password" name="Contraseña" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          <button type="submit" class="btn btn-primary">login</button>
        </div>
        </form>
      </div>
    </div>
  </div>

    
   
    
    <!--====== SERVICES PART START ======-->
    
    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Que estas buscando, <span> en el siguiente aparatado te mostramos difetentes categorias</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="./View/img/perrro.jpg" alt="shape">
                    
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Perros</a></h4>
                            <a class="more" href="./View/Perros.html">Ver mas <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
             
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="./View/img/gato.jpg" alt="shape">
                          
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Gatos</a></h4>
                            <a class="more" href="./View/gatos.html">Ver mas <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="./View/img/avez.jpg" alt="shape">
          
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Aves</a></h4>
                            <a class="more" href="./View/aves.html">Ver mas <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
        
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== SERVICES PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->
    
    <section id="about" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">La página está conformada por varias tecnologías</h3>
                        </div> <!-- section title -->
                        <p class="text"> En estas tecnologías destaca barias las cuales son: 
                                         Aplicación Web, Base de Datos, phpMyAdmin, GitHub, HTML 5, CSS3, PHP, JavaScript, XAMMP, Visual Studio Code.
                                         <br> <br>
                                        <p> Cada una de estas tecnplogias fue necesaria para el desarrollo, la metodología que se utiliza es cliente/servidor donde el usuario puede interactuar de manera que el administrador o servidor disponga para en sus permisos.</p>
                                        <br> <br>
                                         Las tecnologías del lado del servidor se implementaron con un servidor local para las pruebas y próximamente estará en línea para que todos los usuarios puedan interactuar 
                        </p>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/rompecabezas.svg" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="assets/images/about-shape-1.svg" alt="shape">
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->
    
    <section class="about-area pt-70">
        <div class="about-shape-2">
            <img src="assets/images/about-shape-2.svg" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Un estilo moderno <span> Pagina mas minimaslista y sensillas</span></h3>
                        </div> <!-- section title -->
                        <p class="text">La pagina se basa en sistema totalmente minimalista donde se trata de cárgala lo mínimo posible para que pueda correr en cualquier navegador y se pueda navegar en dispositivos móviles con la facilidad de uso para cualquier persona que pueda hacer uso de estas pagina</p>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/panel.svg" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <!--====== ABOUT PART START ======-->
    
    <section class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title"><span>Creacion de Publicaciones</span> Esta pagina te da la posibilidad de interactuar</h3>
                        </div> <!-- section title -->
                        <p class="text">Durante la pandemia del Covid-19 durante los años 2019, 2020 y 2021 el uso de internet se incrementó en gran medida al igual que el abandono de mascotas, por lo cual se hace uso de esta página para poder brindar un poco de información sobre los cuidados básicos de mascotas de igual manera que se podrán hacer publicaciones donde las personas podrán hacer una publicación con la información sobre alguna mascota que encuentre abandonada, para dar a conocer a mascotas abandonadas en el municipio de Palencia  </p>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/publicaciones.svg" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="assets/images/about-shape-1.svg" alt="shape">
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->

    
    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== VIDEO COUNTER PART START ======-->
    
    <section id="facts" class="video-counter pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img class="dots" src="assets/images/dots.svg" alt="dots">
                        <div class="video-wrapper">
                            <div class="video-image">
                                <img src="assets/images/video.svg" alt="video">
                            </div>
                            <div class="video-icon">
                                <a href="https://www.youtube.com/watch?v=zQ6CB4pZIYs" class="video-popup"><i class="lni-play"></i></a>
                            </div>
                        </div> <!-- video wrapper -->
                    </div> <!-- video content -->
                </div>
                <div class="col-lg-6">
                    <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="counter-content">
                            <div class="section-title">
                                <div class="line"></div>
                                <h3 class="title"> Mira el video</h3>
                            </div> <!-- section title -->
                            <p class="text">La Organización Mundial de la Salud (OMS) estima que el 75% de los perros del mundo son callejeros, unos 23 millones aproximadamente. </p>

                            <p class="text">Guatemala es uno de los países latinoamericanos que ha impulsado políticas de apoyo al bienestar de las mascotas, situación que influye considerablemente en la cantidad de perros callejeros con que cuenta</p>
                        </div> <!-- counter content -->
                        
                            </div>
                        </div> <!-- row -->
                    </div> <!-- counter wrapper -->
                </div>
            </div> <!-- row -->
        </div> 
        <br>
        <br><!-- container -->
    </section>
    
    <!--====== VIDEO COUNTER PART ENDS ======-->
    
  
    
   




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!--====== Plugins js ======-->
    <script src="assets/js/plugins.js"></script>
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    
    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>
    
    <!--====== Particles js ======-->
    <script src="assets/js/particles.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    
</body>

</html>
