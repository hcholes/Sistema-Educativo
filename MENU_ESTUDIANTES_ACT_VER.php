<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}
if ($_SESSION['TIPO']<>"ESTUDIANTE"){
	 header("Location: /index.php");

}
?><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
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
               <li><a href="MENU_ESTUDIANTES_NOTAS.PHP">Notas</a></li>
               <li><a href="MENU_ESTUDIANTES_VER_DOC.php">Archivos</a></li>
               <li class="active"><a href="MENU_ESTUDIANTES_ACT_VER.php">Mensajes</a></li>
			   <li><a href="MENU_ESTUDIANTES_MATERIAS.PHP">Materias Asignadas</a></li>			   			   
               <li><a href="MENU_ESTUDIANTES_PERFIL.PHP">Perfil</a></li>
                
                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	<div id="right-part">
       	  <h1 align="center"><img src="actividades_reg.png" width="495" height="60" alt="PROC_MATERIA" /></h1>
       	  <form action="menu_estudiantes_act_ver2.php" method="post" enctype="multipart/form-data">
       	  <p>
   	        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
       	  </p>
       	  
        <table width="58%" height="92" border="0" align="center">
          <tr> 
            <td height="24" align="left"><div align="right"><strong>Materia: </strong></div></td>
            <td><strong> 
              <select name="MATERIA" id="select">
                <?php 
			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		  $ID=$_SESSION['ID1'];
		  $GRADO=$_SESSION['GRADO'];
  		  $result = mysql_query("SELECT DISTINCT ID_MATERIA FROM ACTIVIDADES WHERE GRADO='$GRADO'", $link); 
		   while ($row = mysql_fetch_array($result)){ 
		  echo "<option >".$row['ID_MATERIA']."</option>";
		  }
		  
		?>
              </select>
              <input name="button3" type='button' onclick="AbreVentanaModal()" value="..." />
              </strong></td>
          </tr>
          <tr> 
            <td width="50%" height="24" align="left"><div align="right"><strong>PERIODO:</strong></div></td>
            <td width="50%"><strong> 
              <select name="PERIODO">
                <option>PRIMER</option>
                <option>SEGUNDO</option>
                <option>TERCER</option>
                <option>CUARTO</option>
              </select>
              </strong></td>
          </tr>
          <tr> 
            <td height="24" align="left"><div align="right"><strong>AÑO: </strong></div></td>
            <td><div align="left"><strong> 
                <select name="ANO" id="ANO">
                  <option>2013</option>
                </select>
                </strong></div></td>
          </tr>
          <tr> 
            <td colspan="2"><div align="center"> 
                <input type="submit" name="VER" id="VER" value="Ver" />
              </div></td>
          </tr>
        </table>
       	  </form>
       	  <p align="center">&nbsp;</p>
       	  
      <p align="center"><a href="MENU_ESTUDIANTES.php"><img src="INICIO_.fw.png" alt="" width="70" height="70" /></a></p>
    
      </h1></div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
<SCRIPT> 
//creamos una variable de tipo array para pasar y recuperar los datos 
var datos=new Array(); 


function AbreVentanaModal(){ 
datos=showModalDialog('lista_materias_ACTIVIDAD_est.php',datos,'status:no;resizable:yes'); 
} 

</SCRIPT> 