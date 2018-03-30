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
                <li class="active"><a href="MENU_USUARIOS_VER.PHP">Ver Usuarios</a></li>
                <li><a href="MENU_USUARIOS_AD_tipo.php">Crear Usuario</a><a href="#"></a></li>
                <li><a href="MENU_USUARIOS_ELI.php">Eliminar Usuario</a><a href="MENU_MATERIAS_VER.php"></a><a href="#"></a></li>
                <li><a href="MENU_USUARIOS_MOD.php">Modificar Usuario</a><a href="#"></a></li>
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	<div id="right-part">
        	
      <h1 align="center"> <img src="usuarios_registrados.fw.png" width="495" height="60" alt="PROC_MATERIA" /></h1>
        
      <form name="form1" id="form1" method="post" action="CREACION_MATERIA_AD.php">
        <table width="658" border="1" align="center">
          <tr bgcolor="#003366"> 
            <td width="51" bgcolor="#990000"> 
              <div align="center"><font color="#FFFFFF" size="0"><strong>CODIGO</strong></font></div></td>
            <td width="52" bgcolor="#990000"> 
              <div align="center"><font color="#FFFFFF" size="0"><strong>NOMBRE</strong></font></div></td>
            <td width="63" bgcolor="#990000">
<div align="center"><font color="#FFFFFF" size="0"><strong>APELLIDO</strong></font></div></td>
            <td width="71" bgcolor="#990000">
<div align="center"><font color="#FFFFFF" size="0"><strong>DIRECCION</strong></font></div></td>
            <td width="59" bgcolor="#990000">
<div align="center"><font color="#FFFFFF" size="0"><strong>CELULAR</strong></font></div></td>
            <td width="43" bgcolor="#990000">
<div align="center"><font color="#FFFFFF" size="0"><strong>SEXO</strong></font></div></td>
            <td width="46" bgcolor="#990000">
<div align="center"><font color="#FFFFFF" size="0"><strong>GRADO</strong></font></div></td>
            <td width="46" bgcolor="#990000">
<div align="center"><font color="#FFFFFF" size="0"><strong>TIPO</strong></font></div></td>
            <td width="46" bgcolor="#990000">
<div align="center"><font color="#FFFFFF" size="0"><strong>CONTRASEÑA</strong></font></div></td>
          </tr>
          <?php
		  
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 

			$TIPO=$_POST["TIPO"];
			$_SESSION['TI_USUARIO']=$TIPO;
			
			$result = mysql_query("SELECT * FROM ENTRADA WHERE TIPO='$TIPO' ORDER BY TIPO,ID ", $link); 
			while ($row = mysql_fetch_array($result)){ 
			echo "<tr>";
			echo "<td><font size=-2> <center>".$row["ID"]."</center></font></td>";
			echo "<td><font size=-2><center>".$row["NOMBRE"]."</center></font></td>";
			echo "<td><font size=-2><center>".$row["APELLIDO"]."</center></font></td>";
			echo "<td><font size=-2><center>".$row["DIRECCION"]."</center></font></td>";
			echo "<td><font size=-2><center>".$row["CELULAR"]."</center></font></td>";
			echo "<td><font size=-2><center>".$row["SEXO"]."</center></font></td>";
			echo "<td><font size=-2><center>".$row["GRADO"]."</center></font></td>";
			echo "<td><font size=-2><center>".$row["TIPO"]."</center></font></td>";
			echo "<td><font size=-2><center>".$row["CONTRA"]."</center></font></td>";
			echo "</tr>";
			
			
			}
		  
$_SESSION['MENSAJE']="";
$_SESSION['ID_USUARIO']="";
$_SESSION['NO_USUARIO']="";
$_SESSION['AP_USUARIO']="";
$_SESSION['DI_USUARIO']=""; 
$_SESSION['CE_USUARIO']=""; 
$_SESSION['SE_USUARIO']="";  
$_SESSION['TI_USUARIO']="";
$_SESSION['CO_USUARIO']=""; 
$_SESSION['GR_USUARIO']=""; 
$_SESSION['TEMPO']=0;
		  ?>
      
        </table>
          
        <div align="center"><a href="REPORTE4.PHP"><img src="imprimir.fw.png" alt="" width="150" height="50" /></a></div>
        </form>

    
            </h1>
      <p align="center"><a href="MENU_USUARIOS_VER.PHP"><img src="regresar.fw.png" alt="" width="70" height="70" /></a></p>
      </div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
