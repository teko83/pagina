<?php
    include("include/conexion.php");
    $p_usuario = $_POST['idusuario'];
    $p_clave = $_POST['clave'];
    $p_rol = $_POST['rol'];
    $consulta1 = "select count(idusuario) as nuevo from tabla where idusuario='$p_usuario'";
    $resultado1 = mysqli_query($conexion,$consulta1);
    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }
    if($existe==1){
        header("Location: agregar_usuario.php?mensaje=uno");
        echo "<script languaje='javascript' type='text/javascript'> 
        window.close();
        </script>";
    }else{
        $alta="insert into tabla values('$p_usuario','$p_clave','$p_rol')";
        $resultado_alta=mysqli_query($conexion,$alta);
        echo "<script languaje='javascript' type='text/javascript'>
         window.opener.document.location.reload();self.close()
         </script>";
        echo "<script languaje='javascript' type='text/javascript'> 
        window.close();
        </script>";
    }

?>