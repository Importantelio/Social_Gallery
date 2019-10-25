function validacion(){
	//recojo las id del formulario y las almaceno en dos varibles.
	var user = document.getElementById('user').value;
	var password = document.getElementById('password').value;
	//si user o password vacio entonces entra en el if.
	if(user == "" || password ==""){
		//si user vacio entonces entra y ponme el cuadro en rojo.
		if (user == "") {
			//cojo ese campo user y digo que su estilo y que en particular su borde estará definido con 1px solid red.
			document.getElementById("user").style.border = '2px solid red';
		}else{
			document.getElementById("user").style.border = '2px solid #ccc';
		}
		//si password vacio entonces entra y ponme el cuadro en rojo.
		if (password == "") {
			//cojo ese campo password y digo que su estilo y que en particular su borde estará definido con 1px solid red.
			document.getElementById("password").style.border = '2px solid red';
		}else{
			document.getElementById("password").style.border = '2px solid #ccc';
		}
		return false;
	}else{
		return true;
	}

}

function validacionCodi(){
	var titulo = document.getElementById('titulo').value;
	var imagen = document.getElementById('imagen').value;
	var fecha = document.getElementById('fecha').value;

	if(titulo == "" || imagen == "" || fecha == ""){
		if (titulo == "") {
			//cojo ese campo nom2 dos y digo que su estilo y que en particular su borde estará definido con 1px solid red.
			document.getElementById("titulo").style.border = '2px solid red';
		}else{
			document.getElementById("titulo").style.border = '2px solid #ccc';
		}
		if (imagen == "") {
			//cojo ese campo nom2 dos y digo que su estilo y que en particular su borde estará definido con 1px solid red.
			document.getElementById("imagen").style.border = '2px solid red';
		}else{
			document.getElementById("imagen").style.border = '2px solid #ccc';
		}
		if (fecha == "") {
			//cojo ese campo nom2 dos y digo que su estilo y que en particular su borde estará definido con 1px solid red.
			document.getElementById("fecha").style.border = '2px solid red';
		}else{
			document.getElementById("fecha").style.border = '2px solid #ccc';
		}
		return false;
	}else{
		return true;
	}

}