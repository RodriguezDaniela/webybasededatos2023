<?php
  $server="localhost";
  $user="root";
  $password="";
  $baseDatos="cetis107";

  $conexion = new mysqli($server, $user, $password, $baseDatos);

  if($conexion->connect_error){
    die("fallo la conexion" . $conexion->connect_error);
  }
?>