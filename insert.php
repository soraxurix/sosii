<?php
include 'conection.php';
$dbExec = "INSERT INTO clientes (`id_cliente`, `nombre`, `apellido`, `telefono`) 
VALUES ('".$_GET['IdCliente']."', '".$_GET['Nombre']."', '".$_GET['Apellido']."', '".$_GET['Telefono']."')";
mysqli_query( $dbCon, $dbExec );
mysqli_close( $dbCon );
header("Location: index.php");
exit;
?>