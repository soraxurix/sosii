<?php
include 'conection.php';
$dbExec = 'DELETE FROM Clientes WHERE id_cliente='.$_GET['IdCliente'];
mysqli_query( $dbCon, $dbExec );
mysqli_close( $dbCon );
header("Location: index.php");
exit;
?>