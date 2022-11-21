<?php
include 'connection.php';

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];

$url_foto = $_POST['url_foto'];

$response = array();
$query = mysqli_query($con, "INSERT INTO contacto (nombre, telefono, latitud, longitud) VALUES ('$nombre','$telefono','$latitud','$longitud')");

if($query){
  $response['success'] = 'true';
  $response['message'] = 'Datos Insertado con exito';
}else{
  $response['success'] = 'false';
  $response['message'] = 'Error al insertar los datos';
}

echo json_encode($response);
?>
