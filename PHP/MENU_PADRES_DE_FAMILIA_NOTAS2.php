<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}
if ($_SESSION['TIPO']<>"PADRE DE FAMILIA"){
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
   <li class="active"><a href="MENU_PADRES_DE_FAMILIA_NOTAS.PHP">Notas</a></li>
               <li><a href="MENU_PADRES_DE_FAMILIA_ACT_VER.php">Mensajes</a></li>	   
			   <li><a href="MENU_PADRES_DE_FAMILIA_MATERIAS.PHP">Materias Asignadas</a></li>			   			   
                <li><a href="MENU_PADRES_DE_FAMILIA_PERFIL.PHP">Perfil</a></li>
                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
   	  
    <div id="right-part"> 
      <h1 align="center"><img src="notas_estudiante.fw.png" alt="" width="495" height="60" /></h1>
      <h1 align="right"><font size="4">GRADO:
   	      <?php
   echo "<font size=4>".$_SESSION['GRADO_ESTUDIANTE']."</font>";
  ?>
   	    </font> 
   	      </p>
       	  </h1>
       	  
      <p align="center"><strong><font size="2">LAS NOTAS DE 
        <?php 
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		 $ID=$_SESSION["ID1"];
		  $result = mysql_query("SELECT DISTINCT ID_ESTUDIANTE FROM ESTUDIANTE_PADRE WHERE ID_PADRE ='$ID'", $link); 
          if ($row = mysql_fetch_array($result)){ 
		  $idest=$row["ID_ESTUDIANTE"];
		  }
		  
		  $result = mysql_query("SELECT DISTINCT NOMBRE,APELLIDO FROM ENTRADA WHERE ID ='$idest'", $link); 
          if ($row = mysql_fetch_array($result)){ 
		  echo $row["NOMBRE"]." ".$row["APELLIDO"];
		  }
		?>
        EN LA MATERIA DE <?php echo $_POST["MATERIA"]; ?> SON:</font></strong></p>
      <table width="98%" border="1">
        <tr bgcolor="#FF0000"> 
          <td> 
            <div align="center"><font color="#FFFFFF"><strong>NOTA 
       	        1 </strong></font></div></td>
       	      
          <td> 
            <div align="center"><font color="#FFFFFF"><strong>NOTA 
       	        2 </strong></font></div></td>
       	      
          <td> 
            <div align="center"><font color="#FFFFFF"><strong>NOTA 
       	        3 </strong></font></div></td>
       	      
          <td> 
            <div align="center"><font color="#FFFFFF"><strong>NOTA 
       	        4</strong></font></div></td>
       	      
          <td> 
            <div align="center"><font color="#FFFFFF"><strong>NOTA 
       	        5</strong></font></div></td>
       	      
          <td> 
            <div align="center"><font color="#FFFFFF"><strong>NOTA 
       	        6</strong></font></div></td>
       	      
          <td> 
            <div align="center"><font color="#FFFFFF"><strong>NOTA 
       	        7</strong></font></div></td>
       	      
          <td> 
            <div align="center"><font color="#FFFFFF"><strong>NOTA 8</strong></font></div></td>
   	        </tr>
       	    <?php
		  $NOMMATERIA=$_POST["MATERIA"];
		  $GRADO=$_SESSION['GRADO_ESTUDIANTE'];
		  $ID=$_SESSION['ID_ESTUDIANTE'];
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 


			$result = mysql_query("SELECT * FROM MATERIA WHERE NOMBRE_M = '$NOMMATERIA' AND GRADO='$GRADO'", $link); 
			if  ($row = mysql_fetch_array($result)){ 
			$MATERIA=$row["ID"];
			}
			
			$result = mysql_query("SELECT * FROM NOTAS WHERE GRADO = '$GRADO' AND ID_MATERIA='$MATERIA' AND ID_ESTUDIANTE='$ID'", $link); 
			if ($row = mysql_fetch_array($result)){ 
			
			echo "<tr>";
	    	echo "<td><center>".$row["NOTA1"]."</center></td>";
			echo "<td><center>".$row["NOTA2"]."</center></td>";
			echo "<td><center>".$row["NOTA3"]."</center></td>";
			echo "<td><center>".$row["NOTA4"]."</center></td>";
			echo "<td><center>".$row["NOTA5"]."</center></td>";
			echo "<td><center>".$row["NOTA6"]."</center></td>";
			echo "<td><center>".$row["NOTA7"]."</center></td>";
			echo "<td><center>".$row["NOTA8"]."</center></td>";
	
			echo "</tr>";
			//echo "<p>&nbsp;</p>";
			echo "<table align=center border=5>";
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]==0 and $row["NOTA3"]==0 and $row["NOTA4"]==0 and $row["NOTA5"]==0 and $row["NOTA6"]==0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font size=3 color=#OFFFFF><strong> SU PROMEDIO ES:".(number_format($row["NOTA1"], 2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]==0 and $row["NOTA4"]==0 and $row["NOTA5"]==0 and $row["NOTA6"]==0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font size=3 color=#OFFFFF><strong> SU PROMEDIO ES:".(number_format((($row["NOTA1"]+$row["NOTA2"])/2),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]==0 and $row["NOTA5"]==0 and $row["NOTA6"]==0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font size=3 color=#OFFFFF><strong> SU PROMEDIO ES:".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"])/3),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]<> 0 and $row["NOTA5"]==0 and $row["NOTA6"]==0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font size=3 color=#OFFFFF><strong> SU PROMEDIO ES:".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"])/4),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]<> 0 and $row["NOTA5"]<> 0 and $row["NOTA6"]==0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font size=3 color=#OFFFFF><strong> SU PROMEDIO ES:".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"])/5),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]<> 0 and $row["NOTA5"]<> 0 and $row["NOTA6"]<> 0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font size=3 color=#OFFFFF><strong> SU PROMEDIO ES:".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"+$row["NOTA6"]])/6),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]<> 0 and $row["NOTA5"]<> 0 and $row["NOTA6"]<> 0 and $row["NOTA7"]<> 0 and 			$row["NOTA8"]==0){
			echo "<td><center><font size=3 color=#OFFFFF><strong> SU PROMEDIO ES:".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"]+$row["NOTA6"]+$row["NOTA7"])/7),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]<> 0 and $row["NOTA5"]<> 0 and $row["NOTA6"]<> 0 and $row["NOTA7"]<> 0 and 			$row["NOTA8"]<> 0){
			echo "<td><center><font size=3 color=#OFFFFF><strong> SU PROMEDIO ES:".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"]+$row["NOTA6"]+$row["NOTA7"]+$row["NOTA8"])/8),2))."</strong></font></center></td>";
			}

			
			echo "</table>";
					
			}
		  
		
		  ?>
   	    </table>
       	  <h1 align="right">
       	    <p align="center">
       	      
   	        </p>
       	    
        <p align="center"><a href="menu_padres_de_familia_notas.php"><img src="regresar.fw.png" alt="" width="70" height="70" /></a></p>
       	    
   	    </h1>
   	  </div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
