<?php

include "php/conexion.php";

if(isset($_POST['nombre'])&&isset($_POST['precio'])&&isset($_POST['descripcion'])){
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$imagen = $_FILES['file'];
$img_loc = $imagen['tmp_name'];
$img_name = $imagen['name'];
// print_r($_FILES['file']['name']);
$destino = 'img/'.$img_name;
 move_uploaded_file($img_loc, $destino);
//  insertar los datos en la BD
mysqli_query($conexion, "INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `nombre_img`) VALUES (NULL, '$nombre', '$precio', '$descripcion', '$img_name');");
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/d3ae0c1cce.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

<div class="input-group mb-3 center-block col my-5 d-flex" style="justify-content: space-around;">

<div class="card text-start col-4" style="margin-bottom: 10px;">
  <!-- <img class="card-img-top" src="holder.js/100px180/" alt="Title"> -->
  <div class="card-body">
    <h4 class="card-title">Formulario</h4>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
        <div class="mb-3">
          <label for="" class="form-label">Seleccione el archivo</label>
          <input type="file" class="form-control" name="file" id="" placeholder="" aria-describedby="fileHelpId">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Nombre del producto</label>
          <input type="text"
            class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Precio</label>
          <input type="number"
            class="form-control" name="precio" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="mb-3">
          <label for="" class="form-label"></label>
          <textarea class="form-control" name="descripcion" id="" rows="3" placeholder="Descripción"></textarea>
        </div>

        <input type="submit" class="btn btn-outline-success" name="submit" value="Enviar">
`
    </form>
  </div>
</div>

<!-- <div class="table-responsive col-7">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Descripción</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>

            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">R1C1</td>
                <td>R1C2</td>
                <td>R1C3</td>
                <td>dkwkwopwkok</td>
                <td><a name="" id="" class="btn btn-primary" href="#" role="button"><i class="fa-sharp fa-solid fa-pen"></i></a></td>
                <td><a name="" id="" class="btn btn-danger" href="#" role="button"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
            </tr>
            <tr class="">
                <td scope="row">Item</td>
                <td>Item</td>
                <td>Item</td>
                <td>dwjij</td>
            </tr>
        </tbody>
    </table>
</div> -->
<div class="col-7">
  <table class="table table-hover">
  <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Imagen</th>
                <th scope="col">Descripción</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $imagen = mysqli_query($conexion, "SELECT * FROM `productos`");
        while($iterator = mysqli_fetch_array($imagen)){
        ?>
        <tr>
          <td><?php echo $iterator['id']; ?></td>
          <td><?php echo $iterator['nombre']; ?></td>
          <td>$<?php echo $iterator['precio']; ?></td>
          <td><img src="img/<?php echo $iterator['nombre_img'];  ?>" width="70px" alt=""></td>
          <td><?php echo $iterator['descripcion']; ?></td>
          <td><a name="" id="" class="btn btn-primary" href="#" role="button"><i class="fa-sharp fa-solid fa-pen"></i></a></td>
          <td><button name="" id="" onclick="return ventana(<?php echo $iterator['id']; ?>);" class="btn btn-danger" href="#" role="button"><i class="fa-sharp fa-solid fa-trash"></button></td>
        </tr>
        <?php } ?>

        </tbody>
  </table>

</div>

<div class="container">
  <button type="button" class="btn btn-primary">Regresar</button>
</div>

<!-- <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload"> -->
</div>

<script>
  function ventana(id){
  swal({
  title: "¿En serio?",
  text: "¡Una vez eliminado, no podrás recuperar el archivo!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location.href = "php/borrar.php?id="+id;
    swal("¡Se ha eliminado exitosamente!", {
      icon: "success",
    });
  } else {
    swal("¡Tu archivo está a salvo!");
    }
  });
return false;
}
</script>
 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>