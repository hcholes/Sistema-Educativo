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
                <li class="active"><a href="MENU_ESTU_PADRE_VER.php">Relaciones Existentes</a></li>
                <li><a href="MENU_ESTU_PADRE.php">Relacionar Estudiante Padre</a></li>
                <li><a href="MENU_ESTU_PADRE_ELIMINAR.php">Eliminar Relacion</a></li>
<!--                 <li><a href="MENU_ADMINISTRADOR_ELI_DOC.php">Eliminar Documentos</a></li>
    -->            
                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	<div id="right-part">
       	  
      <h1 align="center"><img src="RELACIONES_EXISTENTES.png" width="495" height="60" alt="PROC_MATERIA" /></h1>
       
       	    
        <table width="78%" border="1" align="center">
          <tr> 
            
          <td width="36%" bgcolor="#990000">
<p align="center"><strong> Estudiante</strong></p></td>
            <td width="28%">&nbsp;</td>
            
          <td width="36%" bgcolor="#990000">
<div align="center"> 
                
              <p><strong>Padre de Familia</strong> <strong> </strong></p>
            </div></td>
          </tr>
          <?php
           $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 


		$result = mysql_query("SELECT * FROM estudiante_padre", $link); 
        while ($row = mysql_fetch_array($result)){ 
		  echo "<tr>";
		  $id=$row['ID_ESTUDIANTE'];
		$t = mysql_query("SELECT * FROM entrada where id='$id'", $link); 
        if ($w = mysql_fetch_array($t)){ 
		echo "<td><center>".$w['NOMBRE']." ".$w['APELLIDO']."</center></td>";	
        }
		  	  
		  echo "<td><center><img src=flecha.fw.png /></center></td>";		  
		  $id=$row['ID_PADRE'];
		$t = mysql_query("SELECT * FROM entrada where id='$id'", $link); 
        if ($w = mysql_fetch_array($t)){ 
		echo "<td><center>".$w['NOMBRE']." ".$w['APELLIDO']."</center></td>";	
        }
			  
		  echo "</tr>";
		}
?>
        </table>
        
        <table width="78%" border="1" align="center">
        </table>
       	
       	  <p align="center">&nbsp;</p>
       	  
      <p align="center"><a href="MENU_ADMINISTRADOR.php"><img src="INICIO_.fw.png" alt="" width="70" height="70" /></a></p>
    
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
datos=showModalDialog('lista_estudiantes.php',datos,'status:no;resizable:yes'); 
} 
function AbreVentanaModal2(){ 
datos=showModalDialog('lista_padre_de_familia.php',datos,'status:no;resizable:yes'); 
} 
</SCRIPT> 