<link rel="stylesheet" href="style.css" media="screen">
<link rel="stylesheet" href="style.css" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="contenedor-table">
<?php
    include 'conection.php';
    $dbExec = 'SELECT * FROM Clientes';
    echo "<h3 class='text-info'>CLIENTES INFORMACION</h3>";
    if ( $result = mysqli_query( $dbCon, $dbExec ) ) {
        if ( mysqli_num_rows( $result ) > 0 ) {
            echo '<table class="table table-bordered ">';
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
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>