<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$mail = $_POST['mail'];

$msj = "Hola $name $lastname, te has regitrado con exito en nuestro formulario";

require 'register.php';
echo $msj;

?>