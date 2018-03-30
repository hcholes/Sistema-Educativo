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
  session_start(); 
echo $_SESSION['NOM1'];
?>
                <br />
        	</font></h1>
            <ul id="subnavi">
                <li class="active">
                  <div align="center">Menu principal</div>
                </li>
                <li><a href="VER_NOTAS_MAESTROS1.php">Ver Notas</a></li>
                <li><a href="INSERTAR_NOTAS.php">Adicionar  Nota</a></li>
                 <li><a href="MENU_MAESTROS_AD.php">Eliminar Nota</a></li>
                 <li><a href="MENU_MAESTROS_AD.php">Modificar Nota</a></li>
                
                
              <li class="active">
                  <a href="index.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	<div id="right-part">
       	  
      <h1 align="center"> <img src="Procedimiento_notas.fw.png" width="495" height="60" alt="PROC_MATERIA" /></h1>
       	  <form id="form1" method="post" action="VER_NOTAS_MAESTRO_2.php">
       	    <table width="30%" border="0" align="right">
       	      <tr>
       	        <td><div align="right"><strong>Materia:
       	          <select name="MATERIA">
       	            <?php 
			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		 $ID=$_SESSION['ID1'];
		  $result = mysql_query("SELECT * FROM MATERIA WHERE ID_MAESTRO = '$ID'", $link); 
          while ($row = mysql_fetch_array($result)){ 
		$TEMP=$row['NOMBRE_M'];
		  echo "<option >".$row['NOMBRE_M']."</option>";
		  }
		?>
   	            </select>
     	          </strong></div></td>
   	          </tr>
       	      <tr>
       	        <td><div align="right"><strong>Grado: </strong>
       	          <select name="GRADO">
       	            <?php 
			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		 $ID=$_SESSION['ID1'];
		  $result = mysql_query("SELECT * FROM MATERIA WHERE ID_MAESTRO = '$ID'", $link); 
          while ($row = mysql_fetch_array($result)){ 
		$TEMP=$row['NOMBRE_M'];
		  echo "<option >".$row['GRADO']."</option>";
		  }
		?>
   	              </select>
     	          </div></td>
   	          </tr>
       	      <tr>
       	        <td><div align="right">
       	          <input type="submit" name="Submit" value="Enviar" />
     	          </div></td>
   	          </tr>
   	        </table>
       	    <div align="right"></div>
       	    <p align="right">&nbsp;</p>
       	    <p align="right"><strong> </strong></p>
       	    
        <table width="100%" border="1">
          <tr bgcolor="#990000"> 
            <td> 
              <div align="center"><font color="#CCCCCC" size="2"><strong>No.</strong></font></div></td>
       	        
            <td> 
              <div align="center"><font size="2"><strong><font color="#FFFFFF">NOMBRES 
       	          Y APELLIDOS</font></strong></font></div></td>
       	        
            <td> 
              <div align="center"><font size="2"><strong><font color="#FFFFFF"> NOTA 1</font></strong></font></div></td>
       	        
            <td> 
              <div align="center"><font size="2"><strong><font color="#FFFFFF">NOTA 
       	          2</font></strong></font></div></td>
       	        
            <td> 
              <div align="center"><font size="2"><strong><font color="#FFFFFF">NOTA 
       	          3</font></strong></font></div></td>
       	        
            <td> 
              <div align="center"><font size="2"><strong><font color="#FFFFFF">NOTA 
       	          4</font></strong></font></div></td>
       	        
            <td> 
              <div align="center"><font size="2"><strong><font color="#FFFFFF">NOTA 
       	          5</font></strong></font></div></td>
       	        
            <td> 
              <div align="center"><font size="2"><strong><font color="#FFFFFF">NOTA 
       	          6</font></strong></font></div></td>
       	        
            <td> 
              <div align="center"><font size="2"><strong><font color="#FFFFFF">NOTA 
       	          7</font></strong></font></div></td>
       	        
            <td> 
              <div align="center"><font size="2"><strong><font color="#FFFFFF">NOTA 
                8</font></strong></font></div></td>
   	          </tr>
   	        </table>
       	    </form>
       	  <p align="center">
       	    
   	      </p>
       	  
      <p align="center"><a href="MENU_MAESTROS.php"><img src="regresar.fw.png" alt="" width="70" height="70" /></a></p>
    
      </h1></div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
