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
                <li><a href="MENU_MAESTROS_ACT_VER.php">Actividades y Mensajes</a></li>			   				
                <li class="active"><a href="MENU_MAESTROS_MATERIAS.php">Materias Asigandas</a></li>
       			<li><a href="MENU_MAESTROS_ESTUDIANTES.php">Estudiantes Asignados</a></li>
			    <li><a href="MENU_MAESTROS_PERFIL.php">Perfil</a></li>
                
                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
          
          
      </div>
    	
    <div id="right-part"> 
      <div align="center">
        <p>&nbsp;</p>
        <table width="75%" border="10">
		
		
		
         <tr bgcolor="#990000"> 
    <td width="17%"><div align="center"><font size="2"><strong><font color="#FFFFFF">IDENTIFICACION</font></strong></font></div></td>
    <td width="57%"><div align="center"><font size="2"><strong><font color="#FFFFFF">NOMBRE</font></strong></font></div></td>
    <td width="10%"><div align="center"><font size="2"><strong><font color="#FFFFFF">GRADO</font></strong></font></div></td>

  </tr>
		  
		  <?php

			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		  $ID=$_SESSION["ID1"];
		  $sql = mysql_query("SELECT ID,NOMBRE_M,GRADO FROM MATERIA  WHERE ID_MAESTRO='$ID' ORDER BY NOMBRE_M,ID", $link); 
          while ($row1 = mysql_fetch_array($sql)){ 
		  echo "<tr>";
		  echo "<td>".$row1['ID']."</td>";		  
		  echo "<td>".$row1['NOMBRE_M']."</td>";		  
		  echo "<td>".$row1['GRADO']."</td>";		  		  		  		  
		  		  		  		  		  
		  echo "</tr>";
		  
		  }
		  
		 
?>
        </table>
      </div>
      <div align="center">
        <p>&nbsp;</p>
        <p><a href="/reporte_materia_maestros.php"><img src="/imprimir.fw.png" width="150" height="40" border="0" /></a></p>
      </div>
      <h1 align="center"><a href="/MENU_MAESTROS.php"><img src="INICIO_.fw.png" alt="" width="70" height="70" /></a></h1>
    </div>
  </div>
  <div id="footer">
<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
