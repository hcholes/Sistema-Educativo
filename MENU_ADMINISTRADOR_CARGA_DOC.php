<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}
if ($_SESSION['TIPO']<>"ADMINISTRADOR"){
	 header("Location: /index.php");

}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="bred<" />
	<meta name="keywords" content="bred<" />
	<meta name="description" content="bred<" />
	<meta name="robots" content="all" />
	<title>IE RURAL PORFIRIO BARBA JACOB</title>

	<style type="text/css" title="currentStyle" media="screen">
		@import "./css/global.css";
	</style>
    
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
      <link rel="shortcut icon" href="ESCUDO.ico">
</head>

<body>
<div id="wrapper">
	<div id="top">
    	<h1 class="logo"><a href="index.html"><img src="LOGO.fw.png" alt="" width="353" height="68" /></a></h1>
    	
    	<ul id="topnavi">
		    <li><a href="index.php">INICIO</a></li>
        	<li><a href="INSTITUCION.PHP">INSTITUCION</a></li>
        	<li><a href="MISION.PHP">MISION</a></li>
        	<li><a href="VISION.PHP">VISION</a></li>
        	<li><a href="POLITICAS.PHP">POLITICAS</a></li>
        	<li><a href="CONTACTENOS.PHP">CONTACTENOS</a></li>
      </ul>
    </div>
    <div id="header"><img src="logo.png" alt="" width="998" height="183" /></div>
    <div id="main">
		<div class="ic"></div>
    	<div id="left-part">
       	  <h1><font size="+0">Bienvenido señor(a) 
        	  <?php

echo $_SESSION['NOM1'];
?>
                <br />
        	</font></h1>
            <ul id="subnavi">
                <li class="active">
                  <div align="center">Menu principal</div>
                </li>
                     <li><a href="MENU_ADMINISTRADOR_DOC_VER.php">Ver Documentos</a></li>
                <li><a href="MENU_ADMINISTRADOR_SUBIR_DOC.php">Subir Documentos</a></li>
                 <li><a href="MENU_ADMINISTRADOR_ELI_DOC.php">Eliminar Documentos</a></li>
                
                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	<div id="right-part">
       	  <h1 align="center"><font size="+0">
       	    <?php 
if (($_POST["MATERIA"]=="") or ($_POST["GRADO"]=="")) {
				header("Location: /MENU_ADMINISTRADOR_SUBIR_DOC.php");	
				}
$MATERIA=$_POST["MATERIA"]; 
if ($MATERIA=="ESPAÑOL"){
$MATERIA="ESPANOL";
}
if ($MATERIA=="CIENCIAS ECONOMICAS Y POLITICAS"){
$MATERIA="CIENCIAS_ECONOMICAS_Y_POLITICAS";
}
if ($MATERIA=="CIENCIAS NATURALES Y EDUCACION AMBIENTAL"){
$MATERIA="CIENCIAS_NATURALES_Y_EDUCACION_AMBIENTAL";
}
if ($MATERIA=="CIENCIAS SOCIALES"){
$MATERIA="CIENCIAS_SOCIALES";
}
if ($MATERIA=="EDUCACION ARTISTICA"){
$MATERIA="EDUCACION_ARTISTICA";
}
if ($MATERIA=="EDUCACION ETICA Y VALORES HUMANOS"){
$MATERIA="EDUCACION_ETICA_Y_VALORES_HUMANOS";
}
if ($MATERIA=="EDUCACION FISICA"){
$MATERIA="EDUCACION_FISICA";
}
if ($MATERIA=="EDUCACION RELIGIOSA"){
$MATERIA="EDUCACION_RELIGIOSA";
}
if ($MATERIA=="TECNOLOGIA E INFORMATICA"){
$MATERIA="TECNOLOGIA_E_INFORMATICA";
}
$GRADO=$_POST["GRADO"]; 


//$serv = $_SERVER['DOCUMENT_ROOT'] . '/descargas/';

//$ruta = $serv . $GRADO . "/" . $MATERIA;
//echo $ruta;
//mkdir ($ruta);

//tomo el valor de un elemento de tipo texto del formulario 

//datos del arhivo 

$nombre_archivo = $_FILES['userfile']['name']; 
$tipo_archivo = $_FILES['userfile']['type']; 
$tamano_archivo = $_FILES['userfile']['size']; 


$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/descargas/';
$uploadfile = $uploaddir .$GRADO."/".$MATERIA."/".basename($_FILES['userfile']['name']);

//compruebo si las características del archivo son las que deseo 
if ((($tipo_archivo=="gif") or ($tipo_archivo=="jpeg") or ($tipo_archivo=="doc") or ($tipo_archivo=="docx") or ($tipo_archivo=="pdf") or ($tipo_archivo=="xls") or ($tipo_archivo=="xlsx") or ($tipo_archivo=="zip") or ($tipo_archivo=="mp3")) and ($tamano_archivo < 104857600)) {
//if (((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")  || strpos($tipo_archivo, "doc") || strpos($tipo_archivo, "docx") || strpos($tipo_archivo, "pdf") || strpos($tipo_archivo, "xls") || strpos($tipo_archivo, "xlsx") || strpos($tipo_archivo, "zip")) && ($tamano_archivo < 104857600))) { 
   	echo "Nombre del Archivo: ".$nombre_archivo."<BR>";
echo "Tipo del Archivo: ".$tipo_archivo."<BR>";
echo "Tamaño del Archivo: ".$tamano_archivo." Kb<BR><BR><BR>";
	echo "Existe error en la extensión o el tamaño del Archivo. <br><br><table><tr><td><li>Verificar el tipo, solo se permiten archivos .gif , .jpg , .doc , .docx , .xls , .xlsx , .pdf, zip<br><li>se permiten archivos de (104857600) máximo.</td></tr></table>"; 

}else{ 
   	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){ 
			echo "Nombre del Archivo: ".$nombre_archivo."<BR>";
			echo "Tipo del Archivo: ".$tipo_archivo."<BR>";
			echo "Tamaño del Archivo: ".$tamano_archivo." Kb<BR><BR><BR>";      	 
		 echo "El archivo ha sido cargado correctamente."; 
		
   	}else{ 
	echo "Nombre del Archivo: ".$nombre_archivo."<BR>";
	echo "Tipo del Archivo: ".$tipo_archivo."<BR>";
	echo "Tamaño del Archivo: ".$tamano_archivo." Kb<BR><BR><BR>";
      	 echo "Ocurrió algún error al subir el fichero. No pudo guardarse."; 
		    	
		
   	} 
} 
?>
   	      </font></h1>
       	  
      <p align="center"><a href="MENU_ADMINISTRADOR_SUBIR_DOC.PHP"><img src="regresar.fw.png" alt="" width="70" height="70" /></a></p>
    
      </h1></div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
