<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
if ($_SESSION['ID1']==""){
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
                <li><a href="VER_NOTAS_MAESTROS1.php">Notas</a></li>
                <li><a href="MENU_DOCUMENTOS.php">Archivos</a></li>
                <li><a href="MENU_MAESTROS_ACT_VER.php">Mensajes</a></li>			   				
                <li><a href="MENU_MAESTROS_MATERIAS.php">Materias Asigandas</a></li>				
				<li><a href="MENU_MAESTROS_ESTUDIANTES.php">Estudiantes Asignados</a></li>
                <li><a href="MENU_MAESTROS_PERFIL.php">Perfil</a></li>
                
                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
          
          <p><a href="HORAS_LABORALES.PHP">HORAS LABORALES </a></p>
          <p><a href="HORAS_ESCOLARES.PHP">HORAS  ESCOLARES</a></p>
          <p><a href="RESP_DEP.PHP">RESPONSABLES Y DEPENDENCIAS</a></p>
          <p><a href="RECURSOS_INSTITUCIONALES.PHP">RECURSOS INSTITUCIONALES</a></p>
      </div>
    	<div id="right-part">
       	   <h1 align="center">Bienvenido(a) Maestro(a)</h1>
      <h1 align="center">Seleccione su opción en el menú principal</h1>
      <p align="center"><img src="/profes.png" /></p>
       	  <p align="center">
       	    
   	      </p>
       	  <p align="center"></p>
    
      </h1></div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
