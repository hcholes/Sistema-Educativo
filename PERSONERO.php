
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
<?php
$_SESSION['ID1']=0;
$_SESSION['NOM1']=0;
$_SESSION['TIPO']=0;
$_SESSION['GRADO']=0;
?>
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
    <div id="header"><img src="logo.png" alt="" width="997" height="183" />
    </div>
    <div id="main">
		<div class="ic"></div>
    	<div id="left-part">
        
            
      <ul id="subnavi">
        <form id="form1" name="form1" method="post" action="CONFIRMACION.php">
		<?php
		session_start();
if ($_SESSION['ID1']==""){
echo "Usuario no ha iniciado sesión";
}else{
echo "<font size=+0>Bienvenido señor(a)";
echo $_SESSION['NOM1'];
echo "<br /></font>";
}
?>
        </form>
      </ul>
            
           
        </div>
    	
    <div id="right-part"> 
      <div align="justify"> 
        <p><strong><font size="3">Personero de los Estudiantes</font></strong></p>
        <p> En todos los establecimientos educativos y en cada año los estudiantes 
          elegirán a un líder del último grado para que actuara como personero 
          y para que promueva los deberes y derechos que consagran la constitución 
          política de Colombia, las leyes, los reglamentos y el manual de convivencia.</p>
        <p><strong><font size="3">Perfil Personero de los Estudiantes</font></strong></p>
        <p> El personero debe ser un líder de gran calidad humana comprometido 
          con el mejoramiento de la, convivencia y calidad de vida de toda la 
          comunidad Educativa.</p>
        <p><strong><font size="3">Funciones del Personero Estudiantil</font></strong></p>
        <p> • Defender los derechos de los estudiantes y los intereses de la comunidad.<br />
          • Impulsar entre los estudiantes una actuación con libertad y respeto.<br />
          • Promover el cumplimiento de los derechos deberes de los estudiantes.<br />
          • Asesorar con criterio serio al estudiante que sea sancionado para 
          que interponga los recursos ante quien emita la sanción: Órgano del 
          gobierno escolar.<br />
          • Asesorar a los estudiantes que manifiesten la intención de formular 
          una petición o queja, por cualquier situación que consideren anormal.<br />
          • Presentar propuestas que impliquen mejora y prosperidad del plantel 
          ante el órgano del gobierno escolar completamente.<br />
          • Velar por el correcto cumplimiento de las decisiones y actividades 
          que deben cumplir los órganos del gobierno escolar.<br />
          • Promover el correcto funcionamiento ya sea por intermedio del consejo 
          estudiantil o a través de los representantes de cada grupo, la correcta 
          marcha del funcionamiento en cada salón.<br />
          • Denunciar ante las autoridades competentes, hechos que puedan ser 
          constitutivos de violaciones de la ley.<br />
          • Intervenir como conciliador entre directivos, profesores y estudiantes, 
          cuando se presente algún conflicto, agotando siempre el conducto regular, 
          en procura de concretar soluciones adecuadas.<br />
          • Organizar foros y actividades de capacitación y participación de los 
          estudiantes.<br />
          • Presentar ante el rector del establecimiento las solicitudes que considere 
          necesarias para proteger los derechos de los estudiantes y facilitar 
          el cumplimiento de sus deberes.<br />
          <br />
        </p>
      </div>
   <?php
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
		?>
          </div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.<br/>
    	</p>
    </div>
</div>
</body>
</html>
