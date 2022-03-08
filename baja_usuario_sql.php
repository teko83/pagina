<?php
include("include/conexion.php");
$p_usuario = $_POST['idusuario'];
$p_clave = $_POST['clave'];
$p_rol = $_POST['rol'];
$p_boton=$_POST['boton'];
if($p_boton==0){
    echo "<script languaje='javascript' type='text/javascript'> 
    window.close();
    </script>";
 }else{
     $baja="delete from tabla where idusuario='$p_usuario'";
     $resultado_baja=mysqli_query($conexion,$baja);
     echo "<script languaje='javascript' type='text/javascript'>
     window.opener.document.location.reload();self.close();
     </script>";
    echo "<script languaje='javascript' type='text/javascript'> 
    window.close();
    </script>";
 }
?>