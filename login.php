<?php
if($_POST){
    if(  ($_POST['user']=="martin.lazzeri") && (  $_POST['password']=="@entity") ){
        echo "<script> alert ('Datos ingresados correctamente'); </script>";



        header("location:index.php");

    }else{
        echo "<script> alert ('Usuario o contraseña incorrecta'); </script>";
    }
    
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
    <title>Login</title>
</head>
<body>
    <div class="container"> 
        
    <div class="row"> 
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <form action="login.php" method="post">

                Usuario: <input class="form-control" type="text" name="user" id="">
                Contraseña: <input class="form-control" type="password" name="password" id="">
                <br/>

                <button class="btn btn-success" type="submit">Ingresar</button>


            </form>
            
       </div>       
       <div class="col-md-4">
            
        </div>
    </div>
       

        
    </div>
    
    
</body>
</html>