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

  



  <!-- Modal  Modificar-->
<div class="modal fade" id="modificar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">MODIFICAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php 
  include('php/conexion.php');
  $query = "select * from publicaciones";
  $re = mysqli_query($conn,$query);
?>
<?php foreach($re as $row){ ?>
      <form action="php/modificarpu.php" method="post">
      <input type="text" name="id"  id="delete_id"  class="form-control" value="<?php echo $row['id'];?>">
      
     <!-- Nombre -->
     <div class="from-group">
              <label for="">Nombre</label>
              <input type="text" name="nombre"  class="form-control" value="<?php echo $row['nombre'];?>">
            </div>

            <!-- fecha -->
            <div class="from-group">
              <label for="">Apellido</label>
              <input type="text" name="apellido"  class="form-control" value="<?php echo $row['apellido'];?>">
            </div>
            <!-- Direccion-->
            <div class="from-group">
              <label for="">Numero</label>
              <input type="text" name="numero" class="form-control"value="<?php echo $row['numero'];?>">
            </div>

            <div class="from-group">
              <label for="">Correo</label>
              <input type="email" name="correo"  class="form-control" value="<?php echo $row['correo'];?>">
            </div>

            <div class="from-group">
              <label for="">Dirección</label>
              <input type="text" name="direccion"  class="form-control" value="<?php echo $row['direccion'];?>">
            </div>

            <div class="from-group">
              <label for="">Fecha</label>
              <input type="date" name="fecha"  class="form-control "value="<?php echo $row['fecha'];?>">
            </div>

              <div class="from-group">
              <label for="">Descripcion</label>
              <textarea class="form-control" name="descripcion"><?php echo $row['descripcion'];?></textarea>
              </div>

                  
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary"  data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
                  <button type="submit" class="btn btn-danger" name="Modificar"><i class="fas fa-user-times"></i></button>
                   </div>
       </form>
       <?php }?>      
    </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade " id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title-center" id="exampleModalLabel">ELIMINAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php 
  include('php/conexion.php');
  $query = "select * from publicaciones";
  $re = mysqli_query($conn,$query);
?>
<?php foreach($re as $row){ ?>
      <form action="php/eliminarpu.php" method="post">
      <input type="text" name="id"   class="form-control" id="delete_id" value="<?php echo $row['id'];?>">
      
     
      <div class="modal-footer">
      <button type="submit" class="btn btn-danger"><i class="fas fa-user-times"></i></button>
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
              <p class="lead text-muted">Revisa las ultimas Publicaciones</p>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modificar"><i class="fas fa-user-edit"></i></button>
      <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#eliminar"><i class="fas fa-user-times"></i></button>
            </div>
            <div class="col-lg-3 col-md-4 d-flex">
            </div>
        </div>
    </div>
<br>
<br>
 <div class="container ">
   
<?php 
  include('php/conexion.php');
  $query = "select * from publicaciones";
  $resultado = mysqli_query($conn,$query);
?>
      <?php foreach($resultado as $row){ ?>
        
       <div class="card mb-3" style="max-width: 900px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="../publicaciones/DB/img/<?php echo $row['imagen']; ?>"  width="500px" height="400px" class="card-img-top" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
           <h5 class="card-title">ID            →<strong><?php echo $row['id'];          ?></strong></h5>
           <h5 class="card-title">Nombre        →<strong><?php echo $row['nombre'];      ?></strong></h5>
           <h5 class="card-title">Apellido      →<strong><?php echo $row['apellido'];    ?></strong></h5>
           <h5 class="card-title">Numero        →<strong><?php echo $row['numero'];      ?></strong></h5>
           <h5 class="card-title">Correo        →<strong><?php echo $row['correo'];      ?></strong></h5>
           <h5 class="card-title">Direccion     →<strong><?php echo $row['direccion'];   ?></strong></h5>
           <h5 class="card-title">Fecha         →<strong><?php echo $row['fecha'];       ?></strong></h5>
           <h5 class="card-title">Descripcion   →<strong><?php echo $row['descripcion']; ?></strong></h5>

      </div>
    </div>
  </div>
</div>
<?php }?>           
          <!-- Button trigger modal -->
           <!-- Button trigger modal -->

      
      </div>
    </div>
   
  </div> 
</div>
</section>






  

  
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