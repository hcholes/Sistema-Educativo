﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
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
                <li><a href="MENU_ADMINISTRADOR_NOTAS_VER.php">Ver Notas</a></li>
                <li class="active"><a href="MENU_ADMINISTRADOR_NOTAS_AD.php">Adicionar  Registro de Notas</a></li>
                 <li><a href="MENU_ADMINISTRADOR_NOTAS_ELI.php">Eliminar  Registro de Notas</a></li>
                 <li><a href="MENU_ADMINISTRADOR_NOTAS_MOD.php">Modificar  Registro de Notas</a></li>
                
                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	<div id="right-part">
       	  <h1 align="center">
            <img src="Procedimiento_notas.fw.png" width="495" height="60" alt="PROC_MATERIA" /></h1>
       	  <form id="form1" method="post" action="MENU_ADMINISTRADOR_NOTAS_AD2.php">
       	    
        <table width="77%" border="0" align="center">
          <tr> 
            <td width="50%"><div align="right"><strong>MATERIA:</strong></div></td>
            <td width="50%"><div align="left"><strong> 
                <select name="MATERIA">
                  <?php 
				  if (($_POST["GRADO"]=="")){
				 header("Location: /MENU_ADMINISTRADOR_NOTAS_AD.php");
exit();
		}
			$GRADO=$_POST["GRADO"];
			$_SESSION["GRADO"]=$GRADO;
			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		
		  $result = mysql_query("SELECT DISTINCT ID FROM MATERIA WHERE GRADO='$GRADO'", $link); 
          while ($row = mysql_fetch_array($result)){ 
			  echo "<option >".$row['ID']."</option>";
		  }
		?>
                </select>
                <input name="button3" type='button' onclick="AbreVentanaModal3()" value="..." />
                </strong></div></td>
          </tr>
          <tr> 
            <td><div align="right"><strong>ESTUDIANTE:</strong></div></td>
            <td><strong> 
              <select name="ESTUDIANTE" id="select">
                <?php 
			$GRADO=$_POST["GRADO"];
			
			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		
		  $result = mysql_query("SELECT DISTINCT ID FROM ENTRADA WHERE GRADO='$GRADO' AND TIPO='ESTUDIANTE'", $link); 
          while ($row = mysql_fetch_array($result)){ 
			  echo "<option >".$row['ID']."</option>";
		  }
		?>
              </select>
              <input name="button" type='button' onclick="AbreVentanaModal()" value="..." />
              </strong></td>
          </tr>
          <tr> 
            <td><div align="right"><strong>PERIODO: </strong></div></td>
            <td><div align="left"><strong> 
                <select name="PERIODO">
                  <option>PRIMER</option>
                  <option>SEGUNDO</option>
                  <option>TERCER</option>
                  <option>CUARTO</option>
                </select>
                </strong></div></td>
          </tr>
          <tr> 
            <td><div align="right"><strong>AÑO:</strong></div></td>
            <td><div align="left"><strong> 
                <select name="AÑO">
                  <option>2013</option>
                </select>
                </strong> </div></td>
          </tr>
          <tr> 
            <td colspan="2"> <div align="center"> 
                <input type="submit" name="Submit" value="Enviar" />
              </div></td>
          </tr>
        </table>
       	    <div align="right"></div>
       	    <p>&nbsp;</p>
   	      </form>
       	  <p align="center">
       	    
   	      </p>
       	  
      <p align="center"><a href="MENU_ADMINISTRADOR_NOTAS_AD.php"><img src="regresar.fw.png" alt="" width="70" height="70" /></a></p>
    
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
datos=showModalDialog('lista_estudiantes_NOTAS_ADM.php',datos,'status:no;resizable:yes'); 
} 
function AbreVentanaModal2(){ 
datos=showModalDialog('lista_maestros2.php',datos,'status:no;resizable:yes'); 
} 
function AbreVentanaModal3(){ 
datos=showModalDialog('lista_materias2.php',datos,'status:no;resizable:yes'); 
} 
</SCRIPT> 