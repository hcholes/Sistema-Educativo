<?php
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=REPORTE_NOTAS.xls");
header("Pragma: no-cache");
header("Expires: 0");
//recogemos la variable de fecha con la que limitaremos la cinsulta.
//hacemos la conexion al servidor MySql
$link = mysql_connect("localhost", "root", ""); 
mysql_select_db("SISTEMA_EDUCATIVO", $link); 
//$conexio = mysql_connect(“localhost”,”usuariotest”,”123456″);
//realizamos la consulta
session_start();
$GRADO=$_SESSION["GRAA"];
$sql = mysql_query("SELECT ID,NOMBRE,APELLIDO FROM ENTRADA  WHERE GRADO='$GRADO' ORDER BY ID",$link);
?>
<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Transitional//EN” “http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd”>
<html xmlns=”http://www.w3.org/1999/xhtml”>
<head>
<meta http-equiv="Content-Type" content=”text/html; charset=utf-8″ />
<title>Reporte de Usuarios</title>
</head>

<body>
<table width="700" border="1">
  <tr> 
    <td colspan="3" align="center"><span style="color=#003;"><font size="+2"><strong>Reporte 
      de Usuarios</strong></font></span></td>
  </tr>
  <tr> 
    <td colspan="2" align="center"><div align="left"><strong>GRADO: <?php echo $_SESSION["GRAA"];?></strong></div></td>
    <td align="center"><div align="left"></div></td>
  </tr>
  <tr> 
    <td width=28 align="center"><strong>No.</strong></td>
    <td width=116 align="center"><strong>IDENTIDAD</strong></td>
    <td width=207 align="center"><strong>NOMBRES Y APELLIDOS</strong></td>
  </tr>
  <?php
$CONTADOR=1;
while($row = mysql_fetch_array($sql)){
$ID=$row["ID"];
$NOM=$row["NOMBRE"]." ".$row["APELLIDO"];




echo "<tr><td>".$CONTADOR."</td><td>".$ID."</td><td>".$NOM."</td></tr>";
$CONTADOR=$CONTADOR+1;
}
?>
</table>
</body>
</html>