<?php
include ("../php/conexion.php");

$id=$_POST['id'];
$elimiar="DELETE FROM registro WHERE ID='$id'";

$resultadoEliminar =mysqli_query($conn,$elimiar);
if ($resultadoEliminar) {
    echo '<script>
              alert(" Usuario Eliminado");
              window.location= "../Usuarios.php"
              </script>';

             
}else {
    echo '<script>
    alert("Ocurio un error");
    window.location= "../Usuarios.php"
    </script>';
}

?>