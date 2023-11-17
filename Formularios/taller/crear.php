<?php
require_once("../../config/conexion.php");
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
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
                        <h5 class="card-title text-center">REGISTRAR TALLER</h5>
                        <form action="<?php echo base_url; ?>CRUDC/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="ubicacionP" class="form-label">Ubicacion</label>
                                <input type="text" class="form-control" id="ubicacionC" name="ubicacionC" placeholder="Ubicaciion de taller" required>
                            </div>
                            <div class="mb-3">
                                <label for="ctecnicosP" class="form-label">Cantidad de Tecnicos</label>
                                <input type="text" class="form-control" id="ctecnicosC" name="ctecnicosC" placeholder="Cantidad de tecnicos" required>
                            </div>
                            <div class="mb-3">
                                <label for="tmtsP" class="form-label">Tamaño en Metros</label>
                                <input type="text" class="form-control" id="tmtsC" name="tmtsC" placeholder="Tamaño del taller" required>
                            </div>
                            <div class="mb-3">
                                <label for="nofiP" class="form-label">Numero de oficinas</label>
                                <input type="text" class="form-control" id="nofiC" name="nofiC" placeholder="Numero de Oficinas" required>
                            </div>
                            <div class="mb-3">
                                <label for="cmaquinasP" class="form-label">Cantidad de Maquinas</label>
                                <input type="text" class="form-control" id="cmaquinasC" name="cmaquinasC" placeholder="Cantidad de maquinas" required>
                            </div>
                            <div class="mb-3">
                                <label for="contactoP" class="form-label">Contacto</label>
                                <input type="text" class="form-control" id="contactoC" name="contactoC" placeholder="Contacto del Taller" required>
                            </div>
                            <div class="mb-3">
                                <label for="cpostalP" class="form-label">Codigo postal</label>
                                <input type="text" class="form-control" id="cpostalC" name="cpostalC" placeholder="Codigo Postal" required>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/taller/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
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