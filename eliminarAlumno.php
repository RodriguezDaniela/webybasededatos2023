<?php
  include 'conexion.php';
  $id = $_GET ['id'];

  $sql = "DELETE FROM alumnos where id =".$id;

  if($conexion->query($sql) === TRUE){
    header("Location: consultarAlumnos.php");
}else{
    echo "<h2>Ocurrio un error</h2> <p>Error: " .$sql. "<br>" .$conexion->error . "</p>";
    echo "<h3><a href='consultarAlumnos.php'>Regresar a Alumnos</a></h3>";
    $conexion-close();
}
?>