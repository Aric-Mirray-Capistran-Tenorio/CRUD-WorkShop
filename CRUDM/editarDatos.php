<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nombreM = $_POST['nombreM'];
    $apellidoM = $_POST['apellidoM'];
    $emailM = $_POST['emailM'];
    $contactoM = $_POST['contactoM'];
    $rfcM = $_POST['rfcM'];
    $generoM = $_POST['generoM'];
    $domicilioM= $_POST['domicilioM'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE vendedores SET nombre = '$nombreM',apellido = '$apellidoM',
    email = '$emailM',contacto = '$contactoM',rfc = '$rfcM',
    genero = '$generoM',domicilio = '$domicilioM' WHERE id_vendedor = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/vendedores/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
