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

	  if (($_POST["MATERIA"]=="")){
	header("Location: /MENU_ADMINISTRADOR_NOTAS_VER.php");
					 exit;
			  }
?>
                <br />
        	</font></h1>
            <ul id="subnavi">
                <li class="active">
                  <div align="center">Menu principal</div>
                </li>
               <li class="active"><a href="MENU_ADMINISTRADOR_NOTAS_VER.php">Ver Notas</a></li>
                <li><a href="MENU_ADMINISTRADOR_NOTAS_AD.php">Adicionar  Registro de Notas</a></li>
                  <li><a href="MENU_ADMINISTRADOR_NOTAS_ELI.php">Eliminar  Registro de Notas</a></li>
                 <li><a href="MENU_ADMINISTRADOR_NOTAS_MOD.php">Modificar  Registro de Notas</a></li>
                 
                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	<div id="right-part">
       	  
      <h1 align="center"> <img src="Procedimiento_notas.fw.png" width="495" height="60" alt="PROC_MATERIA" /></h1>
       	  <p align="center">
       	    
   	      </p>
       	  <form id="form1" method="post" action="">
       	    <p align="right"><strong>Materia:
       	      <?php
		 $MATERIA=$_POST["MATERIA"]; 
		 $_SESSION['MAT1']=$MATERIA;
		 echo $MATERIA;
		 ?>
     	      </strong></p>
       	    <p align="right"><strong>Grado:
            </strong>
       	      <?php
		 $GRADO=$_POST["GRADO"]; 
		  $_SESSION['GRA1']= $GRADO;
		 echo $GRADO;
		 ?>
       	    </p>
       	    <p align="right"><strong>Periodo:</strong>
<?php
		 $PERIODO=$_POST["PERIODO"]; 
		  $_SESSION['PER1']= $PERIODO;
		 echo $PERIODO;
		 ?>
       	    </p>
       	    <p align="right"><strong>Año:</strong>
<?php
		 $AÑO=$_POST["ANO"]; 
		  $_SESSION['ANO1']= $AÑO;
		 echo $AÑO;
		 ?>
            </p>
       	    
        <table width="100%" border="1">
          <tr bgcolor="#990000"> 
            <td> 
              <div align="center"><font color="#CCCCCC" size="1"><strong>No.</strong></font></div></td>
            <td> 
              <div align="center"><font size="1"><strong><font color="#FFFFFF">NOMBRES 
                Y APELLIDOS</font></strong></font></div></td>
            <td> 
              <div align="center"><font size="1"><strong><font color="#FFFFFF"> 
                NOTA 1</font></strong></font></div></td>
            <td> 
              <div align="center"><font size="1"><strong><font color="#FFFFFF">NOTA 
                2</font></strong></font></div></td>
            <td> 
              <div align="center"><font size="1"><strong><font color="#FFFFFF">NOTA 
                3</font></strong></font></div></td>
            <td> 
              <div align="center"><font size="1"><strong><font color="#FFFFFF">NOTA 
                4</font></strong></font></div></td>
            <td> 
              <div align="center"><font size="1"><strong><font color="#FFFFFF">NOTA 
                5</font></strong></font></div></td>
            <td> 
              <div align="center"><font size="1"><strong><font color="#FFFFFF">NOTA 
                6</font></strong></font></div></td>
            <td> 
              <div align="center"><font size="1"><strong><font color="#FFFFFF">NOTA 
                7</font></strong></font></div></td>
            <td> 
              <div align="center"> 
                <p><font size="1"><strong><font color="#FFFFFF">NOTA 8</font></strong></font></p>
              </div></td>
			  <td bgcolor="#0000FF"> 
              <div align="center"><font size="1"><strong><font color="#FFFFFF">NOTA 
                FINAL</font></strong></font></div></td>
          </tr>
          <?php
		  
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 


			$result2 = mysql_query("SELECT * FROM MATERIA,NOTAS WHERE NOMBRE_M='$MATERIA' AND MATERIA.GRADO='$GRADO' AND NOTAS.GRADO='$GRADO' AND NOTAS.PERIODO='$PERIODO' AND NOTAS.ANO='$AÑO'", $link); 
			if ($row2 = mysql_fetch_array($result2)){ 
			$ID_MATERIA=$row2["ID"];
$contador=1;
			$result = mysql_query("SELECT * FROM NOTAS WHERE ID_MATERIA='$ID_MATERIA'", $link); 
			while ($row = mysql_fetch_array($result)){ 
			
			echo "<tr>";
			echo "<td><center>".$contador."</center></td>";
			$id_est=$row["ID_ESTUDIANTE"];
			$result1 = mysql_query("SELECT * FROM entrada WHERE id=$id_est ", $link); 
			if ($row1 = mysql_fetch_array($result1)){ 
			echo "<td><center>".$row1["NOMBRE"]." ".$row1["APELLIDO"]."</center></td>";			
		   }
			
			echo "<td><center>".$row["NOTA1"]."</center></td>";
			echo "<td><center>".$row["NOTA2"]."</center></td>";
			echo "<td><center>".$row["NOTA3"]."</center></td>";
			echo "<td><center>".$row["NOTA4"]."</center></td>";
			echo "<td><center>".$row["NOTA5"]."</center></td>";
			echo "<td><center>".$row["NOTA6"]."</center></td>";
			echo "<td><center>".$row["NOTA7"]."</center></td>";			
			echo "<td><center>".$row["NOTA8"]."</center></td>";
if ($row["NOTA1"] <> 0 and $row["NOTA2"]==0 and $row["NOTA3"]==0 and $row["NOTA4"]==0 and $row["NOTA5"]==0 and $row["NOTA6"]==0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font color=#OFFFFF><strong>".(number_format($row["NOTA1"], 2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]==0 and $row["NOTA4"]==0 and $row["NOTA5"]==0 and $row["NOTA6"]==0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font color=#OFFFFF><strong>".(number_format((($row["NOTA1"]+$row["NOTA2"])/2),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]==0 and $row["NOTA5"]==0 and $row["NOTA6"]==0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font color=#OFFFFF><strong>".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"])/3),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]<> 0 and $row["NOTA5"]==0 and $row["NOTA6"]==0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font color=#OFFFFF><strong>".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"])/4),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]<> 0 and $row["NOTA5"]<> 0 and $row["NOTA6"]==0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font color=#OFFFFF><strong>".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"])/5),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]<> 0 and $row["NOTA5"]<> 0 and $row["NOTA6"]<> 0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font color=#OFFFFF><strong>".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"+$row["NOTA6"]])/6),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]<> 0 and $row["NOTA5"]<> 0 and $row["NOTA6"]<> 0 and $row["NOTA7"]<> 0 and 			$row["NOTA8"]==0){
			echo "<td><center><font color=#OFFFFF><strong>".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"]+$row["NOTA6"]+$row["NOTA7"])/7),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]<> 0 and $row["NOTA5"]<> 0 and $row["NOTA6"]<> 0 and $row["NOTA7"]<> 0 and 			$row["NOTA8"]<> 0){
			echo "<td><center><font color=#OFFFFF><strong>".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"]+$row["NOTA6"]+$row["NOTA7"]+$row["NOTA8"])/8),2))."</strong></font></center></td>";
			}

			echo "</tr>";
			
			$contador=$contador+1;
			}
		  
		  			}else{
echo "NO HAY DATOS A MOSTRAR";

};
		  ?>
        </table>
       	  
       	  
        <p align="center"><a href="reporte.php"><img src="imprimir.fw.png" alt="" width="150" height="50" /></a></p>   
   	      </form>
       	
      </h1>
      <div align="center"><a href="MENU_ADMINISTRADOR_NOTAS_VER.php"><img src="regresar.fw.png" alt="" width="70" height="70" /></a> 
      </div>
      <div align="center"></div>
   	  </div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
