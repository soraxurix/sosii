const buttonIniciarSesion = document.getElementById("buttonInicarSesion");
const email = document.getElementById("input-email");
const password = document.getElementById("input-pass");
const loader = document.getElementById("loaderPrincipal");

buttonIniciarSesion.addEventListener("click", async function (e) {
	// Mostramos el loader
	loader.classList.remove("d-none");

	const informacionUsuario = {
		"email": email.value,
		"password": password.value
	}

	const res = await fetch("consultas/inicar_sesion.php",{
		body: JSON.stringify(informacionUsuario),
		method: "POST"
	});

	const data = await res.json();
	
	if(data == 200){
		window.location.replace("../index.php")
	}else if(data == 201){
		alerta("MessageBad", "El correo electrónico es incorrecto. Verifiquelo");
	}else if(data == 202){
		alerta("MessageBad", "La contraseña es incorrecta. Verifiquelo");
	}

	// Ocultamos el loader
	loader.classList.add("d-none");
});