<?php
$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'pruebaconexion';
$dbCon = mysqli_connect( $dbServer, $dbUser, $dbPassword, $dbName );
if ( $dbCon === false )
print( 'ERROR: No se pudo conectar. ' . mysqli_connect_error() );
?>