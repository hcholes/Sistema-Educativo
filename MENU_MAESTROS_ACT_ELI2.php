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
              <li><a href="MENU_MAESTROS_ACT_VER.php">Ver Mensajes</a></li>
                <li><a href="MENU_MAESTROS_ACT_AD.php">Agregar Mensaje</a></li>
                <li  class="active"><a href="MENU_MAESTROS_ACT_ELI.php">Eliminar Mensaje</a></li>
                    
                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	<div id="right-part">
       	  <h1 align="center"><img src="actividades_eli.png" width="495" height="60" alt="PROC_MATERIA" /></h1>
       	  <form action="CREACION_ACTIVIDAD_AD.php" method="post" enctype="multipart/form-data">
       	  <p>
   	        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
       	  </p>
       	  <table width="56%" height="149" border="0" align="center">
       	      <tr>
       	        <td width="100%"><div align="center">  <p align="center">
                <?php
				if ($_POST["MATERIA"]==""){
				header("Location: /MENU_MAESTROS_ACT_ELI.php");	
				}
				$ID_MAESTRO=$_SESSION["ID1"];
				$MATERIA=$_POST["MATERIA"];
				$GRADO=$_POST["GRADO"];
				$PERIODO=$_POST["PERIODO"];
				$AÑO=$_POST["ANO"];
				
				 $link = mysql_connect("localhost", "root", ""); 
		        mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		   $sql = "DELETE FROM ACTIVIDADES WHERE ID_MATERIA='$MATERIA' AND GRADO='$GRADO' AND PERIODO='$PERIODO' AND ANO='$AÑO' AND ID_MAESTRO='$ID_MAESTRO'"; 		   $result = mysql_query($sql);
		   if (! $result){
			   echo $sql;
			   exit;
		  echo "EXISTE ERRORES EN EL PROCESO DE CREACION";
		  }else{
 echo "PROCESO EXITOSO!";

}
		  
		  
		  
		 

				?>
                
                </p>
       	          <p align="center">&nbsp;</p>
       	          
                <p align="center"><a href="MENU_MAESTROS_ACT_eli.php"><img src="regresar.fw.png" alt="" width="70" height="70" /></a></p>
       	        </div></td>
   	          </tr>
   	        </table>
                                    	 
       	  </form>
  
    
      </h1></div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
