
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
        <p>La asamblea general de los padres de familia, elige a un representante 
          por grupo al consejo de padres.<br />
        </p>
        <p><strong><font size="3">Estructura de Funcionamiento del Consejo de 
          Padres de Familia</font></strong></p>
        <p> El consejo de padres esta conformado de la siguiente manera:</p>
        <table width="102%" height="83" border="0" align="center">
          <tr> 
            <td height="37" bgcolor="#990000">
<div align="center"><strong>INTEGRANTES</strong></div></td>
            <td bgcolor="#990000">
<div align="center"><strong>GRADO</strong></div></td>
            <td bgcolor="#990000">
<div align="center"><strong>DOCUMENTO</strong></div></td>
          </tr>
          <tr> 
            <td><div align="center">CRISTINA RIVILLAS OLARTE </div></td>
            <td><div align="center">PREESCOLAR</div></td>
            <td><div align="center">32.229.391</div></td>
          </tr>
          <tr> 
            <td><div align="center">MARTHA YANET MESA M </div></td>
            <td><div align="center">PREESCOLAR</div></td>
            <td><div align="center">43.695.284</div></td>
          </tr>
          <tr> 
            <td><div align="center">MARIA DORIELA MESA MESA </div></td>
            <td><div align="center">PRIMERO</div></td>
            <td><div align="center">43.695.451</div></td>
          </tr>
          <tr> 
            <td><div align="center">LILIANA MARIA AGUDELO </div></td>
            <td><div align="center">PRIMERO</div></td>
            <td><div align="center">43.695.223</div></td>
          </tr>
          <tr> 
            <td><div align="center">NELLY YOHANA CARDENAS </div></td>
            <td><div align="center">SEGUNDO</div></td>
            <td><div align="center">43.970.096</div></td>
          </tr>
          <tr> 
            <td><div align="center">ERIKA YAMILE RESTREPO</div></td>
            <td><div align="center">TERCERO</div></td>
            <td><div align="center">39.215.189</div></td>
          </tr>
          <tr> 
            <td><div align="center">MONICA ELIANA CALLE</div></td>
            <td><div align="center">TERCERO</div></td>
            <td><div align="center">43.258.747</div></td>
          </tr>
          <tr> 
            <td><div align="center">ANA MARIA PALACIO HOYOS </div></td>
            <td><div align="center">CUARTO</div></td>
            <td><div align="center">32.227.017</div></td>
          </tr>
          <tr> 
            <td><div align="center">YADIRA TAMAYO ALVAREZ</div></td>
            <td><div align="center">QUINTO</div></td>
            <td><div align="center">39.177.458</div></td>
          </tr>
          <tr> 
            <td><div align="center">SARA INES PALACIO OLARTE</div></td>
            <td><div align="center">QUINTO</div></td>
            <td><div align="center">39.208.904</div></td>
          </tr>
          <tr> 
            <td><div align="center">YOFAIDE AVENDAÑO</div></td>
            <td><div align="center">SEXTO</div></td>
            <td><div align="center">32.226.347</div></td>
          </tr>
          <tr> 
            <td><div align="center">ODILIA RUA MELGUIZO</div></td>
            <td><div align="center">SEXTO</div></td>
            <td><div align="center">29.221.951</div></td>
          </tr>
          <tr> 
            <td><div align="center">FRANCY ELENA LOPEZ</div></td>
            <td><div align="center">SEPTIMO</div></td>
            <td><div align="center">21.424.911</div></td>
          </tr>
          <tr> 
            <td><div align="center">MARTHA EDILIA PARRA</div></td>
            <td><div align="center">SEPTIMO</div></td>
            <td><div align="center">43.678.661</div></td>
          </tr>
          <tr> 
            <td><div align="center">ALBA LUCIA BUILES</div></td>
            <td><div align="center">SEPTIMO</div></td>
            <td><div align="center">22.064.996</div></td>
          </tr>
          <tr> 
            <td><div align="center">CECILIA ELENA PATIÑO</div></td>
            <td><div align="center">OCTAVO</div></td>
            <td><div align="center">43.300.029</div></td>
          </tr>
          <tr> 
            <td><div align="center">DEISY RUA MELGUIZO</div></td>
            <td><div align="center">OCTAVO</div></td>
            <td><div align="center">39.210.452</div></td>
          </tr>
          <tr> 
            <td><div align="center">ANA CECILIA PALACIO</div></td>
            <td><div align="center">NOVENO</div></td>
            <td><div align="center">39.207.612</div></td>
          </tr>
          <tr> 
            <td><div align="center">MONICA PATRICIA VANEGAS</div></td>
            <td><div align="center">NOVENO</div></td>
            <td><div align="center">32.228.080</div></td>
          </tr>
          <tr> 
            <td><div align="center">FANNY TOBON ZEA</div></td>
            <td><div align="center">DECIMO</div></td>
            <td><div align="center">39.210.993</div></td>
          </tr>
          <tr> 
            <td><div align="center">ESTELLA RESTREPO</div></td>
            <td><div align="center">DECIMO</div></td>
            <td><div align="center">32.226.137</div></td>
          </tr>
          <tr> 
            <td><div align="center">CARLOS ARTURO GALEANO</div></td>
            <td><div align="center">ONCE</div></td>
            <td><div align="center">8.304.898</div></td>
          </tr>
          <tr> 
            <td><div align="center">LUDIBIA SERNA</div></td>
            <td><div align="center">ONCE</div></td>
            <td><div align="center">32.226.245</div></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        Se reúnen periódicamente para planear actividades en pro del beneficio 
        de los estudiantes y la institución en general, apoyan las actividades 
        lúdicas, deportivas y culturales al mismo tiempo que promueven y lideran 
        el funcionamiento del restaurante escolar.<br />
        <br />
        <p><strong><font size="3">Funciones del Consejo de Padres de Familia</font></strong></p>
        <p> • velar por el cumplimiento del PEI y su continua evaluación.<br />
          • Promover programas de formación de los padres para cumplir adecuadamente 
          la tarea educativa que les corresponde. <br />
          • Promover el proceso de constitución del consejo de padre de familia, 
          como apoyo a la función pedagógica que les compete.<br />
          • Darse su propio reglamento y delegar un miembro de la junta directiva 
          para hacer parte del consejo directivo de la I.E<br />
        </p>
        <p><font size="3"><strong>Elección de los Representantes de los Padres 
          de Familia en el Consejo Directivo</strong></font></p>
        <p> Los dos representantes de los padres de familia al consejo directivo 
          serán elegidos por: la asociación de padres de familia y por el consejo 
          de padres respectivamente.<br />
        </p>
        <p><strong><font size="3">Comités de Trabajo Consejo de Padres</font></strong><br />
          Los integrantes del consejo de padres se han organizado en los siguientes 
          comités:</p>
        <p>• Comité financiero y de recursos<br />
          • Comité de apoyo pedagógico<br />
          <br />
          <br />
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
