<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Alumnos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src=code.jquery.com_jquery-3.7.1.js></script>
</head>
<body>
    <?php
    include 'menu.php';
    include 'conexion.php';

    $sql = "SELECT * FROM alumnos";
    $datos=$conexion->query($sql);
    ?>

    <div class=container>
        <div class="row">
            <div class="col-12">
            <?php if($datos->$num_rows > 0) { ?>
                <table>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Numero de control</th>
                        <th>Semestre</th>
                        <th>Edad</th>
                        <th>Turno</th>
                        <th>Sexo</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($registro = $datos->fetch_assoc()){ ?>
                        <tr>
                            <td> <?php $registro ["id"]?></td>
                            <td> <?php $registro ["nombre"]?></td>
                            <td> <?php $registro ["numero_control"]?></td>
                            <td> <?php $registro ["semestre"]?></td>
                            <td> <?php $registro ["edad"]?></td>
                            <td> <?php $registro ["turno"]?></td>
                            <td> <?php $registro ["sexo"]?></td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary">Editar</a>
                                <a href="" class="btn btn-sm btn-primary">Eliminar</a>
                            </td>
                        </tr>
                        <?php }?>
                        </tbody>
                        </table>

                <?php }else { ?>
                    <h2>No existe datos de alumnos en la base de datos</h2>
                <?php } ?>

            </div>
        </div>
    </div>
</body>
</html>