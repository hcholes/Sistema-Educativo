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
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
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
                <li><a href="MENU_MATERIAS_VER.php">Ver Materias Creadas</a></li>
                <li class="active"><a href="MENU_MATERIAS_AD.php">Crear Materias</a><a href="MENU_MAESTROS_AD.php"></a><a href="#"></a></li>
                <li><a href="MENU_MATERIAS_ELI.php">Eliminar Materias</a><a href="MENU_MAESTROS_ELI.php"></a><a href="MENU_MATERIAS_VER.php"></a><a href="#"></a></li>
                <li><a href="MENU_MATERIAS_MOD.php">Modificar Materias</a><a href="MENU_MAESTROS_MOD.php"></a><a href="#"></a></li>
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	<div id="right-part">
       	  <h1 align="center">
            <img src="Creacion_materias.fw.png" width="495" height="60" alt="PROC_MATERIA" /></h1>
       	  <form id="form1" method="post" action="CREACION_MATERIA_AD.php">
       	    <p>&nbsp;</p>
       	    <div align="center">
       	      <?php
	if ($_SESSION['MENSAJE']=="MATERIA_ELIMINADA") {
		$_SESSION['MENSAJE']="";
	}else{	
	if ($_SESSION['MENSAJE']=="MATERIA_MODIFICADA") {
		$_SESSION['MENSAJE']="";
	}else{		
				echo $_SESSION['MENSAJE'];
	}
	}
	
	
		?>
   	        </div>
       	    
        <table width="96%" border="1" align="center">
          <tr> 
            <td align="center" bgcolor="#990000"><strong>CODIGO</strong></td>
            <td align="center" bgcolor="#990000"><strong>NOMBRE</strong></td>
            <td align="center" bgcolor="#990000"><strong>GRADO</strong></td>
            <td align="center" bgcolor="#990000"><strong>ID MAESTRO</strong></td>
          </tr>
          <tr> 
            <td height="52"> <input name="ID" type="text" size="15" /></td>
            <td><select name="NOMBRE">
                <option>--</option>
                <option>CIENCIAS ECONOMICAS Y POLITICAS</option>
                <option>CIENCIAS NATURALES Y EDUCACION AMBIENTAL</option>
                <option>CIENCIAS SOCIALES</option>
                <option>EDUCACION ARTISTICA</option>
                <option>EDUCACION ETICA Y VALORES HUMANOS</option>
                <option>EDUCACION FISICA</option>
                <option>EDUCACION RELIGIOSA</option>
                <option>EMPRENDIMIENTO</option>
                <option>FILOSOFIA</option>
                <option>FISICA</option>
                <option>INGLES</option>
                <option>ESPAÑOL</option>
                <option>MATEMATICAS</option>
                <option>QUIMICA</option>
                <option>TECNOLOGIA E INFORMATICA</option>
              </select></td>
            <td><select name="GRADO1">
                <option selected="selected">--</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
              </select> <select name="GRADO2">
                <option>--</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>E</option>
                <option>F</option>
              </select></td>
            <td><label for="textfield"></label> <div align="center"> 
                <select name="ID_MAESTRO" id="ID_MAESTRO">
                  <option>--</option>
                  <?php 
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
       
		  $result = mysql_query("SELECT * FROM ENTRADA WHERE TIPO='MAESTRO'", $link); 
          while ($row = mysql_fetch_array($result)){ 
		        echo "<option >".$row['ID']."</option>";
		     }
		     ?>
                </select>
                <strong> 
                <input name="button2" type='button' onclick="AbreVentanaModal()" value="..." />
                </strong></div></td>
          </tr>
        </table>
       	    <p align="center">
       	      <input type="submit" name="Submit" value="Crear Materia" />
   	        </p>
   	      </form>
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
datos=showModalDialog('lista_maestros.php',datos,'status:no;resizable:yes'); 
} 
</SCRIPT> 