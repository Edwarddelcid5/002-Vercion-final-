<?php
include ("../php/conexion.php");

$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contraseña'];

$query= "INSERT INTO registro (Nombre, Correo, Contraseña)
         VALUES ('$Nombre', '$Correo', '$Contraseña')";
         
$ejecutar = mysqli_query($conn, $query);

if ($ejecutar) {
    echo '<script>
    alert("Usuarios almacenados");
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