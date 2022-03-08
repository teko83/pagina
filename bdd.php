<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php 
    include('INCLUDE/menu.php');
    include('INCLUDE/conexion.php');

    $consulta1="select count(distinct idusuario) as idusuario from tabla";
    $consulta2 = "select count(distinct idusuario) as administradores from tabla where rol='administrador'";
    $consulta3 = "select count(distinct idusuario) as analistas from tabla where rol='analista'";
    $consulta4 = "select * from tabla";

    $resultado1 = mysqli_query($conexion,$consulta1)or die('Error en la consulta 1');
    while($a = mysqli_fetch_assoc($resultado1)){
        $cantidad_de_usuarios = $a['idusuario'];
    }
    $resultado2 = mysqli_query($conexion,$consulta2)or die ('Error en consulta 2');
    while($b = mysqli_fetch_assoc($resultado2)){
        $cantidad_de_administradores = $b['administradores'];
    }
    $resultado3 = mysqli_query($conexion,$consulta3)or die('Error en consulta3');
    while($c= mysqli_fetch_assoc($resultado3)){
        $cantidad_de_analistas = $c['analistas'];
    }
    $resultado4 = mysqli_query($conexion,$consulta4)or die('Error en consulta 4');
    mysqli_close($conexion);
    ?>
</head>
<body>
<?php menu(); ?>
<div class="alert alert-dark" role="alert">
        <h5 class="text-center">ABM basico</h5>
</div>
<div class="container">
        <div class="row">
            <div class="col-4">
            <button type="button" class="btn btn-primary btn-block">
                Cantida de usuarios <span class="badge badge-light"><?php echo $cantidad_de_usuarios ?></span>
            </button>
            </div>
            <div class="col-4">
            <button type="button" class="btn btn-success btn-block">
                Cantida de administradores <span class="badge badge-light"><?php echo $cantidad_de_administradores ?></span>
            </button>
            </div>
            <div class="col-4">
            <button type="button" class="btn btn-warning btn-block">
                Cantida de analistas <span class="badge badge-light"><?php echo $cantidad_de_analistas ?></span>
            </button>
            <br><br>
            <div class="col-3">
            <button type="button" class="btn btn-outline-primary ">
                <a href="agregar_usuario.php?tabla=" target="_blank">Agregar Usuario</a>
            </button>
            </div>
            </div>
            </div>
    </div><br><br>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hover table-dark table-striped">
                        <thead>
                            <tr style="background:#003333;color:white" class="text-center font-italic">
                                <td>Usuarios</td><td>Clave</td><td>Rol</td><td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($d = mysqli_fetch_array($resultado4)){
                                echo "<tr>";
                                    echo "<td>".$d['idusuario']."</td>";
                                    echo "<td>".$d['clave']."</td>";
                                    echo "<td>".$d['rol']."</td>";
                                    echo "<td> <a href='modifica_usuario.php?tabla=".$d['idusuario']."
                                                 &clave=".$d['clave']."&rol=".$d['rol']."
                                                 target='_blank'>Editar</a>
                                                |
                                                <a href='baja_usuario.php?tabla=".$d['idusuario']."
                                                &clave=".$d['clave']."&rol=".$d['rol']."
                                                target='_blank'>Eliminar</a>
                                            </td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>