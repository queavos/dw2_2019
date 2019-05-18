function set_pagina()
{

}
function cargar_menu()
{
var items=  new Array();
items.push(["Inicio", "bt_home"]);
items.push(["Historia", "bt_histo"]);
items.push(["Contacto", "bt_contact"]);
var salida="";
 for (i=0 ; i<items.length ; i++)
 {
 salida+= "<li id='"+items[i][1]+"'><a href='#'>"+items[i][0]+" </a>";

 }
//console.log(document.getElementsByClassName("menu")[0].innerHTML);
document.getElementsByClassName("menu")[0].innerHTML=salida;
//var elemento=document.getElementsByClassName("menu");
//elemento.innerHTML=salida;
//console.log(salida);
//console.log(elemento);
}
function cargar_inicio()
{
//console.log(" ----- \n");
//console.log("soy home");
document.getElementById('titulo').innerHTML="Bienvenidos!!!";
document.getElementById('subtitulo').innerHTML="a nuestra portada...";
var contenido="<strong >visión</strong>de la UNIVERSIDAD AUTÓNOMA DE ENCARNACIÓN (UNAE) es: Ser una institución que ofrece Estudios Superiores de Calidad, salvaguardando los derechos de la persona y de la comunidad, dentro de las exigencias de la verdad y del bien común.";
document.getElementById('main').innerHTML=contenido;
}
function cargar_histo()
{
//
document.getElementById('titulo').innerHTML="Esta es nuestra historia!!!";
document.getElementById('subtitulo').innerHTML="pasen y vean...";
var contenido="En septiembre de 1999 el Ministerio de Educación y Cultura de la República del Paraguay autoriza la habilitación del Instituto de Formación Docente Divina Esperanza. Con dicho marco legal se inician las actividades académicas con la carrera Profesorado para la EEB, más de 200 postulantes conformaron las 3 secciones habilitadas.";
document.getElementById('main').innerHTML=contenido;
}
function cargar_contacto()
{
  //console.log(" ----- \n");
  //console.log("soy contacto");
  document.getElementById('titulo').innerHTML="Contactese con nosotros!!!";
  document.getElementById('subtitulo').innerHTML="queremos conocer sus inquietudes...";
  var contenido="	<form><input type='text' name='option' value='com_contact'><input type='text' name='task' value='contact.submit'><input type='hidden' name='return' value=''><input type='text' name='id' value='1:contacto'> <input type='text' name='a8458c21651fb6f3173f68c2d6c2b918' value='1'> <button class='btn validate btn-primary pull-right custom_hover' type='submit'><span><span>Enviar</span><strong>Enviar</strong></span></form>";
  document.getElementById('main').innerHTML=contenido;
}
document.addEventListener("load", cargar_menu());
var home=document.getElementById('bt_home');
console.log(home);
document.getElementById('bt_home').addEventListener("click",
function () {
  cargar_inicio();
}
);
document.getElementById('bt_histo').addEventListener("click",
function () {
  cargar_histo()
}
);
document.getElementById('bt_contact').addEventListener("click",
function () {
cargar_contacto()
}
);
