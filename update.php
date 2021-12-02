<?php
include 'conection.php';
$dbExec = "UPDATE clientes SET `nombre` = '".$_GET['Nombre']."', `apellido` = '".$_GET['Apellido']."', `telefono` = '".$_GET['Telefono']."' WHERE `id_cliente` = ".$_GET['IdCliente'];
//mysqli_query( $dbCon, $dbExec );
$result = mysqli_query( $dbCon, $dbExec );
if($result){
    mysqli_close( $dbCon );
    header("Location: index.php");
    exit;
}else{
    echo "ERROR en la consulta";
    
}

?>