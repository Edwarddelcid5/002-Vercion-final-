<?php
session_start();

if (isset($_SESSION['usuario'])) {

} 
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar sesion</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    


    
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

    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">

          
            <form action="php/Validar.php" method="POST"   class="sign-in-form">
              <div class="logo">
                <img src="./img/perro.png" alt="easyclass" />
                <h4>MASCOT</h4>
              </div>

            
              <div class="heading">
                <h2>Bienvenido</h2>
                <h6>No tienes cuenta aun?</h6>
                <a href="#" class="toggle">Registrate</a>
           
              </div>

              

              <div class="actual-form" >
                <div class="input-wrap">
                  <input
                    type="email"
                    name="Correo"
                    minlength="4"
                    class="input-field"
                    required
                  />
                  <label>Correo</label>
                </div>

                <div class="input-wrap">
                  <input

                  name="Contraseña"
                    type="password"
                   
                    minlength="3"
                    class="input-field"
                  
                    required
                  />
                  <label>Contraseña</label>
                </div>

                <button type="submit" class="sign-btn"><i class="fas fa-door-open"></i>             Iniciar Sesion</button>


              </div>
              <div class="heading">
                <h6>No quires iniciar Sesion?</h6>
                <a href="./index.php" class="toggle"><br><i class="lni lni-home"></i> Regresar a Pagina principal</a>
           
              </div>

            </form>

            <form action="php/Insertar.php" method="POST"  autocomplete="off" class="sign-up-form">

              <div class="logo">
              <img src="./img/perro.png" alt="easyclass" />
                <h4>MASCOT</h4>
              </div>

              <div class="heading">
                <h2>Registrate</h2>
                <h6>Ya estas registriado?</h6>
                <a href="#" class="toggle">Iniciar sesion</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    name="Nombre"
                    minlength="4"
                    class="input-field"
                    required
                  />
                  <label>Nombre</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    name="Correo"
                    class="input-field"
                   
                    required
                  />
                  <label>Correo</label>
                </div>
               
                <div class="input-wrap">
                  
                  <input
                  name="Contraseña"
                    type="password"
                    minlength="4"
                    class="input-field"
                
                    required
                  />
                  <label>Contraseña</label>
                </div>

                <button type="submit" class="sign-btn"><i class="fas fa-address-card"></i>               Registrate</button>


                
              </div>
              
          </div>
          </form>


          <div class="carousel">
            <div class="images-wrapper">
              <img src="./img/0.jpg" class="image img-1 show" alt="" />
              <img src="./img/1.jpg" class="image img-2" alt="" />
              <img src="./img/perro_0.jpg" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Adopta le salvara la vida</h2>
                  <h2>Las mascotas son lo mejor</h2>
                  <h2>Intentalo</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
    </main>

    

    <!-- Javascript file -->

    <script src="js/app.js"></script>
     <!--====== Jquery js ======-->

    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
 
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
   
  </body>
</html>
