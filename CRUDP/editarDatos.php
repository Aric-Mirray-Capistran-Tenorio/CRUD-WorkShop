<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nombre = $_POST['nombreU'];
    $precio = $_POST['precioU'];
    $modelo = $_POST['modeloU'];
    $marca = $_POST['marcaU'];
    $color = $_POST['colorU'];
    $region = $_POST['regionU'];
    $ubicacion = $_POST['ubicacionU'];
    $descripcion = $_POST['descripcionU'];
    

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE productos SET nombre = '$nombre',ubicacionPro = '$ubicacion',descripcion = '$descripcion',precio = '$precio',modelo = '$modelo',marca = '$marca',color = '$color',region = '$region' WHERE idProducto = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
