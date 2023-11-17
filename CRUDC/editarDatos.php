<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $ubicacionC = $_POST['ubicacionC'];
    $ctecnicosC = $_POST['ctecnicosC'];
    $tmtsC = $_POST['tmtsC'];
    $nofiC = $_POST['nofiC'];
    $cmaquinasC = $_POST['cmaquinasC'];
    $contactoC = $_POST['contactoC'];
    $cpostalC = $_POST['cpostalC'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE taller SET ubicacion = '$ubicacionC', cant_tecnicos = '$ctecnicosC',
     tamano_mts = '$tmtsC', num_oficinas = '$nofiC', cant_maquinas = '$cmaquinasC', 
    contacto = '$contactoC', cod_postal = '$cpostalC'  WHERE id_taller = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/taller/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
