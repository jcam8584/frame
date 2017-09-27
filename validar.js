
function validar() {
	var nombre, apellidos, email, usuario, clave, telefono, expresion;
	nombre = document.getElementById("nombre").value;
	apellidos = document.getElementById("apellidos").value;
	email = document.getElementById("email").value;
	usuario = document.getElementById("usuario").value;
	clave = document.getElementById("clave").value;
	telefono = document.getElementById("telefono").value;

	if(nombre === "" || apellidos === "" || email === "" || usuario  === ""|| clave  === "" || telefono  === ""){
		alert("Todos los campos son obligatorios");
		return false;
	}
	
	elseif(nombre.length > 30){
		alert("El nombre es muy largo");
		return false;
	}


	/*
	elseif(apellidos.length > 80){
		alert("Los apellidos son muy largos");
		return false;
	}
	elseif(email.length > 100){
		alert("El email es muy largo");
		return false;
	}
	elseif(usuario.length > 20){
		alert("El nombre es muy largo");
		return false;
	}
elseif(clave.length > 20){
		alert("La clave es muy larga");
		return false;
	}
	elseif(telefono.length > 10){
		alert("El número telefónico es muy largo");
		return false;
	}
	elseif(isNaN(telefono)){
		alert("El número telefónico ingresado no es un número");
		return false;
	}
	*/
}