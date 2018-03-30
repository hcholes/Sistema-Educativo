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
                <li class="active"><a href="MENU_MATERIAS_VER.php">Ver Materias Creadas</a></li>
                <li><a href="MENU_MATERIAS_AD.php">Crear Materias</a><a href="MENU_MAESTROS_AD.php"></a></li>
                <li><a href="MENU_MATERIAS_ELI.php">Eliminar Materias</a><a href="MENU_MAESTROS_ELI.php"></a></li>
                <li><a href="MENU_MATERIAS_MOD.php">Modificar Materias</a><a href="MENU_MAESTROS_MOD.php"></a></li>
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a>
              </li>
          </ul>
            
            
        </div>
    	<div id="right-part">
       	  
      <h1 align="center"> <img src="Materias_registradas.fw.png" width="495" height="60" alt="PROC_MATERIA" /></h1>
       	  <form id="form1" method="post" action="CREACION_MATERIA_AD.php">
       	    
        <table width="98%" border="1">
          <tr bgcolor="#FF0000"> 
            <td> 
              <div align="center"><font color="#FFFFFF"><strong>CODIGO</strong></font></div></td>
       	        
            <td> 
              <div align="center"><font color="#FFFFFF"><strong>NOMBRE</strong></font></div></td>
       	        
            <td> 
              <div align="center"><font color="#FFFFFF"><strong>GRADO</strong></font></div></td>
       	        
            <td> 
              <div align="center"><font color="#FFFFFF"><strong>ID MAESTRO</strong></font></div></td>
   	          </tr>
       	      <?php
		  
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 


			$result = mysql_query("SELECT * FROM MATERIA ORDER BY NOMBRE_M,ID", $link); 
			while ($row = mysql_fetch_array($result)){ 
			
			echo "<tr>";
			echo "<td><center>".$row["ID"]."</center></td>";
			echo "<td><center>".$row["NOMBRE_M"]."</center></td>";
			echo "<td><center>".$row["GRADO"]."</center></td>";
			echo "<td><center>".$row["ID_MAESTRO"]."</center></td>";
				echo "</tr>";
			
			
			}
		  
		 
$_SESSION['MENSAJE']="";
$_SESSION['ID_MATERIA']="";
$_SESSION['NO_MATERIA']="";	
$_SESSION['GR_MATERIA']="";
$_SESSION['ID_MAESTRO']="";
		  ?>
   	        </table>
        <p align="center"><a href="REPORTE3.PHP"><img src="imprimir.fw.png" alt="" width="150" height="50" /></a></p>
   	      </form>
       	
       	 
    
      </h1>
      <div align="center"><a href="MENU_ADMINISTRADOR.php"><img src="INICIO_.fw.png" alt="" width="70" height="70" /></a></div>
   	  </div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
