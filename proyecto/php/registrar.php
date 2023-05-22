<?php
include "conexion.php";

$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];


$sql = "INSERT INTO `usuarios` (`id`, `correo`, `nombre`, `usuario`, `pass`) VALUES (NULL, '$correo', '$nombre', '$usuario', '$pass');";

//Verificar que el correo no se repita en la base de datos

$verificarCorreo = mysqli_query($conexion, "SELECT * FROM `usuarios` WHERE `correo`='$correo'");

if(mysqli_num_rows($verificarCorreo)>0){
    echo 
    // "<script>
    //  alert('Ese correo ya existe wey.');
    //  window.location.href='../loginInterface.php';
    //  </script>";
    "<script>
    alert('Ese correo ya existe wey.');
    </script>";
    exit();//Termina el script actual
}

$verificarUsuario = mysqli_query($conexion, "SELECT * FROM `usuarios` WHERE `usuario`='$usuario'");

if(mysqli_num_rows($verificarUsuario)>0){
    echo "
    <script>
    alert('Ese wey ya existe.');
    window.location.href='../loginInterface.php';
    </script>";
    exit();//Termina el script actual
}

$query = mysqli_query($conexion ,$sql);

if($query){
   header("location: ../loginInterface.php");
}
else{
    echo "
    <script>
    alert('Inutil');
    </script>";
}

mysqli_close($conexion);


?>