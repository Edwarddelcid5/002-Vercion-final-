<?php
include('conexion.php');

if(isset($_POST['Modificar'])){

     $id=$_POST['id'];
     $nombre = $_POST['nombre'];
     $apellido=$_POST['apellido'];
     $numero=$_POST['numero'];
     $correo = $_POST['correo'];
     $direccion = $_POST['direccion'];
     $fecha = $_POST['fecha'];
     $descripcion = $_POST['descripcion'];

   
        $query = "UPDATE publicaciones SET nombre='$nombre', apellido='$apellido', numero='$numero',correo='$correo',direccion='$direccion',fecha='$fecha',descripcion='$descripcion' WHERE id='$id'";

         $resultado = mysqli_query($conn,$query);



         if($resultado){
          echo '<script>
          alert("Publicacion Creada con exito");
          window.location= "../Publicaciones.php"
          </script>';
     }else{
        echo '<script>
        alert("Ocurio un error");
        window.location= "../Publicaciones.php"
        </script>';
     }
   
}

?>