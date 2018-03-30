
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
        <table width="538" border="1" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="3" align="center"><p>CARGA ACADÉMICA DOCENTE</p></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#990000"><p>DOCENTE</p></td>
            <td align="center" bgcolor="#990000"><p>ÁREA</p></td>
            <td align="center" bgcolor="#990000"><p>HORAS</p></td>
          </tr>
          <tr>
            <td align="center"><p>Alexander Guerra Romero</p></td>
            <td align="center"><p>Matemáticas de 7º a 11º= 18 hs.y Ciencias    Naturales y Salud (Física) de 10° y 11°= 4hs.</p></td>
            <td align="center"><p>22</p></td>
          </tr>
          <tr>
            <td align="center"><p>Arlinson Cortés Taborda</p></td>
            <td align="center"><p>Ciencias Sociales de 2° a 5°= 16hs,    Artística de 4° y 5°= 4hs, ingles de 4° y 5°= 2hs, Edu. Física de 2° a 5°=    8hs y Tecnología de 2° a 5°= 4hs. </p></td>
            <td align="center"><p>34</p></td>
          </tr>
          <tr>
            <td align="center"><p>María Isabel Zapata Cardona</p></td>
            <td align="center"><p>Ciencias Sociales de 6° a 11°= 22hs.</p></td>
            <td align="center"><p>22</p></td>
          </tr>
          <tr>
            <td align="center"><p>Marta Nora Ospina Zapata</p></td>
            <td align="center"><p>C. Naturales de 7º a 9º= 12hs.,Ciencias    Naturales (Química) de 10º y 11º= 8hs., Ciencias Naturales y Salud de 6º a    9º= 16hs.</p></td>
            <td align="center"><p>24</p></td>
          </tr>
          <tr>
            <td align="center"><p>Margarita Trujillo Lujan</p></td>
            <td align="center"><p>Ciencias Naturales de 2° a 5°= 16hs,    Religión de 2° a 5°= 8hs, Ética de 2° a 5°= 4hs Artística de 2° y 3°= 8</p></td>
            <td align="center"><p>36</p></td>
          </tr>
          <tr>
            <td align="center"><p>Yamile Margarita Vanegas Osorio</p></td>
            <td align="center"><p>Atiende los grados preescolar y primero de    básica primaria</p></td>
            <td align="center"><p>25</p></td>
          </tr>
          <tr>
            <td align="center"><p>Rubiela de Jesús Rúa Vanegas </p></td>
            <td align="center"><p>Español de 2° a 5°= 16hs., Matemáticas    de  2° a 5°= 16hs  Ingles de 2° y 3°= 2hs. </p></td>
            <td align="center"><p>34</p></td>
          </tr>
          <tr>
            <td align="center"><p>Laida Emilse Ciro Vargas</p></td>
            <td align="center"><p>Inglés de 6° a 11°= 12 hs., Español de 10º    y 11º= 8 hs. Matemáticas 6º= 4hs</p></td>
            <td align="center"><p>24</p></td>
          </tr>
          <tr>
            <td align="center"><p>Luis Fernando Vélez Morales</p></td>
            <td align="center"><p>Educ. Física de 6º a 11º=12hs.,  Artística de 7º a 11º = 10 hs.</p></td>
            <td align="center"><p>22</p></td>
          </tr>
          <tr>
            <td align="center"><p>Sandra Patricia Blanquicet Doria</p></td>
            <td align="center"><p>Español de 6º a 9º= 20hs., Ciencias    Políticas y Económicas de 10º= 2hs.</p></td>
            <td align="center"><p>22</p></td>
          </tr>
          <tr>
            <td align="center"><p>Pedro Stiwar Garrido Palacio</p></td>
            <td align="center"><p>Tecnología e Informática de 6º a 11º=    16hs., Emprendimiento de 6º a 11º=6hs.</p></td>
            <td align="center"><p>22</p></td>
          </tr>
          <tr>
            <td align="center"><p>María Teresa Granado Villa</p></td>
            <td align="center"><p>Educación Religiosa de 6º a 11º= 6 h.s.,    Educación Ética de 6º a 11º= 12hs., Filosofía de 10º y 11°= 2hs; Artística de    6º: 2hs.</p></td>
            <td align="center"><p>22</p></td>
          </tr>
        </table>
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
