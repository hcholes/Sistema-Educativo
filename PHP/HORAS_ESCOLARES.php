
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
        <table width="551" height="562" border="3" cellpadding="0" cellspacing="0">
          <tr>
            <td rowspan="3" align="center" bgcolor="#990000"><p>&nbsp;</p>
              <p>AREAS/ASIGNATURAS</p></td>
            <td colspan="11" align="center" bgcolor="#990000"><p>INTENSIDAD SEMANAL</p></td>
          </tr>
          <tr>
            <td colspan="11" align="center" bgcolor="#990000"><p>GRADOS</p></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#990000"><p>1°</p></td>
            <td align="center" bgcolor="#990000"><p>2°</p></td>
            <td align="center" bgcolor="#990000"><p>3°</p></td>
            <td align="center" bgcolor="#990000"><p>4°</p></td>
            <td align="center" bgcolor="#990000"><p>5°</p></td>
            <td align="center" bgcolor="#990000"><p>6°</p></td>
            <td align="center" bgcolor="#990000"><p>7°</p></td>
            <td align="center" bgcolor="#990000"><p>8°</p></td>
            <td align="center" bgcolor="#990000"><p>9°</p></td>
            <td align="center" bgcolor="#990000"><p>10°</p></td>
            <td align="center" bgcolor="#990000"><p>11°</p></td>
          </tr>
          <tr>
            <td><p><strong>C. Naturales y Educación Ambiental</strong></p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
          </tr>
          <tr>
            <td><p><strong>Química</strong></p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
          </tr>
          <tr>
            <td><p><strong>Física</strong></p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
          </tr>
          <tr>
            <td><p><strong>C. Sociales (Historia, Geografía,    Constitución  Política, Democracia)</strong></p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>3</p></td>
            <td><p>3</p></td>
          </tr>
          <tr>
            <td><p><strong>Ciencias Económicas y Políticas</strong></p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
          </tr>
          <tr>
            <td><p><strong>Filosofía</strong></p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
          </tr>
          <tr>
            <td><p><strong>Educación Artística</strong></p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
          </tr>
          <tr>
            <td><p><strong>Educación Ética y en Valores Humanos.</strong></p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
          </tr>
          <tr>
            <td><p><strong>Educación Religiosa</strong></p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
          </tr>
          <tr>
            <td><p><strong>Humanidades: Lengua Castellana</strong></p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>5</p></td>
            <td><p>5</p></td>
            <td><p>5</p></td>
            <td><p>5</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
          </tr>
          <tr>
            <td><p><strong>Humanidades: Idioma Extranjero (Inglés)</strong></p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
          </tr>
          <tr>
            <td><p><strong>Matemáticas</strong></p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>4</p></td>
            <td><p>3</p></td>
            <td><p>3</p></td>
          </tr>
          <tr>
            <td><p><strong>Educación Física, Recreación y Deporte.</strong></p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
          </tr>
          <tr>
            <td><p><strong>Tecnología e Informática</strong></p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>3</p></td>
            <td><p>3</p></td>
            <td><p>3</p></td>
            <td><p>3</p></td>
            <td><p>2</p></td>
            <td><p>2</p></td>
          </tr>
          <tr>
            <td><p><strong>Emprendimiento</strong></p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>&nbsp;</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
            <td><p>1</p></td>
          </tr>
          <tr>
            <td colspan="12"><p><strong>Actitud Comportamental (Conducta y    Disciplina)        </strong></p></td>
          </tr>
          <tr>
            <td><p><strong>Total Horas Semanales</strong></p></td>
            <td><p>25</p></td>
            <td><p>25</p></td>
            <td><p>25</p></td>
            <td><p>25</p></td>
            <td><p>25</p></td>
            <td><p>30</p></td>
            <td><p>30</p></td>
            <td><p>30</p></td>
            <td><p>30</p></td>
            <td><p>30</p></td>
            <td><p>30</p></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>Los  períodos de clase en la Básica Primaria serán de 60 minutos cada uno,  dictándose 5 períodos diariamente, de Lunes a Viernes, en un horario de 8:00 de  la mañana a 2:30 de la tarde y en la Básica Secundaria y Media Académica serán  de 60 minutos cada uno dictándose 6 períodos diariamente de lunes a viernes, en  un horario de 8:00 de la mañana a 3:30 de la tarde, con los respectivos  descansos y dedicando tiempo, de 2:30 a 3:30 en primaria y de 3:40 a 4:30 de la  tarde, en secundaria, para las actividades lúdicas, deportivas y recreativas  (actividades complementarias), como también para el desarrollo de proyectos.</p>
        <p><br />
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
