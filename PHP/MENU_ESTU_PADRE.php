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
       	  <form action="MENU_ESTU_PADRE2.php" method="post" enctype="multipart/form-data">
       	  <p>
   	        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
   	        </p>
       	    
        <table width="86%" border="0" align="center">
          <tr> 
            <td width="23%"><p align="center"><img src="/estudiante.png" width="97" height="94" /></p>
              <p align="center"><strong> 
                <select name="estudiante">
                  <?php 
			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		  $ID=$_SESSION['ID1'];
		  		  $result = mysql_query("SELECT DISTINCT ID FROM ENTRADA WHERE TIPO='ESTUDIANTE'", $link); 
		   while ($row = mysql_fetch_array($result)){ 
		  echo "<option >".$row['ID']."</option>";
		  }
		  
		?>
                </select>
                <input name="button" type='button' onclick="AbreVentanaModal()" value="..." />
                Estudiante</strong></p></td>
            <td width="77%">&nbsp;</td>
            <td width="77%"><div align="center"> 
                <p><img src="/profes.png" width="97" height="94" /></p>
                <p><strong> 
                  <select name="padre" id="select3">
                    <?php 
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		  $ID=$_SESSION['ID1'];
		  $result = mysql_query("SELECT DISTINCT ID FROM ENTRADA WHERE TIPO='PADRE DE FAMILIA'", $link); 
		   while ($row = mysql_fetch_array($result)){ 
		  echo "<option >".$row['ID']."</option>";
		  }
		?>
                  </select>
                  <strong> 
                  <input name="button2" type='button' onclick="AbreVentanaModal2()" value="..." />
                  </strong></strong></p>
                <p><strong>Padre de Familia</strong> <strong> </strong></p>
              </div></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><div align="center"></div></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td><div align="center">
                <input type="submit" name="VER" id="VER2" value="RELACIONAR" />
              </div></td>
            <td><div align="center"> </div></td>
          </tr>
        </table>
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
datos=showModalDialog('lista_estudiantes.php',datos,'status:no;resizable:yes'); 
} 
function AbreVentanaModal2(){ 
datos=showModalDialog('lista_padre_de_familia.php',datos,'status:no;resizable:yes'); 
} 
</SCRIPT> 