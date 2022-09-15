<?php


error_reporting(1);

include "Config/Conexion.php";

$Id = $_REQUEST['IdEditar'];

$Nombre = $_POST['NombreTelefono'];
$Descripcion = $_POST['DescripcionTelefono'];
$imagen = addslashes(file_get_contents($_FILES['ImagenTelefono']['tmp_name']));


$sql = "UPDATE celulares SET 
Nombre = '$Nombre', 
Descripcion = '$Descripcion',
Imagen = '$imagen' WHERE Id = $Id";


$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location:Index.php");
}else {
    echo "No se insertaron lod datos";
}