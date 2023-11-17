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
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/vededores/index.php">VENDEDORES</a>
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
                        <h5 class="card-title text-center">ACTUALIZAR TALLER</h5>
                        <form action="<?php echo base_url; ?>CRUDC/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM taller WHERE id_taller =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id_taller'] ?>">
                            <div class="mb-3">
                                <label for="ubicacionC" class="form-label">Ubicacion</label>
                                <input type="text" class="form-control" id="ubicacionC" name="ubicacionC" placeholder="Ubicacion del Taller" value="<?php echo $row['ubicacion'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="ctecnicosC" class="form-label">Cantidad de Tecnicos</label>
                                <input type="text" class="form-control" id="ctecnicosC" name="ctecnicosC" placeholder="Cantidad de Tecnicos" value="<?php echo $row['cant_tecnicos'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="tmtsC" class="form-label">Tamaño en Metros</label>
                                <input type="text" class="form-control" id="tmtsC" name="tmtsC" placeholder="Tamaño en Metros" value="<?php echo $row['tamano_mts'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nofiC" class="form-label">Numero de Oficinas</label>
                                <input type="text" class="form-control" id="nofiC" name="nofiC" placeholder="Numero de Oficinas" value="<?php echo $row['num_oficinas'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="cmaquinasC" class="form-label">Cantidad de Maquinas</label>
                                <input type="text" class="form-control" id="cmaquinasC" name="cmaquinasC" placeholder="Cantidad de Maquinas" value="<?php echo $row['cant_maquinas'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="contactoC" class="form-label">Contacto</label>
                                <input type="text" class="form-control" id="contactoC" name="contactoC" placeholder="Contacto" value="<?php echo $row['contacto'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="cpostalC" class="form-label">Codigo Postal</label>
                                <input type="text" class="form-control" id="cpostalC" name="cpostalC" placeholder="Codigo Postal" value="<?php echo $row['cod_postal'] ?>">
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