
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
        <p><font size="3"><strong>El Consejo Académico</strong></font><br />
        </p>
        <p>En todo establecimiento Educativo se debe constituir un consejo Académico 
          y el decreto 1860 del año 1994 en su artículo 24 hace referencia a Él, 
          y por lo cual deben ser integrantes los siguientes miembros.</p>
        <p> • Rector<br />
          • Coordinador Académico<br />
          • Un representante del área de:<br />
          - Matemáticas<br />
          - Ciencias Naturales y Educación Ambiental<br />
          - Ciencias sociales<br />
          - Religión<br />
          - Humanidades<br />
          - Educación Ética y Valores Humanos<br />
          - Educación Artística<br />
          - Tecnología<br />
          - Educación Física, Recreación y Deportes<br />
          - Media Académica<br />
          - Un representante de cada grado de Básica Primaria<br />
          <br />
        </p>
      </div>
      <p><strong><font size="3">Integrantes de la Institución está Conformado 
        por:</font></strong></p>
      <p align="justify"> Los integrantes del consejo académico de la institución 
        educativa esta conformado por todos los educadores de la básica primaria 
        y secundaria y el rector. A decir:</p>
      <p align="justify"> Yamile margarita Vanegas Osorio.<br />
        Margarita María Trujillo Lujan.<br />
        Arlinson Cortes Taborda.<br />
        Rubiela De Jesús Rúa Vanegas.<br />
        María Teresa Granados Villa.<br />
        María Isabel Zapata Cardona<br />
        Sandra Patricia Blanquicet Doria.<br />
        Pedro Stiwar Garrido Palacio.<br />
        Luis Fernando Vélez Morales.<br />
        Marta Nora Ospina Zapata.<br />
        Laida Emilcen Ciro Vargas.<br />
        Alexander Guerra Romero.<br />
        Oscar Hernán Ramírez Ramírez.<br />
      </p>
      <p align="justify"><strong><font size="3">Funciones del Consejo Académico</font></strong></p>
      <p align="justify"> Este consejo cumplirá las siguientes funciones. </p>
      <p align="justify"> A. Servir de órgano consultor del consejo directivo 
        en la revisión de la propuesta del proyecto educativo cultural e institucional.</p>
      <p align="justify"> B. Estudiar el currículo y propiciar su continuo mejoramiento, 
        introduciendo las modificaciones y ajustes, de acuerdo con el procedimiento 
        previsto en el presente decreto.</p>
      <p align="justify"> C. Organizar el plan de estudios y orientar su ejecución.</p>
      <p align="justify"> D. Participar en la evaluación anual.</p>
      <p align="justify"> E. Integrar los concejos de docentes para la evaluación 
        periódica del rendimiento académico de los educandos, para su promoción; 
        asignarles sus funciones y supervisar el proceso general de evaluación.</p>
      <p align="justify"> F. Recibir y decidir los reclamos de los estudiantes 
        sobre la evaluación educativa.<br />
        Las demás funciones afines o complementarios con las que le atribuya el 
        proyecto educativo cultural institucional.</p>
      <p align="justify"> G. Las demás funciones afines o complementarias con 
        las anteriores que le atribuya el proyecto educativo cultural institucional.<br />
      </p>
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
