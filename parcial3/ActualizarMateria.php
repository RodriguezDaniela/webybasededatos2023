<?php

    include 'conexion.php';
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $semestre = $_POST["semestre"];
    $especialidad = $_POST["especialidad"];

    $sql = "UPDATE materia SET nombre='".$nombre."', semestre=".$semestre.", especialidad='".$especialidad."', WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        header("Location: ConsultarMaterias.php");
        $conexion->close();
        exit;
    } else {
        echo "<h2>Ocurrió un error</h2> <p>Error: " .$sql . "<br>" . $conexion->error . "</p>";
        echo "<h3><a href='ConsultarMaterias.php'> Regresar a materia</a></h3>";
        $conexion->close();
    }

?>