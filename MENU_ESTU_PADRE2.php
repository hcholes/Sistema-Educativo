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
?><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
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
                <li><a href="MENU_ESTU_PADRE_VER.php">Relaciones Existentes</a></li>
                <li class="active"><a href="MENU_ESTU_PADRE.php">Relacionar Estudiante Padre</a></li>
                <li><a href="MENU_ESTU_PADRE_ELIMINAR.php">Eliminar Relacion</a></li>
<!--                 <li><a href="MENU_ADMINISTRADOR_ELI_DOC.php">Eliminar Documentos</a></li>
    -->            
                
                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	
    <div id="right-part"> 
      <h1 align="center"><img src="AGREGAR_RELACION.fw.png" width="495" height="60" alt="PROC_MATERIA" /></h1>
      <p align="center"></p>
      <p align="center">
        <?php 
		
		if (($_POST["estudiante"]=="") or ($_POST["padre"]=="")){
				 header("Location: /MENU_ESTU_PADRE.php");
exit();
		}
			$estudiante=$_POST["estudiante"];
			$padre=$_POST["padre"];
            $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
        $sw=0;
		$result = mysql_query("SELECT * FROM estudiante_padre WHERE ID_ESTUDIANTE='$estudiante' AND ID_PADRE='$padre'", $link); 
        if ($row = mysql_fetch_array($result)){ 
		echo "<img src=/RELACION_ERROR.png />";
			echo "<br>EL REGISTRO NO SE PUEDE COMPLETAR, YA EXISTE UN REGISTRO IGUAL";
			$sw=1;
		}
		
		
		if ($sw==0){
		$result = mysql_query("SELECT * FROM estudiante_padre WHERE ID_PADRE='$padre'", $link); 
        if ($row = mysql_fetch_array($result)){ 
		echo "<img src=/RELACION_ERROR.png />";
			echo "<br>EL PADRE DE FAMILIA TIENE UN RELACION ASIGNADA A OTRO ESTUDIANTE";
			$sw=1;
		}
		}
		
		
		if ($sw==0){
		$sql="INSERT INTO ESTUDIANTE_PADRE(ID_ESTUDIANTE,ID_PADRE) VALUES ('$estudiante','$padre')";
        $result = mysql_query($sql);
		if (! $result){
		echo "<img src=/RELACION_ERROR.png />";
	    echo "<br>no se pudo existe errores";
		   }else{

			echo "<img src=/RELACION_OK.png />";
			echo "<br>PROCESO EXITOSO";
		}
		}
		  
		?>
      </p>
       	  
      <p align="center"><a href="MENU_ESTU_PADRE.php"><img src="regresar.fw.png" alt="" width="70" height="70" /></a></p>
    
      </h1></div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
