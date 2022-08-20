<?php 
$nameform = $_POST['nombre'];
$lastnform = $_POST['apellido'];
$ageform = $_POST['edad'];
$emailform = $_POST['correo'];
$motivoform = $_POST['motivo'];
$msjform = $_POST['mensaje'];

include('connect.php');

mysqli_query($connect,"INSERT INTO consultas VALUES('$nameform','$lastnform', $ageform, '$emailform', '$motivoform', '$msjform')");

mysqli_close($connect);

header("Location: contacto.php?sent#contenido2");
?>