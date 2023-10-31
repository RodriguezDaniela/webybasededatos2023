<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regsitar Alumnos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php 
       include 'menu.php';
       $id = $_GET["id"];
       $sql = "SELECT * FROM alumnos id=".$id;

       $datos=$conexion->query($sql);
       $alumno = $datos->fetch_assoc()[0];
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 card m-4 p-4">
                <h2>Registar Alumnos</h2><br>
                <form action="actualizarRegistro.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $alumno ["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input value="<?php echo $alumno ["id"]; ?>" name="nombre"  type="text" class="form-control" placeholder="Teclea el nombre del alumno" required>
                    </div>

                    <div class="form-group">
                        <label for="">Semestre:</label>
                        <input value="<?php echo $alumno ["id"]; ?>" name="semestre"  type="text" class="form-control" placeholder="Teclea el semestre" required>
                    </div>

                    <div class="form-group">
                    <label for="">Número de control:</label>
                        <input value="<?php echo $alumno ["id"]; ?>" name="nc"  type="text" class="form-control" placeholder="Teclea el número de control" required>
                    </div>

                    <div class="form-group">
                    <label for="">Edad:</label>
                        <input value="<?php echo $alumno ["id"]; ?>" name="edad"  type="text" class="form-control" placeholder="Teclea la edad" required>
                    </div>

                    <div class="form-group">
                    <label for="">Turno:</label>
                        <select name="turno" class="form-control" required>
                            <option value="<?php echo $alumno ["turno"]; ?>"><?php echo $alumno["turno"];?></option>
                            <option value="Selecciona el turno"></option>
                            <option value="MATUTINO">MATUTINO</option>
                            <option value="VESPERTINO">VESPERTINO</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="">Sexo:</label>
                        <select name="sexo" class="form-control" required>
                            <option value="Selecciona el sexo"></option>
                            <option value="<?php echo $alumno ["sexo"]; ?>"><?php echo $alumno["sexo"];?></option>
                            <option value="0">FEMENINO</option>
                            <option value="1">MASCULINO</option>
                            <option value="2">Prefiero no responder</option>
                        </select>
                    </div><br>
                    <div>
                        <input type="submit" value="Registar" class="btn btn-primary" required>
                        <a href="consultarAlumnos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <hr>
        CETIS 107 &copy;2023
      </footer>

      <script src="js/bootstrap.js"></script>
    
</body>
</html>