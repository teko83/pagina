<?php
$nombre= $_POST['nombre'];
$apellido=$_POST['apellido'];
$clave=$_POST['clave'];
if(isset($_POST['nivel'])){
    $nivel=$_POST['nivel'];
}else $nivel='no se especifico el nivel';

$motivo=$_POST['selector1'];

echo 'nombre recibido:'.$nombre;
echo 'apellido recibido: '.$apellido;
echo 'clave recibida: '.$clave;
echo 'nivel recibido: '.$nivel;
echo 'motivo recibido: '.$motivo;

?>