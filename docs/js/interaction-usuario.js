
document.getElementById("item-usuarios").className = "active";
document.getElementById("a-perfiles").href = "../perfiles/registro-perfiles.php";
document.getElementById("a-productos").href = "../deposito/productos.php";
document.getElementById("input-registrar").disabled = true;
document.getElementById("button-funciones").disabled = true;
/*document.getElementById("a-productos").href = "../productos/registro-productos.php";*/

/* cambio de color por campos requeridos incompletos */
/* input documento */
function spanDocumentoIn(){
	document.getElementById("documento").className =document.getElementById("documento").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
}
function spanDocumentoOut(){
	document.getElementById("documento").value = document.getElementById("documento").value.trim();
	if ((document.getElementById("documento").value == "") || (isNaN(document.getElementById("documento").value) == true)) {
		document.getElementById("documento").className += " input-red";
	}
}

/* input nombres */
function spanNombresIn(){
	document.getElementById("nombres").className =document.getElementById("nombres").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
}
function spanNombresOut(){
	document.getElementById("nombres").value = document.getElementById("nombres").value.trim();
	if (document.getElementById("nombres").value == "") {document.getElementById("nombres").className += " input-red";}
}

/* input apellidos */
function spanApellidosIn(){
	document.getElementById("apellidos").className =document.getElementById("apellidos").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
}
function spanApellidosOut(){
	document.getElementById("apellidos").value = document.getElementById("apellidos").value.trim();
	if (document.getElementById("apellidos").value == "") {document.getElementById("apellidos").className += " input-red";}
}

/* input email */
function spanEmailIn(){
	document.getElementById("email").className =document.getElementById("email").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
}
function spanEmailOut(){
	document.getElementById("email").value = document.getElementById("email").value.trim();
	if (document.getElementById("email").value == "") {document.getElementById("email").className += " input-red";}
}

function validarCampos(){
	if ((isNaN(document.getElementById("documento").value) == false) && (document.getElementById("documento").value != "") && (document.getElementById("nombres").value != "") && (document.getElementById("apellidos").value != "") && (document.getElementById("email").value != "")){
		document.getElementById("input-registrar").disabled = false;
	} else {
		document.getElementById("input-registrar").disabled = true;
	}
}

/*borrar(){
	form-usuario.documento.value='';
	form-usuario.nombres.value='';
	form-usuario.apellidos.value='';
	form-usuario.celular.value='';
	form-usuario.email.value='';
	form-usuario.direccion='';
	form-usuario.perfil='';
}*/