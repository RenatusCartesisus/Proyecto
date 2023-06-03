<?php

include "conexion.php";

$id = $_GET['id'];

mysqli_query($conexion, "DELETE FROM productos WHERE `productos`.`id` = ".$id);

header("location: ../crud.php");


?>