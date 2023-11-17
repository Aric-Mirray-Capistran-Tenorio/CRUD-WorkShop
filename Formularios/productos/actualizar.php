<?php
include_once("../../config/conexion.php")
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

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
                        <h5 class="card-title text-center">ACTUALIZAR PRODUCTO</h5>
                        <form action="../../CRUDP/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM productos WHERE idProducto =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['idProducto'] ?>">

                            <!-- TRAER DATOS ubicacion -->
                            <div class="mb-3">
                                <label for="ubicacionU" class="form-label">Ubicacion</label>
                                <select class="form-select form-select-lg" name="ubicacionU" id="ubicacionU">
                                    <option selected disabled>Seleccione una Ubicacion</option>
                                    <?php
                                    include_once("../../config/conexion.php");

                                    $sql1 = "SELECT * FROM taller WHERE id_taller=" . $row['ubicacionId'];
                                    $resultado1 = $conexion->query($sql1);
                                    $row1 = $resultado1->fetch_assoc();

                                    echo "<option selected value='" . $row1['ubicacion'] . "'>" . $row1['ubicacion'] . "</option>";

                                    $sql2 = "SELECT * FROM taller";
                                    $resultado2 = $conexion->query($sql2);

                                    while ($fila = $resultado2->fetch_array()) {
                                        if ($fila['id_taller'] !== $row1['id_taller']) {
                                            echo "<option value='" . $fila['ubicacion'] . "'>" . $fila['ubicacion'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="marcasU" class="form-label">Vendedor</label>
                                <select class="form-select form-select-lg" name="marcasU" id="marcasU">
                                    <option selected disabled>Seleccione un Vendedor</option>
                                    <?php
                                    include_once("../../config/conexion.php");

                                    $sql3 = "SELECT * FROM vendedores WHERE id_vendedor=" . $row['vendedorId'];
                                    $resultado3 = $conexion->query($sql3);

                                    $row3 = $resultado3->fetch_assoc();

                                    echo "<option selected value='" . $row3['nombre'] . "'>" . $row3['nombre'] . "</option>";

                                    $sql4 = "SELECT * FROM vendedores";
                                    $resultado4 = $conexion->query($sql4);

                                    while ($fila = $resultado4->fetch_array()) {
                                        if ($fila['id_vendedor'] !== $row3['id_vendedor']) {
                                            echo "<option value='" . $fila['id_vendedor'] . "'>" . $fila['nombre'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nombreU" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombreU" name="nombreU" placeholder="Nombre del producto" value="<?php echo $row['nombre'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="precioU" class="form-label">Precio</label>
                                <input type="text" class="form-control" id="precioU" name="precioU" placeholder="Precio del producto" value="<?php echo $row['precio'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="modeloU" class="form-label">Modelo</label>
                                <input type="text" class="form-control" id="modeloU" name="modeloU" placeholder="Medelo del producto" value="<?php echo $row['modelo'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="MarcaU" class="form-label">Marca</label>
                                <input type="text" class="form-control" id="marcaU" name="marcaU" placeholder="Marca del producto" value="<?php echo $row['marca'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="colorU" class="form-label">Color</label>
                                <input type="text" class="form-control" id="colorU" name="colorU" placeholder="Color del producto" value="<?php echo $row['color'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="regionU" class="form-label">Region</label>
                                <input type="text" class="form-control" id="regionU" name="regionU" placeholder="Region del producto" value="<?php echo $row['region'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="descripcionU" class="form-label">Descripcion</label>
                                <textarea class="form-control" id="descripcionU" name="descripcionU"  placeholder="Descripcion"><?php echo $row['descripcion'] ?></textarea>
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
    <script src="../../js/fontawesome.js"></script>

</body>

</html>