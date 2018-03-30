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
               <li><a href="MENU_ADMINISTRADOR_DOC_VER.php">Ver Documentos</a></li>
                <li><a href="MENU_ADMINISTRADOR_SUBIR_DOC.php">Subir Documentos</a></li>
                 <li><a href="MENU_ADMINISTRADOR_ELI_DOC.php">Eliminar Documentos</a></li>
                
                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	<div id="right-part">
       	  
      <h1 align="center"><img src="documentos_reg.fw.png" width="495" height="60" alt="PROC_MATERIA" /></h1>
       	  <form action="CARGA_DOCUMENTOS.php" method="post" enctype="multipart/form-data">
       	  <p>
   	        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
   	        </p>
       	    <table width="36%" border="0" align="right">
       	      <tr>
       	        <td width="40%"><strong>Materia:</strong></td>
       	        <td width="60%"><div align="center"><?php echo $_POST["MATERIA"]; ?></div></td>
   	          </tr>
       	      <tr>
       	        <td><strong>Grado:</strong></td>
       	        <td><div align="center"><?php echo $_POST["GRADO"]; ?></div></td>
   	          </tr>
   	        </table>
       	  </form>
       	  <p align="center">&nbsp;</p>
       	  <p align="center">&nbsp;</p>
       	  <p align="left">
       	    <?php
  
  if (($_POST["MATERIA"]=="") or ($_POST["GRADO"]=="")){
				 header("Location: /MENU_ADMINISTRADOR_DOC_VER.php");
exit();
		}
		
		
$MATERIA=$_POST["MATERIA"]; 
if ($MATERIA=="ESPAÑOL"){
$MATERIA="ESPANOL";
}
if ($MATERIA=="CIENCIAS ECONOMICAS Y POLITICAS"){
$MATERIA="CIENCIAS_ECONOMICAS_Y_POLITICAS";
}
if ($MATERIA=="CIENCIAS NATURALES Y EDUCACION AMBIENTAL"){
$MATERIA="CIENCIAS_NATURALES_Y_EDUCACION_AMBIENTAL";
}
if ($MATERIA=="CIENCIAS SOCIALES"){
$MATERIA="CIENCIAS_SOCIALES";
}
if ($MATERIA=="EDUCACION ARTISTICA"){
$MATERIA="EDUCACION_ARTISTICA";
}
if ($MATERIA=="EDUCACION ETICA Y VALORES HUMANOS"){
$MATERIA="EDUCACION_ETICA_Y_VALORES_HUMANOS";
}
if ($MATERIA=="EDUCACION FISICA"){
$MATERIA="EDUCACION_FISICA";
}
if ($MATERIA=="EDUCACION RELIGIOSA"){
$MATERIA="EDUCACION_RELIGIOSA";
}
if ($MATERIA=="TECNOLOGIA E INFORMATICA"){
$MATERIA="TECNOLOGIA_E_INFORMATICA";
}
$GRADO=$_POST["GRADO"]; 
$dir = $_SERVER['DOCUMENT_ROOT'] . '/descargas/'.$GRADO."/".$MATERIA; 

$directorio=opendir($dir); 
echo "<span class='texto_menu_Titulo'>Aplicaciones y Utilerias</span>"; 
echo "<br><br>"; 
while ($archivo = readdir($directorio)){ 
 if($archivo=='.' or $archivo=='..'){ 
 echo ""; 
 }else { 
 $enlace="/descargas/$GRADO/$MATERIA/".$archivo; 
 
 echo "<ul type='square'><li>"; 
 echo "<a href=".$enlace.">".$archivo."<br></a>"; 

 echo "</li></ul>"; 
 
 } 
 } 
closedir($directorio); 


?>
       	  </p>
       	  
      <p align="center"><a href="MENU_ADMINISTRADOR_DOC_VER.php"><img src="regresar.fw.png" alt="" width="70" height="70" /></a></p>
    
      </h1></div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
