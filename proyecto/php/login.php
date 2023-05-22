<?php

session_start();

include "conexion.php";

$correo = $_POST['email'];
$pass =$_POST['pass'];

$validarLogin = mysqli_query($conexion, "SELECT * FROM `usuarios` WHERE `correo`='$correo' and `pass`='$pass'");

if(mysqli_num_rows($validarLogin)>0){
   $usuario = mysqli_fetch_array($validarLogin);
       $_SESSION['usuario']=$usuario['usuario'];
       header("location:../index.php");
       exit();
   }
else{
    echo "
    <script>
    alert('Usuario o contraseña no existen');
    window.location.href='../loginInterface.php';
    </script>";
    exit();
}

?>