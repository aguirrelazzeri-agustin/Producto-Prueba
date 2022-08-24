<?php include("conexion.php")  ?>
<?php


if($_POST){
    print_r($_POST);
    $name= $_POST['name'];
$objConexion= new conexion();

$sql="INSERT INTO `productos` (`id`, `name`, `description`, `price`) VALUES (NULL, '$name', ' 8gb de ram 1tb ion', '2500');";
$objConexion->ejecutar($sql);


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1> BIENVENIDOS </h1>
    <div class="container"> 
        
        <div class="row"> 
            <div class="col-md-6">
                 <form action="index.php" method="post" enctype="multipart/form-data">
                 Nombre del producto: <input class="form-control" type="text" name="name" id="">
                 </br>
                 Descripcion: <input class="form-control" type="text" name="description" id="">
                 </br>
                 Precio: <input class="form-control" type="text" name="price" id="">
                </br>
                <button class="btn btn-info" type="submit"> Agregar Producto</button>
                </form>
    
            </div>


            <div class="col-md-6">
            <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Descripcion</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
         
            <tr>
                <td>1</td>
                <td>Helado de limon</td>
                <td>1/4</td>
                <td>550$</td>
                <td><a class="btn btn-danger" href="" role="button"> Eliminar </a> </td>
            </tr>
          
        </tbody>
    </table>
    
             </div>


           
        </div>
    </div>



</body>
</html>