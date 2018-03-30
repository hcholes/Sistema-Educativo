
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="bred<" />
	<meta name="keywords" content="bred<" />
	<meta name="description" content="bred<" />
	<meta name="robots" content="all" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>IE RURAL PORFIRIO BARBA JACOB</title>

	<style type="text/css" title="currentStyle" media="screen">
		@import "./css/global.css";
	</style>
    
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
       <link rel="shortcut icon" href="ESCUDO.ico">
	   <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;hl=es&amp;key=ABQIAAAA30JtKUU8se-7KKPRGSfCMBT2yXp_ZAY8_ufC3CFXhHIE1NvwkxRZNdns2BwZvEY-V68DvlyUYwi1-Q" type="text/javascript"></script>

<script type="text/javascript">
var map = null;
var mgr = null;
var lat = 6.64755712797004;
var lon = -75.46144008636475;
var zoom = 16;
var puntos = {};
var peticion = null;
 
function inicializa_xhr() {
  if(window.XMLHttpRequest) {
    return new XMLHttpRequest(); 
  } else if (window.ActiveXObject) {
    return new ActiveXObject("Microsoft.XMLHTTP"); 
  }
}
 
function load() {
  if(GBrowserIsCompatible()) {
    map = new GMap2(document.getElementById("map"));
    map.setCenter(new GLatLng(lat, lon), zoom);
    map.setMapType(G_SATELLITE_MAP);
    setInterval(cargaPrediccion, 3000);
  }
}
 
function cargaPrediccion() {
  peticion = inicializa_xhr();
  peticion.onreadystatechange = muestraPrediccion;
  peticion.open('GET', 'http://localhost/RUTA_HASTA_ARCHIVO/previsionMeteorologica.php?nocache='+Math.random(), true);
  peticion.send(null);
}
 
function muestraPrediccion() {
  if(peticion.readyState == 4) {
    if(peticion.status == 200) {
      puntos = eval("("+peticion.responseText+")");
      map.clearOverlays();
      mgr = new GMarkerManager(map);
      mgr.addMarkers(getMarcadores(), 3);
      mgr.refresh();
    }
  }
}
 
function getMarcadores() {
  var marcadores = [];
  for (var i=0; i<puntos.length; ++i) {
    var marcador = new GMarker(getPunto(i), { icon: getIcono(i) });
    marcadores.push(marcador);
  }
  return marcadores;
}
 
function getPunto(i) {
  var punto = puntos[i];
  var lat = punto.latlon[0];
  var lon = punto.latlon[1];
  return new GLatLng(lat, lon);
}
 
function getIcono(i) {
  var punto = puntos[i];
  var icono = new GIcon();
  icono.image = "imagenes/" + punto.prediccion + ".png";
  icono.iconAnchor = new GPoint(16, 16);
  icono.iconSize = new GSize(32, 32);
 
  return icono;
}
</script>
</head>

<body onload="load()" onunload="GUnload()">
<?php
$_SESSION['ID1']=0;
$_SESSION['NOM1']=0;
$_SESSION['TIPO']=0;
$_SESSION['GRADO']=0;
?>
<div id="wrapper">
	<div id="top">
   	  <h1 class="logo"><a href="index.php"><img src="LOGO.fw.png" alt="" width="353" height="68" /></a></h1>
    	
    	<ul id="topnavi">
       	  
		    <li><a href="index.php">INICIO</a></li>
        	<li><a href="INSTITUCION.PHP">INSTITUCION</a></li>
        	<li><a href="MISION.PHP">MISION</a></li>
        	<li><a href="VISION.PHP">VISION</a></li>
        	<li><a href="POLITICAS.PHP">POLITICAS</a></li>
        	<li class="active"><a href="CONTACTENOS.PHP">CONTACTENOS</a></li>
      </ul>
    </div>
    <div id="header"><img src="logo.png" alt="" width="997" height="183" />
    </div>
    <div id="main">
		<div class="ic"></div>
    	<div id="left-part">
        
            
      <ul id="subnavi">
        <form id="form1" name="form1" method="post" action="CONFIRMACION.php">
          <?php
		  
session_start();
if (isset($_SESSION['ID1'])){
echo "<font size=+0>Bienvenido señor(a)";
echo $_SESSION['NOM1'];
echo "<br /></font>";
}else{
echo "Usuario no ha iniciado sesión";
}
?>
        </form>
      </ul>
            
           
        </div>
    	
    <div id="right-part"> 
      Antioquia
      <p>Santa Rosa de Osos</p>
      <p>Corregimiento San Pablo</p>
      <p>Nucleo 416</p>
      <p>Telefonos: 851 35 39 - 851 41 22</p>
      <p>Correo Electronico: <a href="mailto:colegioporfirio@hotmail.com">Colegioporfirio@hotmail.com</a></p>
      <p>Rector: Oscar Hernán Ramírez</p>
      <p>&nbsp;</p>
      <p><strong><font size="3">Caracterizacion de la Institución</font></strong></p>
      <p align="justify"> La Institución Educativa Rural “Porfirio Barba Jacob” 
        se encuentra localizada en área urbana del corregimiento de San Pablo, 
        del municipio de Santa Rosa de Osos, Departamento de Antioquia.</p>
		
		 <div id="map" style="width: 600px; height: 600px"></div>
      <p align="justify"> El casco urbano de San Pablo se encuentra al sur-oriente 
        de la cabecera municipal de Santa Rosa a 06º 36´ 23” de latitud Norte 
        y a 75º 14´ 90” de longitud occidental, con una temperatura promedio de 
        19ºC. y a una altura de 1.940 metros sobre el nivel del mar. Su vía de 
        acceso principal es la carretera Medellín-Barbosa-Porce-San Pablo con 
        una extensión de 83 Km., de los cuales 70 son pavimentados y el resto 
        en carretera destapada. También tiene comunicación por carretera entre 
        San Pablo y la cabecera municipal de Santa Rosa con una extensión de 40 
        Km. sin pavimentar.<br />
        Este corregimiento limita con los municipios de Gómez Plata y Carolina, 
        al Norte; Don Matías y Santo Domingo, al Sur; el corregimiento de San 
        Isidro (Santa Rosa de Osos) y vereda de Caruquia (Santa Rosa de Osos), 
        al Occidente; y con los municipios de Yolombó y Gómez Plata, al Oriente.</p>
      <p align="justify"> Existe entre la población un sentido de pertenencia 
        muy marcado y es de resaltar la forma como se puede evidenciar el sentido 
        de solidaridad de toda la comunidad; elementos que contribuyen para que 
        el corregimiento se interese más por la educación de sus habitantes, creando 
        un verdadero espacio de paz y tolerancia.<br />
        Dentro de los mitos que tiene la región destacamos: La mula de tres patas, 
        La figura humana, El carro fantasma, La mata de Salvia, El animero, La 
        niña pérdida y El perro con cadenas.</p>
      <p align="justify"> Con los pueblos vecinos como Gómez Plata, Carolina, 
        Barbosa, Santiago y Porce se realizan intercambios de ganado, especies 
        menores y productos agrícolas, como también intercambios culturales y 
        deportivos en forma amistosa.<br />
        Por el hecho de encontrarse entre el clima frío como el de la cabecera 
        municipal y el clima cálido como el de la cuenca del río Grande y río 
        Porce, la idiosincrasia de la gente es muy diferente a la de las regiones 
        mencionadas<br />
      </p>
            
      <p> 
         <?php
if (isset($_SESSION['TIPO'])){			
		if ($_SESSION['TIPO'] == "ADMINISTRADOR"){
		echo "\n <a href='MENU_ADMINISTRADOR.php'><center><img src=regresar.fw.png width=70 height=70 /></center></a>";
		} else {
		if ($_SESSION['TIPO'] == "MAESTRO"){
		echo "\n <a href='MENU_MAESTROS.php'><center><img src=regresar.fw.png width=70 height=70 /></center></a>";
		} else {
		if ($_SESSION['TIPO'] == "ESTUDIANTE"){
		echo "\n <a href='MENU_ESTUDIANTES.php'><center><img src=regresar.fw.png width=70 height=70 /></center></a>";
		}else{
		if ($_SESSION['TIPO'] == "PADRE DE FAMILIA"){
		echo "\n <a href='MENU_PADRES_DE_FAMILIA.php'><center><img src=regresar.fw.png width=70 height=70 /></center></a>";
		}else{
		echo "\n <a href='index.php'><center><img src=regresar.fw.png width=70 height=70 /></center></a>";
		}
		}
		}
		}
		
}else{
		echo "\n <a href='index.php'><center><img src=regresar.fw.png width=90 height=90 /></center></a>";
}
		?>
      </p>
          </div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.<br/>
    	</p>
    </div>
</div>
</body>
</html>
