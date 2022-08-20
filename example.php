<?php
include('connect.php')

$unidad =
$fecha =

mysqli_query($connect,"INSERT INTO clases VALUES (DEFAULT, '$unidad','$fecha')" )

header("Location: unidad1.php?sent#contenido2");

?>