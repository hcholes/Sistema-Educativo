
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
   	  <h1 class="logo"><a href="index.php"><img src="LOGO.fw.png" alt="" width="353" height="68" /></a></h1>
    	
    	<ul id="topnavi">
      	 	<li><a href="index.php">INICIO</a></li>
        	<li><a href="INSTITUCION.PHP">INSTITUCION</a></li>
        	<li class="active"><a href="MISION.PHP">MISION</a></li>
        	<li><a href="VISION.PHP">VISION</a></li>
        	<li><a href="POLITICAS.PHP">POLITICAS</a></li>
        	<li><a href="CONTACTENOS.PHP">CONTACTENOS</a></li>
      </ul>
    </div>
    <div id="header"><img src="logo.png" alt="" width="997" height="183" />
    </div>
    <div id="main">
		<div class="ic"></div>
    	<div id="left-part">
        
            
      <ul id="subnavi">
        <form id="form1" name="form1" method="post" action="CONFIRMACION.php">
        <?php
		  
		
session_start();
if (isset($_SESSION['ID1'])){
echo "<font size=+0>Bienvenido señor(a)";
echo $_SESSION['NOM1'];
echo "<br /></font>";
}else{
echo "Usuario no ha iniciado sesión";
}
?>

        </form>
      </ul>
            
           
        </div>
    	
    <div id="right-part"> 
      <div align="justify"> 
        <p><img src="mision.fw.png" alt="" width="561" height="60" /></p>
        <p>La Institución Educativa Rural Porfirio Barba Jacob, brinda  el servicio público de educación preescolar, básica y media académica.</p>
        <p><br />
          Nuestro trabajo está fundamentado en desarrollar en el  educando los valores de responsabilidad, convivencia y honestidad, basándonos  en los principios de autonomía, inviolabilidad y dignidad humana, permitiendo  así el desarrollo del pensamiento intelectual en todas las áreas del  conocimiento para hacer de él un ciudadano creativo, innovador e investigador  que armonice, equilibre y responda a las necesidades de la comunidad; que le  permita su vinculación laboral y/o continuar en la cadena de formación técnica,  tecnológica o universitaria.</p>
        <p>
            <?php
if (isset($_SESSION['TIPO'])){			
		if ($_SESSION['TIPO'] == "ADMINISTRADOR"){
		echo "\n <a href='MENU_ADMINISTRADOR.php'><center><img src=regresar.fw.png width=70 height=70 /></center></a>";
		} else {
		if ($_SESSION['TIPO'] == "MAESTRO"){
		echo "\n <a href='MENU_MAESTROS.php'><center><img src=regresar.fw.png width=70 height=70 /></center></a>";
		} else {
		if ($_SESSION['TIPO'] == "ESTUDIANTE"){
		echo "\n <a href='MENU_ESTUDIANTES.php'><center><img src=regresar.fw.png width=70 height=70 /></center></a>";
		}else{
		if ($_SESSION['TIPO'] == "PADRE DE FAMILIA"){
		echo "\n <a href='MENU_PADRES_DE_FAMILIA.php'><center><img src=regresar.fw.png width=70 height=70 /></center></a>";
		}else{
		echo "\n <a href='index.php'><center><img src=regresar.fw.png width=70 height=70 /></center></a>";
		}
		}
		}
		}
		
}else{
		echo "\n <a href='index.php'><center><img src=regresar.fw.png width=70 height=70 /></center></a>";
}
		?>
				
		
        </p>
      </div>
    </div>
  </div>
  <div id="footer">
<p align="center">© Copyright 2013. Todos los derechos reservados.<br/>
    	</p>
    </div>
</div>
</body>
</html>
