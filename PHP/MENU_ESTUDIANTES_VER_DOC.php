<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
session_start();
if ($_SESSION['ID1']==""){
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
                <li><a href="MENU_ESTUDIANTES_NOTAS.PHP">Notas</a></li>
                <li class="active"><a href="MENU_ESTUDIANTES_VER_DOC.php">Archivos</a></li>
				  <li><a href="MENU_ESTUDIANTES_ACT_VER.php">Mensajes</a></li>								
			   <li><a href="MENU_ESTUDIANTES_MATERIAS.PHP">Materias Asignadas</a></li>			   				  
                 <li><a href="MENU_ESTUDIANTES_PERFIL.PHP">Perfil</a></li>
                
                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	<div id="right-part">
       	  <h1 align="center"><img src="documentos_reg.fw.png" width="495" height="60" alt="PROC_MATERIA" /></h1>
       	  <form action="MENU_ESTUDIANTES_VER_DOC2.php" method="post" enctype="multipart/form-data">
        <p align="right"> 
          <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
          <font size="4">GRADO: 
          <?php
   echo "<font size=4>".$_SESSION['GRADO']."</font>";
  ?>
          </font> </p>
       	    
        <table width="39%" border="0" align="center">
          <tr> 
            <td><div align="center"><strong>Materia: 
                <select name="MATERIA">
                  <?php 
			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		  $GRADO=$_SESSION['GRADO'];
		  		  $result = mysql_query("SELECT * FROM MATERIA WHERE GRADO = '$GRADO'", $link); 
		   while ($row = mysql_fetch_array($result)){ 
		  echo "<option >".$row['NOMBRE_M']."</option>";
		  }
		  
		?>
                </select>
                </strong></div></td>
          </tr>
          <tr> 
            <td><div align="center"> 
                <input type="submit" name="VER" id="VER" value="Ver" />
              </div></td>
          </tr>
        </table>
       	  </form>
       	  <p align="center">&nbsp;</p>
       	  
      <p align="center"><a href="MENU_ESTUDIANTES.php"><img src="INICIO_.fw.png" alt="" width="70" height="70" /></a></p>
    
      </h1></div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
