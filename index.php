<link rel="stylesheet" href="style.css" media="screen">
<?php
    include 'conection.php';
    $dbExec = 'SELECT * FROM Clientes';
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
                echo '<td><input type="text" readonly class="IdCliente" name="IdCliente" value="'.$row['id_cliente'].'"></td>';
                echo '<td><input type="text" name="Nombre" value="'.$row['nombre'].'"></td>';
                echo '<td><input type="text" name="Apellido" value="'.$row['apellido'].'"></td>';
                echo '<td><input type="text" name="Telefono" value="'.$row['telefono'].'"></td>';
                echo '<td><input class="btn-link" type="submit" value="Guardar"></td>';
                echo '<td><a href="delete.php?IdCliente='.$row['id_cliente'].'">Eliminar</a></td>';
                echo '</form>';
                echo '</tr>';
            }
            echo '<form method="GET" action = "insert.php">';
            echo '<tr>';
            echo '<td><input type="text" name="IdCliente"></td>';
            echo '<td><input type="text" name="Nombre"></td>';
            echo '<td><input type="text" name="Apellido"></td>';
            echo '<td><input type="text" name="Telefono"></td>';
            echo '<td><input class="btn-link" type="submit" value="Insertar"></td>';
            echo '</form>';
            echo '</tr>';
            echo '</table>';
            mysqli_free_result( $result );
        }
    }
    mysqli_close( $dbCon );
?>
