<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}
if ($_SESSION['TIPO']<>"MAESTRO"){
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
             <li><a href="VER_NOTAS_MAESTROS1.php">Ver Notas</a></li>
                <li><a href="ADICION_NOTAS.php">Adicionar Registro de Notas</a></li>
                 <li class="active"><a href="MENU_MAESTRO_NOTAS_ELI.php">Eliminar Registro de Notas</a></li>
                 <li><a href="MENU_MAESTRO_NOTAS_MOD.php">Modificar Registro de Notas</a></li>
                 
                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	<div id="right-part">
       	  <h1 align="center">
            <img src="Procedimiento_notas.fw.png" width="495" height="60" alt="PROC_MATERIA" /></h1>
       	  <form id="form1" method="post" action="ELIMINAR_NOTAS_MAESTRO.php">
       	    
        <table width="41%" border="0" align="center">
          <tr> 
            <td><div align="right"><strong>Materia:</strong></div></td>
            <td><div align="left"><strong> 
                <select name="MATERIA">
                  <?php 
			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		 $ID=$_SESSION['ID1'];
		  $result = mysql_query("SELECT DISTINCT ID_MATERIA FROM NOTAS WHERE ID_MAESTRO='$ID'", $link); 
          while ($row = mysql_fetch_array($result)){ 
			 echo "<option >".$row['ID_MATERIA']."</option>";
			  
		  }
		?>
                </select>
                <input name="button2" type='button' onclick="AbreVentanaModal2()" value="..." />
                </strong></div></td>
          </tr>
          <tr> 
            <td><div align="right"><strong>Estudiante: </strong> </div></td>
            <td> <div align="left"><strong> 
                <select name="ESTUDIANTE1" id="ESTUDIANTE">
                  <?php 
			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		 $ID=$_SESSION['ID1'];
		  $result = mysql_query("SELECT DISTINCT ID_ESTUDIANTE FROM NOTAS WHERE ID_MAESTRO='$ID' ", $link); 
          while ($row = mysql_fetch_array($result)){ 
		  echo "<option >".$row['ID_ESTUDIANTE']."</option>";
		  }
		  
		
		?>
                </select>
                <input type='button' onclick="AbreVentanaModal()" value="..."> 
				
                </strong> </div></td>
          </tr>
          <tr> 
            <td><div align="right"><strong>Grado: </strong> </div></td>
            <td> <div align="left"> 
                <select name="GRADO">
                  <?php 
			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		 $ID=$_SESSION['ID1'];
		  $result = mysql_query("SELECT DISTINCT GRADO FROM NOTAS WHERE ID_MAESTRO='$ID' ORDER BY GRADO", $link); 
          while ($row = mysql_fetch_array($result)){ 
		
		  echo "<option >".$row['GRADO']."</option>";
		  }
		?>
                </select>
              </div></td>
          </tr>
          <tr> 
            <td align="right"><div align="right"><strong>Periodo:</strong></div></td>
            <td align="right"> <div align="left"> 
                <select name="PERIODO" id="select">
                  <?php 
			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		 $ID=$_SESSION['ID1'];
		  $result = mysql_query("SELECT DISTINCT PERIODO FROM NOTAS WHERE ID_MAESTRO='$ID'", $link); 
          while ($row = mysql_fetch_array($result)){ 
		
		  echo "<option >".$row['PERIODO']."</option>";
		  }
		?>
                </select>
              </div></td>
          </tr>
          <tr> 
            <td align="center"><div align="right"><strong>Año: </strong> </div></td>
            <td align="center"> <div align="left"> 
                <select name="ANO" id="ANO">
                  <?php 
			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		 $ID=$_SESSION['ID1'];
		  $result = mysql_query("SELECT DISTINCT ANO FROM NOTAS WHERE ID_MAESTRO='$ID'", $link); 
          while ($row = mysql_fetch_array($result)){ 
		
		  echo "<option >".$row['ANO']."</option>";
		  }
		?>
                </select>
              </div></td>
          </tr>
          <tr> 
            <td colspan="2" align="center"> <div align="center"> 
                <input type="submit" name="Submit" value="ELIMINAR" />
              </div></td>
          </tr>
        </table>
       	    
        <div align="right"></div>
       	    
        <p align="center"><a href="MENU_MAESTROS.php"><img src="INICIO_.fw.png" alt="" width="70" height="70" border="0" /></a></p>
       	    </form>
       	
    
      </h1></div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
<SCRIPT> 
//creamos una variable de tipo array para pasar y recuperar los datos 
var datos=new Array(); 

function AbreVentanaModal(){ 
datos=showModalDialog('lista_estudiantes_notas.php',datos,'status:no;resizable:yes'); 
} 
function AbreVentanaModal2(){ 
datos=showModalDialog('lista_materias_notas.php',datos,'status:no;resizable:yes'); 
} 
</SCRIPT> 