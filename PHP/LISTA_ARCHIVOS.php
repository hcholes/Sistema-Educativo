<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IE Rural Profirio Barba Jacob</title>
</head>

<body>
<table width="919" height="653" border="1" align="center">
  <tr> 
    <td height="201" colspan="2"><h3 align="center"><img src="logo.png" width="722" height="217" /></h3></td>
  </tr>
  <tr> 
    <td width="322" valign="top"><p>&nbsp;</p>
      <p align="center"><a href="INDEX.HTML"></a></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="672" valign="top">
	<?php
  session_start(); 
 
$MATERIA=$_POST["MATERIA"]; 
$GRADO=$_POST["GRADO"]; 
$dir = $_SERVER['DOCUMENT_ROOT'] . '/descargas/'.$GRADO."/".$MATERIA; 

$directorio=opendir($dir); 
echo "<span class='texto_menu_Titulo'>Aplicaciones y Utilerias</span>"; 
echo "<br><br>"; 
while ($archivo = readdir($directorio)){ 
 if($archivo=='.' or $archivo=='..'){ 
 echo ""; 
 }else { 
 $enlace="/descargas/$GRADO/$MATERIA/".$archivo; 

 echo "<ul type='square'><li>"; 
 echo "<a href=$enlace>$archivo<br></a>"; 

 echo "</li></ul>"; 
 
 } 
 } 
closedir($directorio); 


?> 
	
      <p>&nbsp;</p>
      <p><a href="DIRECTORIO.php">Regresar</a></p></tr>
</table>
</body>
</html>
