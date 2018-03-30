<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
  <link rel="shortcut icon" href="ESCUDO.ico">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>
<table width="1300" height="653" border="1" align="center">
  <tr> 
    <td height="201" colspan="2"><h3 align="center"><img src="logo.png" width="722" height="217" /></h3></td>
  </tr>
  <tr> 
    <td width="274" valign="top"><p> Usuario: 
        <?php
  session_start(); 
echo $_SESSION['NOM1'];
?>
        <br>
        
        Tipo: 
        <?php
   echo $_SESSION['TIPO'];
  ?>
      </p>
      <p>&nbsp;</p>
      <p align="center"><a href="index.html"><img src="cerrar_sesion.jpg" width="108" height="83" alt="cerrar" /></a></p></td>
    <td width="629" align="center" valign="top"><h1 align="right"><font size="4">GRADO: </font> 
        <?php
   echo "<font size=4>".$_SESSION['GRADO']."</font>";
  ?>
      </h1>
            <p align="right">
		
		
		         
        </p>
        <table width="98%" border="1" align="center">
          <tr bgcolor="#003366"> 
            <td width="12%"> <div align="center"><font color="#FFFFFF"><strong>NOTA 
                1 </strong></font></div></td>
            <td width="12%"> <div align="center"><font color="#FFFFFF"><strong>NOTA 
                2 </strong></font></div></td>
            <td width="13%"><div align="center"><font color="#FFFFFF"><strong>NOTA 
                3 </strong></font></div></td>
            <td width="12%"><div align="center"><font color="#FFFFFF"><strong>NOTA 
                4</strong></font></div></td>
            <td width="13%"><div align="center"><font color="#FFFFFF"><strong>NOTA 
                5</strong></font></div></td>
            <td width="13%"><div align="center"><font color="#FFFFFF"><strong>NOTA 
                6</strong></font></div></td>
            <td width="11%"><div align="center"><font color="#FFFFFF"><strong>NOTA 
                7</strong></font></div></td>
            <td width="14%"> <div align="center"><font color="#FFFFFF"><strong>NOTA 
                8 </strong></font></div></td>
          </tr>
          <?php
		  $NOMMATERIA=$_POST["MATERIA"];
		  $GRADO=$_SESSION['GRADO'];
		  $ID=$_SESSION['ID1'];
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 


			$result = mysql_query("SELECT * FROM MATERIA WHERE NOMBRE_M = '$NOMMATERIA' AND GRADO='$GRADO'", $link); 
			if  ($row = mysql_fetch_array($result)){ 
			$MATERIA=$row["ID"];
			}


			$result = mysql_query("SELECT * FROM NOTAS WHERE GRADO = '$GRADO' AND ID_MATERIA='$MATERIA' AND ID_ESTUDIANTE='$ID'", $link); 
			IF ($row = mysql_fetch_array($result)){ 
			
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
			echo "<table align=center border=10>";
			if ($row["NOTA1"] <> "" and $row["NOTA2"]=="" and $row["NOTA3"]=="" and $row["NOTA4"]=="" and $row["NOTA5"]=="" and $row["NOTA6"]=="" and $row["NOTA7"]=="" and 			$row["NOTA8"]==""){
			echo "<td><center><font size=5>PROMEDIO: ".($row["NOTA1"])."</font></center></td>";
			}
			if ($row["NOTA1"] <> "" and $row["NOTA2"]<>"" and $row["NOTA3"]=="" and $row["NOTA4"]=="" and $row["NOTA5"]=="" and $row["NOTA6"]=="" and $row["NOTA7"]=="" and 			$row["NOTA8"]==""){
			echo "<td><center><font size=5>PROMEDIO: ".(($row["NOTA1"]+$row["NOTA2"])/2)."</font></center></td>";
			}
			if ($row["NOTA1"] <> "" and $row["NOTA2"]<>"" and $row["NOTA3"]<>"" and $row["NOTA4"]=="" and $row["NOTA5"]=="" and $row["NOTA6"]=="" and $row["NOTA7"]=="" and 			$row["NOTA8"]==""){
			echo "<td><center><font size=5>PROMEDIO: ".(($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"])/3)."</font></center></td>";
			}
			if ($row["NOTA1"] <> "" and $row["NOTA2"]<>"" and $row["NOTA3"]<>"" and $row["NOTA4"]<>"" and $row["NOTA5"]=="" and $row["NOTA6"]=="" and $row["NOTA7"]=="" and 			$row["NOTA8"]==""){
			echo "<td><center><font size=5>PROMEDIO: ".(($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"])/4)."</font></center></td>";
			}
			if ($row["NOTA1"] <> "" and $row["NOTA2"]<>"" and $row["NOTA3"]<>"" and $row["NOTA4"]<>"" and $row["NOTA5"]<>"" and $row["NOTA6"]=="" and $row["NOTA7"]=="" and 			$row["NOTA8"]==""){
			echo "<td><center><font size=5>PROMEDIO: ".(($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"])/5)."</font></center></td>";
			}
			if ($row["NOTA1"] <> "" and $row["NOTA2"]<>"" and $row["NOTA3"]<>"" and $row["NOTA4"]<>"" and $row["NOTA5"]<>"" and $row["NOTA6"]<>"" and $row["NOTA7"]=="" and 			$row["NOTA8"]==""){
			echo "<td><center><font size=5>PROMEDIO: ".(($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"+$row["NOTA6"]])/6)."</font></center></td>";
			}
			if ($row["NOTA1"] <> "" and $row["NOTA2"]<>"" and $row["NOTA3"]<>"" and $row["NOTA4"]<>"" and $row["NOTA5"]<>"" and $row["NOTA6"]<>"" and $row["NOTA7"]<>"" and 			$row["NOTA8"]==""){
			echo "<td><center><font size=5>PROMEDIO: ".(($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"]+$row["NOTA6"]+$row["NOTA7"])/7)."</font></center></td>";
			}
			if ($row["NOTA1"] <> "" and $row["NOTA2"]<>"" and $row["NOTA3"]<>"" and $row["NOTA4"]<>"" and $row["NOTA5"]<>"" and $row["NOTA6"]<>"" and $row["NOTA7"]<>"" and 			$row["NOTA8"]<>""){
			echo "<td><center><font size=5>PROMEDIO: ".(($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"]+$row["NOTA6"]+$row["NOTA7"]+$row["NOTA8"])/8)."</font></center></td>";
			}
			
			echo "</table>";
					
			}
		  
		  echo " <p><a href=NOTAS_ESTUDIANTE.php>REGRESAR</a></p>";
		  ?>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
          <p><a href="NOTAS_ESTUDIANTE.php"><img src="regresar.fw.png" alt="" width="90" height="90" /></a></p>
        <p>&nbsp;</p>
    
      <p align="right">&nbsp; </p> </td>
  </tr>
</table>
</body>
</html>
