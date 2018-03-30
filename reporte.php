<?php
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=REPORTE_NOTAS.xls");
header("Pragma: no-cache");
header("Expires: 0");
//recogemos la variable de fecha con la que limitaremos la cinsulta.
//hacemos la conexion al servidor MySql
session_start();
$MATERIA= $_SESSION['MAT1'];
$GRADO=$_SESSION['GRA1'];
$AÑO=$_SESSION['ANO1'];
$PERIODO=$_SESSION['PER1'];
$link = mysql_connect("localhost", "root", ""); 
mysql_select_db("SISTEMA_EDUCATIVO", $link); 
//$conexio = mysql_connect(“localhost”,”usuariotest”,”123456″);
//realizamos la consulta
$sql = mysql_query("SELECT * FROM MATERIA,NOTAS WHERE NOMBRE_M='$MATERIA' AND MATERIA.GRADO='$GRADO' AND NOTAS.GRADO='$GRADO' AND NOTAS.PERIODO='$PERIODO' AND NOTAS.ANO='$AÑO' ",$link);

?>
<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Transitional//EN” “http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd”>
<html xmlns=”http://www.w3.org/1999/xhtml”>
<head>
<meta http-equiv="Content-Type" content=”text/html; charset=utf-8″ />
<title>Reporte de Notas</title>
  <link rel="shortcut icon" href="ESCUDO.ico">
</head>

<body>
<table width="588" border="1">
  <tr> 
    <td colspan="11" align="center"><span style="color=#003;"><font size="+2"><strong>Reporte 
      de Notas</strong></font></span></td>
  </tr>
  <tr> 
    <td colspan="5" align="center"><span style="color=#003;">GRADO:
      <?php echo $GRADO;  ?>
      </span></td>
    <td colspan="6" align="center">MATERIA:<span style="color=#003;">
      <?php echo $MATERIA;  ?>
      </span></td>
  </tr>
  <tr> 
    <td colspan="5" align="center">PERIODO:<span style="color=#003;">
      <?php echo $PERIODO;  ?>
      </span></td>
    <td colspan="6" align="center">ANO:<span style="color=#003;">
      <?php echo $AÑO;  ?>
      </span></td>
  </tr>
  <tr> 
    <td width=30 align="center"><strong>No.</strong></td>
    <td width=190 align="center"><strong>ESTUDIANTES</strong></td>
    <td width=49 align="center"><strong>NOTA 1</strong></td>
    <td width=49 align="center"><strong>NOTA 2</strong></td>
    <td width=49 align="center"><strong>NOTA 3</strong></td>
    <td width=49 align="center"><strong>NOTA 4</strong></td>
    <td width=49 align="center"><strong>NOTA 5</strong></td>
    <td width=49 align="center"><strong>NOTA 6</strong></td>
    <td width=49 align="center"><strong>NOTA 7</strong></td>
    <td width=49 align="center"><strong>NOTA 8</strong></td>
    <td width=49 align="center"><strong>NOTA FINAL</strong></td>
  </tr>
  <?php
$CONTADOR=1;
while($row = mysql_fetch_array($sql)){
$id=$row["ID_ESTUDIANTE"];
$NOTA1=$row["NOTA1"];
$NOTA2=$row["NOTA2"];
$NOTA3=$row["NOTA3"];
$NOTA4=$row["NOTA4"];
$NOTA5=$row["NOTA5"];
$NOTA6=$row["NOTA6"];
$NOTA7=$row["NOTA7"];
$NOTA8=$row["NOTA8"];
$sql1 = mysql_query("SELECT * FROM entrada WHERE ID='$id'",$link);
if ($row1 = mysql_fetch_array($sql1)){
	$nombre_est=$row1["NOMBRE"]." ".$row1["APELLIDO"];
}

echo "<tr><td><center>".$CONTADOR."</td><td><center>".$nombre_est."</td><td><center>".$NOTA1."</center></td><td><center>".$NOTA2."</center></td><td><center>".$NOTA3."</center></td><td><center>".$NOTA4."</center></td><td><center>".$NOTA5."</center></td><td><center>".$NOTA6."</center></td><td><center>".$NOTA7."</center></td><td><center>".$NOTA8."</center></td>";

if ($row["NOTA1"] <> 0 and $row["NOTA2"]==0 and $row["NOTA3"]==0 and $row["NOTA4"]==0 and $row["NOTA5"]==0 and $row["NOTA6"]==0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font ><strong>".(number_format($row["NOTA1"], 2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]==0 and $row["NOTA4"]==0 and $row["NOTA5"]==0 and $row["NOTA6"]==0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font ><strong>".(number_format((($row["NOTA1"]+$row["NOTA2"])/2),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]==0 and $row["NOTA5"]==0 and $row["NOTA6"]==0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font ><strong>".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"])/3),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]<> 0 and $row["NOTA5"]==0 and $row["NOTA6"]==0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font ><strong>".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"])/4),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]<> 0 and $row["NOTA5"]<> 0 and $row["NOTA6"]==0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font ><strong>".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"])/5),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]<> 0 and $row["NOTA5"]<> 0 and $row["NOTA6"]<> 0 and $row["NOTA7"]==0 and 			$row["NOTA8"]==0){
			echo "<td><center><font ><strong>".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"+$row["NOTA6"]])/6),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]<> 0 and $row["NOTA5"]<> 0 and $row["NOTA6"]<> 0 and $row["NOTA7"]<> 0 and 			$row["NOTA8"]==0){
			echo "<td><center><font ><strong>".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"]+$row["NOTA6"]+$row["NOTA7"])/7),2))."</strong></font></center></td>";
			}
			if ($row["NOTA1"] <> 0 and $row["NOTA2"]<> 0 and $row["NOTA3"]<> 0 and $row["NOTA4"]<> 0 and $row["NOTA5"]<> 0 and $row["NOTA6"]<> 0 and $row["NOTA7"]<> 0 and 			$row["NOTA8"]<> 0){
			echo "<td><center><font ><strong>".(number_format((($row["NOTA1"]+$row["NOTA2"]+$row["NOTA3"]+$row["NOTA4"]+$row["NOTA5"]+$row["NOTA6"]+$row["NOTA7"]+$row["NOTA8"])/8),2))."</strong></font></center></td>";
			}



echo "</tr>";
$CONTADOR=$CONTADOR+1;
}
?>
</table>
</body>
</html>