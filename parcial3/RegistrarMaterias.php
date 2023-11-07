<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar materias</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    
    <div class="container">
        <div class="row">
            <div class="col-12 card p-4">
                <form action="">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea el semestre">
                    </div>
                    <div class="form-group">
                        <label for="semstre">Semestre</label>
                        <input type="text" class="form-control" name="semestre" placeholder="Teclea el semestre">
                    </div>
                    <div class="form-group">
                        <select name="especialidad" class="form-control">
                            <option value="">Selecciona una especialidad</option>
                            <option value="0">PROGRAMAION</option>
                            <option value="1">CONTABILIDAD</option>
                            <option value="2">OFIMATICA</option>
                            <option value="3">CONSTRUCCION</option>
                            <option value="4">ELECTRONICA</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" class="btn-primary" value="Registrar">
                        <a href="ConsultarMaterias.php" class="btn- btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>
    