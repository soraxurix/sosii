<?php 
include ('connection.php');

$_POST = json_decode(file_get_contents('php://input'), true);
$email = $_POST["email"];
$password = $_POST["password"];


$consulta = "SELECT password, tipo from usuarios where correo = '$email' LIMIT 1";

$result = mysqli_query($conn, $consulta);

$data = array();
while($row2 = mysqli_fetch_assoc($result)){
	$data[] = $row2;
}

if(count($data) != 0){
	$passwordConsulta = $data[0]['password'];
	$tipo = $data[0]['tipo'];
	if($passwordConsulta === $password){
		if($tipo != 1){
			echo json_encode(199); //En caso de que la contraseña sea correcta
		}else{
			echo json_encode(200); //En caso de que la contraseña sea correcta
		}
	}else{
		echo json_encode(202); //La contraseña es incorrecta
	}
}else{
	echo json_encode(201); //El email es incorrecto
}



// mysql_close($result);
 ?>