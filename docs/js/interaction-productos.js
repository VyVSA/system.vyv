
document.getElementById("item-productos").className = "active";
document.getElementById("a-perfiles").href = "../perfiles/registro-perfiles.php";
document.getElementById("a-usuarios").href ="../usuarios/registro-usuarios.php";
document.getElementById("input-registrar").disabled = true;

document.getElementById("button-funciones").disabled = true;


/* select procedencia */
function spanProcedenciaIn(){
	document.getElementById("procedencia").className =document.getElementById("procedencia").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
}
function spanProcedenciaOut(){
	document.getElementById("procedencia").value = document.getElementById("procedencia").value.trim();
	if (document.getElementById("procedencia").value == "") {document.getElementById("procedencia").className += " input-red";}
}


/* cambio de color por campos requeridos incompletos */
/* input descripcion */
function spanDescripcionIn(){
	document.getElementById("input-descripcion").className =document.getElementById("input-descripcion").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
}
function spanDescripcionOut(){
	document.getElementById("input-descripcion").value = document.getElementById("input-descripcion").value.trim();
	if (document.getElementById("input-descripcion").value == ""){
		document.getElementById("input-descripcion").className += " input-red";
	}
}

/* select marca */
function spanMarcaIn(){
	document.getElementById("marca").className =document.getElementById("marca").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
}
function spanMarcaOut(){
	document.getElementById("marca").value = document.getElementById("marca").value.trim();
	if (document.getElementById("marca").value == "") {document.getElementById("marca").className += " input-red";}
}

/* input modelo */
function spanModeloIn(){
	document.getElementById("modelo").className =document.getElementById("modelo").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
}
function spanModeloOut(){
	document.getElementById("modelo").value = document.getElementById("modelo").value.trim();
	if (document.getElementById("modelo").value == "") {document.getElementById("modelo").className += " input-red";}
}


/*borrar(){
	form-usuario.descripcion.value='';
	form-usuario.marca.value='';
	form-usuario.modelo.value='';
	form-usuario.lote.value='';
	form-usuario.email.value='';
	form-usuario.direccion='';
	form-usuario.perfil='';
}*/