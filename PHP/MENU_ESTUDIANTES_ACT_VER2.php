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
if ($_POST["MATERIA"]==""){
				header("Location: /MENU_ESTUDIANTES_ACT_VER.php");	
				}
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
       	  <form action="CREACION_ACTIVIDAD_AD.php" method="post" enctype="multipart/form-data">
       	  <p>
   	        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
       	  </p>
       	  
        <table width="62%" height="330" border="0" align="center">
          <tr> 
            <td align="left">&nbsp;</td>
            <td>&nbsp;</td>
            <td align="left"><strong><font color="#990000">FECHA:</font></strong></td>
            <td align="center"><strong> 
              <font color="#990000"><?php
				$MATERIA=$_POST["MATERIA"];
				$GRADO=$_SESSION["GRADO"];
				$PERIODO=$_POST["PERIODO"];
				$AÑO=$_POST["ANO"];
				
				 $link = mysql_connect("localhost", "root", ""); 
		        mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		   $result = mysql_query("SELECT FECHA_CREACION FROM ACTIVIDADES WHERE ID_MATERIA='$MATERIA' AND GRADO='$GRADO' AND PERIODO='$PERIODO' AND ANO='$AÑO'", $link); 
		   if ($row = mysql_fetch_array($result)){ 
		  echo $row['FECHA_CREACION'];
		  }
				?></font>
              </strong></td>
          </tr>
          <tr> 
            <td width="22%" align="left"><strong>Materia: </strong></td>
            <td width="26%"> 
              <?php
				echo $_POST["MATERIA"];
				?>
            </td>
            <td width="16%" align="left"><strong>Grado:</strong></td>
            <td width="36%" align="center"> 
              <?php
				echo $_SESSION["GRADO"];
				?>
            </td>
          </tr>
          <tr> 
            <td align="left"><strong>PERIODO:</strong></td>
            <td> 
              <?php
				echo $_POST["PERIODO"];
				?>
            </td>
            <td align="left"><strong>AÑO: </strong></td>
            <td><div align="center"> 
                <?php
				echo $_POST["ANO"];
				?>
              </div></td>
          </tr>
          <tr> 
            <td height="159" colspan="4"><p><strong>Actividad:</strong> </p>
              <p align="center"> 
                <textarea name="COMENTARIO" cols="40" rows="5" readonly="readonly" id="COMENTARIO" VALUE=""><?php
				$MATERIA=$_POST["MATERIA"];
				$GRADO=$_SESSION["GRADO"];
				$PERIODO=$_POST["PERIODO"];
				$AÑO=$_POST["ANO"];
				
				 $link = mysql_connect("localhost", "root", ""); 
		        mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		   $result = mysql_query("SELECT comentario FROM ACTIVIDADES WHERE ID_MATERIA='$MATERIA' AND GRADO='$GRADO' AND PERIODO='$PERIODO' AND ANO='$AÑO'", $link); 
		   if ($row = mysql_fetch_array($result)){ 
		  echo $row['comentario'];
		  }
				?> </textarea>
              </p>
              <p> 
                <label for="comentario"></label>
              </p></td>
          </tr>
          <tr> 
            <td colspan="4"><div align="center"> 
                <p align="center"><a href="MENU_ESTUDIANTES_ACT_VER.php"><img src="regresar.fw.png" alt="" width="70" height="70" /></a></p>
              </div></td>
          </tr>
        </table>
                                    	 
       	  </form>
  
    
      </h1></div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
