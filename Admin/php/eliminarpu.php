<?php
include ("conexion.php");

$id=$_POST['id'];
$elimiar="DELETE FROM publicaciones WHERE id='$id'";

$resultadoEliminar =mysqli_query($conn,$elimiar);
if ($resultadoEliminar) {
    echo '<script>
              alert("Publicacion Eliminada");
              window.location= "../Publicaciones.php"
              </script>';
}else {
    echo '<script>
    alert("Ocurio un error");
    window.location= "../Publicaciones.php"
    </script>';
}

?>