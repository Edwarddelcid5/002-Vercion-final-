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
  $query = "select * from registro";
  $resultado = mysqli_query($conn,$query);
?>





<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Administrador</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/style.css">



     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
       <a href="./Perfil.php">
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

  <!-- Modal Eliminar-->
<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <?php foreach($resultado as $row){ ?>
      <h4>Estas Seguro de Eliminar</h4>
      <form action="./usuarios/eliminaruser.php" method="POST">
   
      <input type="text" name="id"  id="delete_id"  class="form-control" value="<?php echo $row['ID'];?>">
      <button type="button" class="btn btn-secondary"  data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
      <button type="submit" class="btn btn-danger"><i class="fas fa-user-times"></i></button>
       </form>
       <?php }?>  
      </div>
      
    </div>
  </div>
</div>

  
<!-- Modal -->
<div class="modal fade" id="modificar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<?php 
  include('php/conexion.php');
  $query = "select * from registro";
  $r = mysqli_query($conn,$query);
?>
      <?php foreach($r as $row){ ?>
      <form action="./usuarios/modificaruser.php" method="post">
      <input type="text" name="id"  id="delete_id"class="form-control" value="<?php echo $row['ID'];?>">

      <div class="from-group">
              <label for="">Nombre</label>
              <input type="text" name="Nombre"  class="form-control" value="<?php echo $row['Nombre'];?>">
            </div>

            <div class="from-group">
              <label for="">Correo</label>
              <input type="text" name="Correo"  class="form-control" value="<?php echo $row['Correo'];?>">
            </div>


            <!-- fecha -->
            <div class="from-group">
              <label for="">Contraseña</label>
              <input type="password" name="Contraseña"  class="form-control" value="<?php echo $row['Contraseña'];?>">
            </div>
      
            <div class="modal-footer">

      <button type="button" class="btn btn-secondary"  data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
      <button type="submit" class="btn btn-warning"><i class="fas fa-user-times"></i></button>
      </div>
       </form>
       <?php }?>   
      </div>
    </div>
  </div>
</div>


<section class="home-section">  
<br>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
              <h1 class="font-weight-bold mb-0">Bienvenido Edward</h1>
              <p class="lead text-muted">Revisa lo Ultimos Usuarios</p>
          
              <button type="button" class="btn btn-success"data-toggle="modal" data-target="#insertar"><i class="fas fa-user-plus"></i></button>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modificar"><i class="fas fa-user-edit"></i></button>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminar"><i class="fas fa-user-times"></i></button>
            </div>
            
            <div class="col-lg-1 col-md-4 d-flex">
            </div>
        </div>
    </div>
<br>
<br>
 <div class="container ">
      <div class="card-columns">
      <?php foreach($resultado as $row){ ?>
        
  
  <div class="card">
    <img class="card-img-top" src="../img/profile.png" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">ID:    <strong><?php echo $row['ID'];  ?></strong></h5> 
      <p class="card-text">Name:  <strong><?php echo $row['Nombre'];  ?></p>
      <p class="card-text">Correo:  <strong><?php echo $row['Correo']; ?></p>
      <p class="card-text">Paswoard: <strong><?php echo $row['Contraseña'];?></p>
    </div>
  </div>
       
        <?php }?>   
      </div>
    </div>

  </div> 
</div>

</section>








  


<!-- Insertar -->
<div class="modal fade" id="insertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="./usuarios/insertaruser.php" method="post">
      <input type="hidden" name="id"  id="delete_id" ">

      <div class="from-group">
              <label for="">Nombre</label>
              <input type="text" name="Nombre"  class="form-control">
            </div>

            <div class="from-group">
              <label for="">Correo</label>
              <input type="text" name="Correo"  class="form-control">
            </div>


            <!-- fecha -->
            <div class="from-group">
              <label for="">Contraseña</label>
              <input type="password" name="Contraseña"  class="form-control">
            </div>
      
     
            <div class="modal-footer">
           <button type="button" class="btn btn-secondary"  data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
            <button type="submit" class="btn btn-success"><i class="fas fa-user-plus"></i></button>
            </div>
       </form>
      </div>
      
    </div>
  </div>
</div>

  
  <script src="./js/script.js"></script>
<!-- Optional JavaScript -->

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

        <!-- Optional JavaScript -->
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="../assets/js/"></script>
 
 
<!--====== Main js ======-->
<script src="../assets/js/main.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/a81368914c.js"></script>


</body>
</html>
