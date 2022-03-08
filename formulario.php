<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php include('include/menu.php');?>
</head>
<body class="container">
<?php menu();?>
    <div class="alert alert-dark" role="alert">
    <h5 class="text-center">Envios de datos</h5>
    </div>    
    <div class="col-2"></div>
    <div class="col-8">
    <form action="formulario_recepcion.php" method="post">
    
        <div class="form-group">
            <label for="nombre">Nombre del usuario</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido del usuario</label>
            <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido">
        </div>
        <div class="form-group">
            <label for="clave">Pasword del usuario</label>
            <input type="password" id="clave" name="clave" placeholder="Ingrese su pasword">
        </div>
    
    <fieldset>
        <legend>Seleccione su nivel de ingles</legend>
        <div class="form-group">
            <label>
                <input type="radio" name="nivel" value="alto">Alto
            </label>
        </div>
        <div class="form-group">
            <label>
                <input type="radio" name="nivel" value="medio">Medio
            </label>
        </div>
        <div class="form-group">
            <label>
                <input type="radio" name="nivel" value="bajo">Bajo
            </label>
        </div>
    </fieldset>
    
    <div class="form-group">
        <label for="selector1">Seleccione el motivo de su contacto</label>
        <select name="selector1" id="selector1">
            <option value="consulta">Consulta</option>
            <option value="sugerencia">Sugerencia</option>
            <option value="queja">Queja</option>
        </select>
    </div>
    
    
        <button type="submit" class="btn btn-outline-primary">Enviar</button>
    </form>
    </div>
    <div class="col-2"></div>
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>