<?php

include "../config/conexion.php";

$nombre = $_POST['nombreP'];
$precio = $_POST['precioP'];
$modelo = $_POST['modeloP'];
$marca = $_POST['marcaP'];
$color = $_POST['colorP'];
$region = $_POST['regionP'];
$descripcion = $_POST['descripcionP'];
$ubicacion = $_POST['ubicacionP'];
$vendedor = $_POST['vendedorP'];


$select = $conexion->query("SELECT ubicacion FROM taller WHERE id_taller = $ubicacion");
while ($auxiliar = $select->fetch_assoc()) {
    $ubi = $auxiliar['ubicacion'];
}
$select2 = $conexion->query("SELECT nombre FROM vendedores WHERE id_vendedor = $vendedor");
while ($auxiliar = $select2->fetch_assoc()) {
    $nom = $auxiliar['nombre'];
}

$insert = "INSERT INTO productos (ubicacionId, vendedorId, nombre, ubicacionPro, descripcion, precio, modelo, marca, color, region)
    VALUES ('$ubicacion', '$vendedor', '$nombre', '$ubi', '$descripcion', '$precio', '$modelo', '$marca', '$color', '$region')";

$resultado = mysqli_query($conexion, $insert);

$resultado = mysqli_query($conexion, $insert);

if ($resultado == FALSE) {
    echo "Error en la consulta: " . mysqli_error($conexion);
    die();
}



if ($resultado == TRUE) {
    header("location:../Formularios/productos/index.php");
} else {
    echo $nombre."<br>";
    echo $precio."<br>";
    echo $modelo."<br>";
    echo $marca."<br>";
    echo $color."<br>";
    echo $region."<br>";
    echo $descripcion."<br>";
    echo $ubicacion."<br>";
    echo $ubi."<br>";
    echo $vendedor."<br>";
    echo "Datos no insertados";
}
