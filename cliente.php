<link rel="stylesheet" href="style.css" media="screen">
<?php
    include 'conection.php';
    $dbExec = 'SELECT * FROM Clientes';
    echo "<h1>CLIENTES INFORMACION</h1>";
    if ( $result = mysqli_query( $dbCon, $dbExec ) ) {
        if ( mysqli_num_rows( $result ) > 0 ) {
            echo '<table>';
            echo '<tr>';
            echo '<th>IdCliente</th>';
            echo '<th>Nombre</th>';
            echo '<th>Apellido</th>';
            echo '<th>Telefono</th>';
            echo '</tr>';
            while( $row = mysqli_fetch_array( $result ) ) {
                echo '<form method="GET" action = "update.php">';
                echo '<tr>';
                echo '<td>'.$row['id_cliente'].'</td>';
                echo '<td>'.$row['nombre'].'</td>';
                echo '<td>'.$row['apellido'].'</td>';
                echo '<td>'.$row['telefono'].'</td>';
                //echo '<td><input class="btn-link" type="submit" value="Guardar"></td>';
                //echo '<td><a href="delete.php?IdCliente='.$row['id_cliente'].'">Eliminar</a></td>';
                echo '</form>';
                echo '</tr>';
            }
            
            mysqli_free_result( $result );
        }
    }
    mysqli_close( $dbCon );
?>
