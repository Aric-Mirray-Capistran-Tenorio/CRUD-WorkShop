<?php

include "../config/conexion.php";

$ubicacionC = $_POST['ubicacionC'];
$ctecnicosC = $_POST['ctecnicosC'];
$tmtsC = $_POST['tmtsC'];
$nofiC = $_POST['nofiC'];
$cmaquinasC = $_POST['cmaquinasC'];
$contactoC = $_POST['contactoC'];
$cpostalC = $_POST['cpostalC'];

$sql = "INSERT INTO taller (ubicacion, cant_tecnicos, tamano_mts, num_oficinas, cant_maquinas, contacto, cod_postal)
    VALUES ('$ubicacionC','$ctecnicosC','$tmtsC','$nofiC','$cmaquinasC','$contactoC','$cpostalC')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/taller/index.php");
} else {
    echo "Datos no insertados";
}
