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
                 <li><a href="MENU_USUARIOS_VER.php"> Usuarios</a></li>
                <li><a href="MENU_ESTU_PADRE_VER.php">Relacion Padre Estudiante</a></li>
                 <li><a href="MENU_ADMINISTRADOR_NOTAS_VER.php"> Notas</a></li>
                 <li><a href="MENU_MATERIAS_VER.php"> Materias</a><a href="#"></a></li>
				<li class="active"><a href="MENU_ADMINISTRADOR_ESTUDIANTES.php">Lista de Estudiantes</a></li> 
                <li><a href="MENU_ADMINISTRADOR_DOC.php">Archivos</a></li>
                <li><a href="MENU_ADMINISTRADOR_ACT_ver.php">Mensajes</a></li>

                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	<div id="right-part">
       	  
      <h1 align="center"><img src="notas_estudiante.fw.png" alt="" width="495" height="60" /></h1>
      <h1 align="right"> 
        <form id="form1" method="post" action="MENU_ADMINISTRADOR_ESTUDIANTES2.php">
       	    
          <p align="center">Seleccione el grado</p>
          <p align="center"> 
            <select name="GRADO">
              <?php 
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		  
		  $result = mysql_query("SELECT DISTINCT GRADO FROM MATERIA", $link); 
          while ($row = mysql_fetch_array($result)){ 
		  echo "<option >".$row['GRADO']."</option>";
		  }
		?>
            </select>
            <input type="submit" name="Submit" value="VER" />
          </p>
          <p align="center"><a href="MENU_ADMINISTRADOR.php"><img src="INICIO_.fw.png" alt="" width="70" height="70" /></a></p>
   	      </form>
     

    
      </h1></div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
