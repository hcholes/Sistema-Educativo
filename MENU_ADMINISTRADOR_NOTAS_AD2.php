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
       	  
		   <div align="right">
      <?php
		$_SESSION["MATERIA"]=$_POST["MATERIA"];
		$_SESSION["ESTUDIANTE"]=$_POST["ESTUDIANTE"];
		$_SESSION["PERIODO"]=$_POST["PERIODO"];
		$_SESSION["ANO"]=$_POST["AÑO"];
		
		echo "Grado: ".$_SESSION["GRADO"];
		echo "<br>";
		echo "Materia: ".$_SESSION["MATERIA"];
		echo "<br>";
		echo "Estudiante: ".$_SESSION["ESTUDIANTE"];
		echo "<br>";
		echo "Periodo: ".$_SESSION["PERIODO"];
		echo "<br>";
		echo "Año: ".$_SESSION["ANO"];
		echo "<br>";
		
		
		?>
     </div>
      
      <form id="form1" method="post" action="CREACION_NOTA_ADMINISTRADOR.php">
       	    
        <table width="78%" border="0" align="center">
          <tr> 
            <td width="14%"><p align="center"><strong>Nota1</strong></p>
              <p align="center"><strong> 
                <input name="NOTA1" type="text" id="NOTA1" size="5" maxlength="4" />
                </strong></p></td>
            <td width="15%"><p align="center"><strong>Nota2</strong></p>
              <p align="center"><strong> 
                <input name="NOTA2" type="text" id="NOTA2" size="5" maxlength="4" />
                </strong></p></td>
            <td width="17%"><p align="center"><strong>Nota3</strong></p>
              <p align="center"><strong> 
                <input name="NOTA3" type="text" id="NOTA3" size="5" maxlength="4" />
                </strong></p></td>
            <td width="54%"><p align="center"><strong>Nota4</strong></p>
              <p align="center"><strong> 
                <input name="NOTA4" type="text" id="NOTA4" size="5" maxlength="4" />
                </strong></p></td>
            <td width="54%"><p align="center"><strong>Nota5</strong></p>
              <p align="center"><strong> 
                <input name="NOTA5" type="text" id="NOTA5" size="5" maxlength="4" />
                </strong></p></td>
            <td width="54%"><p align="center"><strong>Nota6</strong></p>
              <p align="center"><strong> 
                <input name="NOTA6" type="text" id="NOTA6" size="5" maxlength="4" />
                </strong></p></td>
            <td width="54%"><p align="center"><strong>Nota7</strong></p>
              <p align="center"><strong> 
                <input name="NOTA7" type="text" id="NOTA7" size="5" maxlength="4" />
                </strong></p></td>
            <td width="54%"><div align="center"> 
                <p><strong>Nota8</strong></p>
                <p><strong> 
                  <input name="NOTA8" type="text" id="NOTA8" size="5" maxlength="4" />
                  </strong></p>
                <strong> </strong></div></td>
          </tr>
          <tr> 
            <td colspan="8"> <div align="center"> 
                <input type="submit" name="Submit" value="Crear" />
              </div></td>
          </tr>
        </table>
		
       	     
        <p align="center"><a href="MENU_ADMINISTRADOR_NOTAS_AD.PHP"><img src="regresar.fw.png" alt="" width="70" height="70" /></a></p>
   	      </form>
       	
       	  
     
    
      </h1></div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
