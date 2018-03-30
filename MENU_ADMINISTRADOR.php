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
   	  <h1 class="logo"><a href="index.php"><img src="LOGO.fw.png" alt="" width="353" height="68" /></a></h1>
    	
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
				<li><a href="MENU_ADMINISTRADOR_ESTUDIANTES.php">Lista de Estudiantes</a></li> 
                <li><a href="MENU_ADMINISTRADOR_DOC.php">Archivos</a></li>
                <li><a href="MENU_ADMINISTRADOR_ACT_ver.php">Mensajes</a></li>

                                
                
               
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
			<p> <a href="PERFIL_EGRESADO.PHP">PERFIL DEL EGRESADO</a> </p>
			 <p><a href="HORAS_LABORALES.PHP">HORAS LABORALES </a></p>
          <p><a href="HORAS_ESCOLARES.PHP">HORAS  ESCOLARES</a></p>
          <p><a href="RESP_DEP.PHP">RESPONSABLES Y DEPENDENCIAS</a></p>
          <p><a href="RECURSOS_INSTITUCIONALES.PHP">RECURSOS INSTITUCIONALES</a></p>
		  <p><a href="CONCEJO_ACADEMICO.PHP">CONCEJO ACADEMICO</a> </p>
          <p><a href="PADRES_DE_FAMILIA.php">PADRES DE FAMILIA</a></p>
          <p><a href="PERSONERO.php">PERSONERO</a></p>
            
        </div>
    	
    <div id="right-part"> 
      <p align="center"><font size="4">Bienvenido(a) Administrador!</font></p>
      <p align="center"><font size="4">Seleccione su opción en el menú principal 
        </font> </p>
      <p align="center"> <img src="/ADMINISTRADOR.jpg" width="226" height="223" /></p>
        	</div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
