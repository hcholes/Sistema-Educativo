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
$sql = mysql_query("SELECT * FROM ENTRADA ORDER BY TIPO,ID ",$link);
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
  <td colspan="5" align="center"><span style="color=#003;"><font size="+2"><strong>Reporte de Usuarios</strong></font></span></td>
  </tr>


<tr>
  <td width=28 align="center"><strong>No.</strong></td>
  <td width=116 align="center"><strong>IDENTIDAD</strong></td>
<td width=207 align="center"><strong>NOMBRES Y APELLIDOS</strong></td>
<td width=146 align="center"><strong>TIPO</strong></td>
<td width=169 align="center"><strong>CONTRASENA</strong></td>

</tr>

<?php
$CONTADOR=1;
while($row = mysql_fetch_array($sql)){
$ID=$row["ID"];
$NOM=$row["NOMBRE"]." ".$row["APELLIDO"];
$TIPO=$row["TIPO"];
$CONTRA=$row["CONTRA"];



echo "<tr><td>".$CONTADOR."</td><td>".$ID."</td><td>".$NOM."</td><td>".$TIPO."</td><td>".$CONTRA."</td></tr>";
$CONTADOR=$CONTADOR+1;
}
?>

</table>
</body>
</html>