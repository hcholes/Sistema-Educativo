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
                 <li><a href="MENU_PADRES_DE_FAMILIA_NOTAS.PHP">Notas</a></li>
               <li><a href="MENU_PADRES_DE_FAMILIA_ACT_VER.php">Mensajes</a></li>			   
			   <li class="active"><a href="MENU_PADRES_DE_FAMILIA_MATERIAS.PHP">Materias Asignadas</a></li>			   			   
               <li><a href="MENU_PADRES_DE_FAMILIA_PERFIL.PHP">Perfil</a></li>
                   
                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
          
          
      </div>
    	
    <div id="right-part"> 
      <div align="center"> 
        <p>LAS MATERIAS ASIGNADAS A 
          <?php 
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		 $ID=$_SESSION["ID1"];
		  $result = mysql_query("SELECT DISTINCT ID_ESTUDIANTE FROM ESTUDIANTE_PADRE WHERE ID_PADRE ='$ID'", $link); 
          if ($row = mysql_fetch_array($result)){ 
		  $idest=$row["ID_ESTUDIANTE"];
		  }
		  
		  $result = mysql_query("SELECT DISTINCT NOMBRE,APELLIDO FROM ENTRADA WHERE ID ='$idest'", $link); 
          if ($row = mysql_fetch_array($result)){ 
		  echo $row["NOMBRE"]." ".$row["APELLIDO"];
		  }
		?>
          SON: </p>
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
		  $result = mysql_query("SELECT DISTINCT ID_ESTUDIANTE FROM ESTUDIANTE_PADRE WHERE ID_PADRE ='$ID'", $link); 
          if ($row = mysql_fetch_array($result)){ 
		  $idest=$row["ID_ESTUDIANTE"];
		  }
		  $result = mysql_query("SELECT DISTINCT GRADO FROM ENTRADA WHERE ID ='$idest'", $link); 
          if ($row = mysql_fetch_array($result)){ 
		  $GRADOest=$row["GRADO"];
		  }
		  
		  $result = mysql_query("SELECT ID,NOMBRE_M,GRADO FROM MATERIA  WHERE GRADO='$GRADOest' ORDER BY NOMBRE_M,ID", $link); 
          while ($row1 = mysql_fetch_array($result)){ 
		  echo "<tr>";
		  echo "<td>".$row1['ID']."</td>";		  
		  echo "<td>".$row1['NOMBRE_M']."</td>";		  
		  echo "<td>".$row1['GRADO']."</td>";		  		  		  		  
		  		  		  		  		  
		  echo "</tr>";
		  
		  }
		?>
		
        </table>
      </div>
      <div align="center"></div>
      <h1 align="center"><a href="/MENU_PADRES_DE_FAMILIA.php"><img src="INICIO_.fw.png" alt="" width="70" height="70" /></a></h1>
    </div>
  </div>
  <div id="footer">
<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
