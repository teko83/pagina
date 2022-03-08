<?php
     include("INCLUDE/conexion.php");
     //recibo los valores
     $p_usuario = $_POST['idusuario'];
     $p_clave = $_POST['clave'];
     $p_rol = $_POST['rol'];
     $p_boton=$_POST['boton'];
     //Estructura de decision
     if($p_boton==0){
        echo "<script languaje='javascript' type='text/javascript'> 
        window.close();
        </script>";
     }else{
        $modifica="update tabla set idusuario='$p_usuario',clave='$p_clave',rol='$p_rol' where idusuario='$p_usuario'";
        $resultado_modifica=mysqli_query($conexion,$modifica);
         echo "<script languaje='javascript' type='text/javascript'>
         window.opener.document.location.reload();self.close()
         </script>";
        echo "<script languaje='javascript' type='text/javascript'> 
        window.close();
        </script>";
     }
?>