
<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
include("control/ConfigBD.php");
include("modelo/Usuario.php");
include("control/ControlUsuario.php");
include("control/ControlConexion.php");


try{
    $usu=$_POST["txtUsuario"];
    $con=$_POST["txtContrasena"];
    $bot=$_POST["btn"];
 
    if($bot=="Ingresar"){
    $objUsuario=new Usuario($usu,$con,"");
    $objCtrUsuario = new ControlUsuario($objUsuario);
        if($objCtrUsuario->validarIngreso()){
			$_SESSION['Usu'] =  $usu;
            $_SESSION['Con'] =  $con;
            header('Location: vista/menu.php');
           
        }
        else{
            echo "<script>alert('Usuario y/o contraseña incorrectos');</script>";
            
        }
    }
}
catch (Exception $objExp) {
    echo 'Se presentó una excepción: ',  $objExp->getMessage(), "\n";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 mr-1">
            <div class="col-md-4 formulario">
                <form action="index.php" method="POST">
                    <div class="form-group text-center">
                        <h3 class="text-light">Iniciar Sesión</h3>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" placeholder="Usuario" name="txtUsuario">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="password" class="form-control" placeholder="Contraseña" name="txtContrasena">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="submit" class="form-control btn btn-primary btn-block" name="btn" value="Ingresar">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackp  ath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>