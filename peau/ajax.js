// JavaScript Document
 
// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
 
//Función para recoger los datos del formulario y enviarlos por post  
function enviarDatosEmpleado(tipo){
 
  //div donde se mostrará lo resultados
  divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs
  if(tipo==1){  nom=document.nuevo_empleado.nombre.value;ape=document.nuevo_empleado.apellido.value;}
  if(tipo==2){  nom=document.nuevo_empleado.nombre.value;}
  if(tipo==3){  nom=document.nuevo_empleado.nombre.value;}
  if(tipo==4){  nom=document.nuevo_empleado.nombre.value;ape=document.nuevo_empleado.apellido.value;}
  if(tipo==5){  nom=document.nuevo_empleado.nombre.value;}
  if(tipo==6){  nom=document.nuevo_empleado.nombre.value;ape=document.nuevo_empleado.apellido.value;}
  if(tipo==7){  nom=document.nuevo_empleado.nombre.value;ape=document.nuevo_empleado.apellido.value;}
  if(tipo==8){  nom=document.nuevo_empleado.nombre.value;ape=document.nuevo_empleado.apellido.value;}
  //instanciamos el objetoAjax
  ajax=objetoAjax();
 
  //uso del medotod POST
  //archivo que realizará la operacion
  //registro.php
  if(tipo==1){ajax.open("POST", "registro.php?id=1",true);}
  if(tipo==2){ajax.open("POST", "registro.php?id=2",true);}
  if(tipo==3){ajax.open("POST", "registro.php?id=3",true);}
  if(tipo==4){ajax.open("POST", "registro.php?id=4",true);}
  if(tipo==5){ajax.open("POST", "registro.php?id=5",true);}
  if(tipo==6){ajax.open("POST", "registro.php?id=6",true);}
  if(tipo==7){ajax.open("POST", "registro.php?id=7",true);}
  if(tipo==8){ajax.open("POST", "registro.php?id=8",true);}
  if(tipo==9){ajax.open("POST", "registro.php?id=9",true);}
  if(tipo==10){ajax.open("POST", "registro.php?id=10",true);}
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		divResultado.innerHTML = ajax.responseText
  		//llamar a funcion para limpiar los inputs
		LimpiarCampos();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
  if(tipo==1){ajax.send("nombre="+nom+"&apellido="+ape);}
  if(tipo==2){ajax.send("nombre="+nom);}
  if(tipo==3){ajax.send("nombre="+nom);}
  if(tipo==4){ajax.send("nombre="+nom+"&apellido="+ape);}
  if(tipo==5){ajax.send("nombre="+nom);}
  if(tipo==6){ajax.send("nombre="+nom+"&apellido="+ape);}
  if(tipo==7){ajax.send("nombre="+nom+"&apellido="+ape);}
  if(tipo==8){ajax.send("nombre="+nom+"&apellido="+ape);}
}
 
//función para limpiar los campos
function LimpiarCampos(){
  document.nuevo_empleado.nombre.value="";
  document.nuevo_empleado.apellido.value="";
  document.nuevo_empleado.nombre.focus();
}