<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f02565ffcc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/flatly/bootstrap.min.css">
    
    <link rel="stylesheet" href="../assets/css/menu.css">


    <title>Proyecto Final</title>
</head>
<body>
    
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="top-navbar">
            <!-- <div class="icono">
                <div></div>
                <div></div>
                <div></div>
            </div> -->
            <div class="top-menu">
                <div class="logo">Proyecto</div>
                <ul>
                    <li><a href="#"><i class="fas fa-search"></i></a></li>
                    <li><a href="#"><i class="fas fa-bell"></i></a></li>
                    <li><a href="#"><i class="fas fa-user"></i></a></li>
                </ul>
                
            </div>
        </div>

        <div class="sidebar">
            <ul>
                <li><a href=""class="active"  >
                    <span class="icon">
                        <i class="fas fa-user-circle"></i>
                    </span>
                    <span class="titulo">Clientes</span>
                </a></li>
                <li><a href="">
                    <span class="icon">
                        <i class="fas fa-user-circle"></i>
                    </span>
                    <span class="titulo">Empleados</span>
                </a></li>
                <li><a href="">
                    <span class="icon">
                        <i class="fas fa-user-circle"></i>
                    </span>
                    <span class="titulo">Productos</span>
                </a></li>
                <li><a href="">
                    <span class="icon">
                        <i class="fas fa-user-circle"></i>
                    </span>
                    <span class="titulo">Proveedores</span>
                </a></li>
                <li><a href="">
                    <span class="icon">
                        <i class="fas fa-user-circle"></i>
                    </span>
                    <span class="titulo">Consultas</span>
                </a></li>
            </ul>
        </div>

        <div class="main-container">
        <form action="Guardarcliente.php" method="POST">
                    <div class="form-group text-center">
                        <h3 class="text-black">Registrar Usiario</h3>
                    </div>
                    
                    <div class="form-group mx-sm-4">
                        <label for="exampleSelect1">Nombre Usuario</label>
                        <input type="text" class="form-control" placeholder="Nombre" name="txtNombre">
                    </div>
                    
                    <div class="form-group mx-sm-4">
                    <label for="exampleSelect1">Tipo de Persona</label>
                    <select class="form-control" id="exampleSelect1">
                        <option>Natural</option>
                        <option>Juridica</option>
                    </select>
                    </div>
                    <div class="form-group mx-sm-4">
                        <label for="exampleSelect1">Correo Electronico</label>
                        <input type="text" class="form-control" placeholder="Telefono" name="txtCorreo Electronico">
                    </div>
                    <div class="form-group mx-sm-4">
                        <label for="exampleSelect1">Telefono</label>
                        <input type="text" class="form-control" placeholder="Telefono" name="txtTelefono">
                    </div>

                    <div class="form-group mx-sm-4">
                        <input type="submit" class="form-control btn btn-primary btn-block" name="btn" value="Registrar">
                    </div>
                </form>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>