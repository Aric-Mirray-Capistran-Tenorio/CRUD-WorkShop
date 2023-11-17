<?php

include "../config/conexion.php";

$nombreM = $_POST['nombreM'];
$apellidoM = $_POST['apellidoM'];
$emailM = $_POST['emailM'];
$contactoM = $_POST['contactoM'];
$rfcM = $_POST['rfcM'];
$generoM = $_POST['generoM'];
$domicilioM = $_POST['domicilioM'];

$sql = "INSERT INTO vendedores(nombre, apellido, email, contacto, rfc, genero, domicilio)
    VALUES ('$nombreM','$apellidoM','$emailM','$contactoM','$rfcM','$generoM','$domicilioM')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/vendedores/index.php");
} else {
    echo "Datos no insertados";
}
