<?php
include ("../php/conexion.php");

$id= $_POST['id'];
$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contraseña'];

$query= "UPDATE registro SET Nombre='$Nombre', Correo='$Correo', Contraseña='$Contraseña' WHERE ID='$id'";
      
         
$ejecutar = mysqli_query($conn, $query);

if ($ejecutar) {
    echo '<script>
    alert("Usuarios Modificados");
    window.location= "../Usuarios.php"
    </script>';
    
} else{

    echo '<script>
    alert("Error Intentarlo de nuevo);
    window.location= "../Usuarios.php"
    </script>';
}

mysqli_close($conexion);

?>
