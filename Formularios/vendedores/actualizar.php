<?php
require_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/taller/index.php">TALLER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/vendedores/index.php">VENDEDORES</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">ACTUALIZAR Vendedore</h5>
                        <form action="<?php echo base_url; ?>CRUDM/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM vendedor WHERE id_vendedor =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc(); 
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id">
                            <div class="mb-3">
                            <label for="nombreM" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombreM" name="nombreM" placeholder="Nombre del vendedor" required value="<?php echo $row['nombre'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="apellidoM" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellidoM" name="apellidoM" placeholder="Apellido del Vendedor" required value="<?php echo $row['apellido'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="e-mailM" class="form-label">e-Mail</label>
                            <input type="text" class="form-control" id="emailM" name="emailM" placeholder="e-Mail del Vendedor" required value="<?php echo $row['email'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="contactoM" class="form-label">Contacto</label>
                            <input type="text" class="form-control" id="contactoM" name="contactoM" placeholder="Contacto del Vendedor" required value="<?php echo $row['contacto'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="rfcM" class="form-label">RFC</label>
                            <input type="text" class="form-control" id="rfcM" name="rfcM" placeholder="RFC del Vendedor" required value="<?php echo $row['rfc'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="generoM" class="form-label">Genero</label>
                            <input type="text" class="form-control" id="generoM" name="generoM" placeholder="Genero del vendedor" required value="<?php echo $row['genero'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="domicilioM" class="form-label">Domicilio</label>
                            <input type="text" class="form-control" id="domicilioM" name="domicilioM" placeholder="Domicilio del Vendedor" required value="<?php echo $row['domicilio'] ?>">
                        </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>

</body>

</html>