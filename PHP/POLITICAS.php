
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
        	<li><a href="MISION.PHP">MISION</a></li>
        	<li><a href="VISION.PHP">VISION</a></li>
        	<li class="active"><a href="POLITICAS.PHP">POLITICAS</a></li>
        	<li><a href="CONTACTENOS.PHP">CONTACTENOS</a></li>
    </ul>
  </div>
  <div id="header"><img src="logo.png" alt="" width="997" height="183" /> </div>
  <div id="main"> 
    <div class="ic"></div>
    <div id="left-part"> 
      <ul id="subnavi">
	  <a name="INICIO" id="INICIO"></a>
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
      <p><font size="3"><strong>Política de calidad institucional</strong></font></p>
      <p align="justify"><br />
        La Institución Educativa Rural Porfirio Barba Jacob, busca formar hombres 
        y mujeres integrales, desde preescolar, básicas y Media, siguiendo las 
        directrices legales, brindando una formación académica y técnica tendiente 
        a preparar los estudiantes para la educación superior y/o para su desempeño 
        en el mundo laboral y social.</p>
      <p align="justify"><br />
        Se busca atender las expectativas de los clientes (padres de familia y 
        educandos) a través del mejoramiento continuo de los procesos académicos 
        y la formación en competencias ciudadanas.</p>
      <p align="justify"><br />
        Se aprovecharán de la mejor manera las relaciones inter – institucionales 
        que favorezcan la formación de los estudiantes y el mejoramiento institucional.<br />
      </p>
      <p align="justify"><strong><font size="3">marco legal</font></strong></p>
      <p align="justify"><br />
        Como queda dicho, aquí presentamos el conjunto de normas que orientan 
        el comportamiento de los distintos miembros de la comunidad educativa 
        de la Institución Educativa Rural Porfirio Barba Jacob y será el que nos 
        permita un ordenamiento capaz de brindarnos una formación integral a través 
        de un medio libre y democrático.</p>
      <p align="justify"><br />
        Este manual se fundamenta en: La Constitución Política de Colombia de 
        1991, Ley 1098 de noviembre 8 de 2006: Código de la Infancia y la Adolescencia. 
        Ley 115 de 1994: Ley General de la Educación, Decreto 1860 de 1994 y Ley 
        200 de 1995 y los fallos de la Corte Constitucional en materia educativa.</p>
      <p align="justify"><br />
        Las anteriores normas sirvieron de base para que en una acción participativa 
        de todos los estamentos de la comunidad educativa se diseñara el presente 
        Manual, de ahí que consideramos importante presentar la interpretación 
        de los artículos tenidos en cuenta:</p>
      <p><strong><font size="3">Constitución política de la república de Colombia</font></strong></p>
      <p> Artículo 1. Las normas colombianas se fundamentan en el respeto de la 
        dignidad humana, en el trabajo y en la solidaridad de las personas.<br />
        Artículo 2. El estado debe asegurar la convivencia pacífica y la vigencia 
        de un orden justo.<br />
        Artículo 16. Derecho al desarrollo de la personalidad, con las limitaciones 
        que inspiren los derechos de los demás y el orden jurídico.<br />
        Artículo 18. Derecho a la libertad de conciencia.<br />
        Artículo 27. El estado garantiza la libertad de enseñanza, aprendizaje, 
        investigación y cátedra.<br />
        Artículo 29. El debido proceso se aplicará a toda clase de actuaciones 
        judiciales y administrativas.<br />
        Artículo 44. Son derechos fundamentales de los niños: La vida, la integridad 
        física, la salud y la seguridad social, la alimentación equilibrada, su 
        nombre y nacionalidad, tener una familia y no ser separados de ella, el 
        cuidado y el amor, la educación y la cultura, la recreación y la libre 
        expresión de su opinión.<br />
        Artículo 45. El adolescente tiene derecho a la protección y a la formación 
        integral.<br />
        Artículo 52. Se reconoce el derecho de todas las personas a la recreación, 
        a la práctica del deporte y al aprovechamiento del tiempo libre.<br />
        Artículo 67. La educación es un derecho de la persona y un servicio público 
        que tiene una función social; con ella se busca el acceso al conocimiento, 
        a la ciencia, a la técnica y a los demás bienes y valores de la cultura.<br />
        Artículo 68. Libre elección del tipo de educación por parte de los padres 
        de familia para los hijos menores, garantizando idoneidad, ética y pedagogía 
        por parte de los profesores que imparten la enseñanza.<br />
      </p>
      <p align="justify"> 
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
<ul>
  <li></li>
</ul>
</body>
</html>
