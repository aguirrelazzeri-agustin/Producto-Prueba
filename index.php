<?php include("conexion.php")  ?>
<?php include("Cabecera1.php")?>
<?php include("Cabecera.php")?>
<?php


if($_POST){
    print_r($_POST);
    $name= $_POST['name'];
    $description= $_POST['description'];
    $price= $_POST['price'];
$objconexion= new conexion();

$sql="INSERT INTO `productos` (`id`, `name`, `description`, `price`) VALUES (NULL, '$name', ' $description', '$price');";

$objconexion->ejecutar($sql);


}
if($_GET){
    //"DELETE FROM `productos` WHERE `productos`.`id` = 17"
    $id=$_GET['borrar'];
    $objconexion= new conexion();
    $sql="DELETE FROM `productos` WHERE `productos`.`id` =".$id;
    $objconexion->ejecutar($sql);
}

$objconexion= new conexion();
$resultado=$objconexion->consultar("SELECT * FROM `productos`");

//print_r($resultado);





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
                <th>Acciones </th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($resultado as $productos)   { ?>
         
         <tr>
             <td><?php echo $productos['id'];?></td>
             <td><?php echo $productos['name'];?></td>
             <td><?php echo $productos['description'];?></td>
             <td><?php echo $productos['price'];?></td>
             <td><a class="btn btn-danger" href="?borrar=<?php  echo $productos['id']; ?>" role="button"> Eliminar </a> </td>
         </tr>
         <?php } ?>
       
          
        </tbody>
    </table>
    
             </div>


           
        </div>
    </div>



</body>
</html>