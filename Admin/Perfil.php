<?php
session_start();


if (!isset($_SESSION['admin'])) {
   echo '
 <script>
  alert("PORFAVOR DEBES DE INICIAR SESIÖN ");
   window.location="../index.php"
  
</script> ';
   session_destroy();
  die();

} 
    

?> 



<?php 
  include('php/conexion.php');
  $query = "select * from administrador";
  $resultado = mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets/images/cuidado-de-mascotas.png" type="image/png">
    
    <title>Administrador</title>
  
    <link rel="stylesheet" href="./css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../publicaciones/style.css">
     <link rel="stylesheet" href="../assets/css/style.css">

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






  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">MASCOT</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Buscar">
         <span class="tooltip">Search</span>
      </li>
      <li>



        <a href="./Publicaciones.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Publicaciones</span>
        </a>
         <span class="tooltip">Publicaciones</span>
      </li>


      <li>
       <a href="./Usuarios.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Usuarios</span>
       </a>
       <span class="tooltip">Usuarios</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Perfil</span>
       </a>
       <span class="tooltip">Perfil</span>
     </li>

     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Acerca de</span>
       </a>
       <span class="tooltip">Acerca de</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="./img/Edu.jpg" alt="profileImg  ">
           <div class="name_job">
             <div class="name">Edward</div>
             <div class="job">Del Cid</div>
           </div>
         </div>
         <a href="../php/cerrarsesionadm.php"> <i class='bx bx-log-out' id="log_out" ></i></a>
        
     </li>
    </ul>
  </div>


<section class="home-section">  
<div class="container">
    <div class="contact-box">
      <div class="contact-info">
        <h3 class="title">Hola Adminstrador</h3>
        <div class="information-wrap">
          <div class="information">
          <img src="./img/Edu.jpg"   style=" border-radius: 45px;" alt="">  
          </div>
        </div>
      </div>


      
      <div class="contact-form">
      <?php foreach($resultado as $row){ ?>
        <h3 class="title">informacion</h3>
        <div class="row"> 
        
          <input name="Nombre" type="text" class="contact-input" value="<?php echo $row['Nombre'];?>"/>
        </div>

        <!-- datos  -->
        <div class="row">

          <input type="email" class="contact-input"name="Correo" value="<?php echo $row['Correo'];?>"/>
          
        </div>
        <div class="row">
        <input type="password" class="contact-input"name="contraseña" value="<?php echo $row['Contrasena'];?>"/>

      
        </div>
        
       
      
      </div>
      <?php }?>  
    </div>
  </div>
</div>
</div>

<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>



  </div>
</div>
</section>

  
  <script src="./js/script.js"></script>
<!-- Optional JavaScript -->
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
 
    <!--====== Main js ======-->
    <script src="../assets/js/main.js"></script>

</body>
</html>

