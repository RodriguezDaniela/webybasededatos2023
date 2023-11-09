<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Materia</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php 
        include 'menu.php'; 
        include 'conexion.php';

        $id = $_GET["id"];

        $sql = "SELECT * FROM Materias WHERE id=".$id;

        $datos = $conexion->query($sql);
        
        $Materia = $datos->fetch_assoc();

    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 card m-4 p-4">
                <h2>Registrar Materia</h2><hr>
                <form action="ActualizarMateria.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $Materia["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input value="<?php echo $Materia["nombre"]; ?>" name="nombre" type="text" class="form-control" placeholder="Teclea el nombre del Materia" required>
                    </div>
                    <div class="form-group">
                        <label for="">Número de control:</label>
                        <input value="<?php echo $Materia["numero_control"]; ?>" name="nc" type="text" class="form-control" placeholder="Teclea el número de control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Semestre:</label>
                        <input value="<?php echo $Materia["semestre"]; ?>" name="semestre" type="number" class="form-control" placeholder="Teclea el semestre" required>
                    </div>
                    <div class="form-group">
                        <label for="">Edad:</label>
                        <input value="<?php echo $Materia["edad"]; ?>" name="edad" type="number" class="form-control" placeholder="Teclea la edad" required>
                    </div>
                    <div class="form-group">
                        <label for="">Turno:</label>
                        <select name="turno" class="form-control" required>
                            <option selected value="<?php echo $Materia["turno"]; ?>"><?php echo $Materia["turno"]; ?></option>
                            <option value="">Selecciona el turno</option>
                            <option value="MATUTINO">MATUTINO</option>
                            <option value="VESPERTINO">VESPERTINO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Sexo:</label>
                        <select name="sexo" class="form-control" required>
                            <option value="">Selecciona el sexo</option>
                            <option selected value="<?php echo $Materia["sexo"]; ?>"><?php echo $Materia["sexo"]; ?></option>
                            <option value="0">FEMENINO</option>
                            <option value="1">MASCULINO</option>
                            <option value="2">Prefiero no responder</option>
                        </select>
                    </div><br>
                    <div>
                        <input type="submit" value="Actualizar" class="btn btn-primary">
                        <a href="consultarMaterias.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <hr>
        CETIS 107 &copy; 2023
    </footer>

    <script src="js/bootstrap.js"></script>
</body>
</html>