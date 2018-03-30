
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
        <p>RESPONSABLES Y DEPENDENCIAS</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top" bgcolor="#990000"><p><strong>DEPENDENCIA</strong></p></td>
            <td align="center" valign="top" bgcolor="#990000"><p><strong>SERVICIO</strong></p></td>
            <td align="center" valign="top" bgcolor="#990000"><p><strong>RESPONSABLE</strong></p></td>
          </tr>
          <tr>
            <td valign="top"><p>&nbsp;</p>
              <p>Salón Educación <br />
                Física</p></td>
            <td valign="top"><p>Almacenar los elementos deportivos para <br />
              el desarrollo psicomotor de las <br />
              estudiantes que les permita participar en <br />
              eventos deportivos a nivel interno de la <br />
              institución.</p></td>
            <td valign="top"><p>Fernando Vélez</p></td>
          </tr>
          <tr>
            <td valign="top"><p>Laboratorio de    Física<br />
              Laboratorio de <br />
              Química<br />
              Laboratorio de <br />
              Biología</p></td>
            <td valign="top"><p>Brindar a la estudiante la oportunidad de <br />
              los conocimientos teóricos adquiridos en <br />
              el aula de clase y al mismo tiempo <br />
              fortalecer o desarrollar la competencia procedimental. </p></td>
            <td valign="top"><p>Alexander Guerra<br />
              Marta Nora Ospina</p></td>
          </tr>
          <tr>
            <td valign="top"><p>Sala de    informática  </p></td>
            <td valign="top"><p>Brindar conocimientos académicos a las <br />
              estudiantes acerca del mundo de la <br />
              informática y acercarlas  a los constantes <br />
              cambios tecnológicos a través del estudio <br />
              de diferentes programas y equipos.<br />
              Préstamo de computador para Internet y <br />
              otros trabajos.</p></td>
            <td valign="top"><p>Pedro Stiwar Garrido</p></td>
          </tr>
          <tr>
            <td valign="top"><p>Salón Audiovisuales</p></td>
            <td valign="top"><p>Proyección de videos.<br />
              Préstamo de videos, DVD  CD, <br />
              grabadoras, VHS circuito cerrado de <br />
              televisión     entre otros.</p></td>
            <td valign="top"><p>Rector</p></td>
          </tr>
          <tr>
            <td valign="top"><p>Salón Recursos <br />
              Didácticos</p></td>
            <td valign="top"><p>Préstamo de ayudas educativas como <br />
              mapas, juegos didácticos, material de <br />
              matemáticas, dotación de elementos del <br />
              proyecto de educación vial, papelería y <br />
              cartulinas<br />
              Préstamo de computador portátil y video <br />
              beam.</p></td>
            <td valign="top"><p>Rector</p></td>
          </tr>
          <tr>
            <td valign="top"><p>Salón Material Preescolar</p></td>
            <td valign="top"><p>Proveer de material fungible a docentes <br />
              de Preescolar</p></td>
            <td valign="top"><p>Educadora    preescolar</p></td>
          </tr>
          <tr>
            <td valign="top"><p>Salón de Banda y <br />
              Percusión </p></td>
            <td valign="top"><p>Almacenar los instrumentos de viento <br />
              utilizados en las optativas de banda, <br />
              instrumentos de viento e instrumentos de <br />
              percusión.</p></td>
            <td valign="top"><p>Andrés Felipe </p></td>
          </tr>
          <tr>
            <td valign="top"><p>Biblioteca</p></td>
            <td valign="top"><p>     Referencia, servicio de alerta, formación <br />
              de usuarios, Internet, préstamo de <br />
              material bibliográfico y equipo de <br />
              cómputo, préstamo de sala de lectura.</p></td>
            <td valign="top"><p>Yofaide María    Avendaño Rúa</p></td>
          </tr>
          <tr>
            <td valign="top"><p>Salón de Danzas</p></td>
            <td valign="top"><p>Almacenar los vestuarios folclóricos para <br />
              las presentaciones culturales internas y <br />
              externas.</p></td>
            <td valign="top"><p>Rector</p></td>
          </tr>
          <tr>
            <td valign="top"><p>Primeros Auxilios Servicio de primeros    auxilios a la <br />
              Comunidad educativa.</p></td>
            <td valign="top"><p>&nbsp;</p></td>
            <td valign="top"><p>&nbsp;</p></td>
          </tr>
        </table>
<p>&nbsp;</p>
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
