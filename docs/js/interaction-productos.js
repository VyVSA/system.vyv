
document.getElementById("item-productos").className = "active";
document.getElementById("a-perfiles").href = "../perfiles/registro-perfiles.php";
document.getElementById("a-usuarios").href ="../usuarios/registro-usuarios.php"
document.getElementById("input-registrar").disabled = true;
document.getElementById("button-funciones").disabled = true;
/*document.getElementById("a-productos").href = "../productos/registro-productos.php";*/

/* cambio de color por campos requeridos incompletos */
/* input descripcion */
function spanDescripcionIn(){
	document.getElementById("descripcion").className =document.getElementById("descripcion").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
}
function spanDescripcionOut(){
	document.getElementById("descripcion").value = document.getElementById("descripcion").value.trim();
	if ((document.getElementById("descripcion").value == "") || (isNaN(document.getElementById("descripcion").value) == true)) {
		document.getElementById("descripcion").className += " input-red";
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

/* input modelo */
function spanModeloIn(){
	document.getElementById("modelo").className =document.getElementById("modelo").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
}
function spanModeloOut(){
	document.getElementById("modelo").value = document.getElementById("modelo").value.trim();
	if (document.getElementById("modelo").value == "") {document.getElementById("modelo").className += " input-red";}
}

/* input email */
function spanEmailIn(){
	document.getElementById("email").className =document.getElementById("email").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
}
function spanEmailOut(){
	document.getElementById("email").value = document.getElementById("email").value.trim();
	if (document.getElementById("email").value == "") {document.getElementById("email").className += " input-red";}
}


/*borrar(){
	form-usuario.descripcion.value='';
	form-usuario.nombres.value='';
	form-usuario.modelo.value='';
	form-usuario.lote.value='';
	form-usuario.email.value='';
	form-usuario.direccion='';
	form-usuario.perfil='';
}*/