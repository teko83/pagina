<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php
    $mensaje = "Ingrese los nuevos datos";
    if(isset($_GET['mensaje'])){
        if($_GET['mensaje']=='uno'){
            $mensaje = 'El dato ya existe en la base de datos.';}
    }
    ?>
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">Alta de usuario</h5>
    </div>
</head>
<body class="container">
<div class="container">
    <div class="row">
    <div class="col-3"></div>
            <div class="col-6">
                <form action="alta_usuario_sql.php" method="post">
                    <div class="form-group">
                        <label for="idusuario" style="color:green;" class="font-weight-bold">Ingrese el nuevo usuario</label>
                        <input type="text" id="idusuario" name="idusuario" placeholder="Ingrese un usuario" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="clave" style="color:green;" class="font-weight-bold">Ingrese una clave</label>
                        <input type="password" id="clave" name="clave" placeholder="Ingrese una clave" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="rol" style="color:green;" class="font-weight-bold">Ingrese el rol</label>
                        <input type="text" id="rol" name="rol" placeholder="Ingrese un rol" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Cargar el registro</button>
                    <?php echo $mensaje; ?>
                </form>
            </div>
            <div class="col-3"></div>


    </div>



</div>
<script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>