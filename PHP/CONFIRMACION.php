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
</head>

<body>
<div align="center">
  <?php 

if (isset($_POST["IDENTIFICACION"])) $IDENTIFICACION=$_POST["IDENTIFICACION"]; 
if (isset($_POST["CONTRASEÑA"]))  $CONTRASEÑA=$_POST["CONTRASEÑA"]; 
if (isset($_POST["DOC"])) $DOC=$_POST["DOC"];

$link = mysql_connect("localhost", "root", ""); 
mysql_select_db("SISTEMA_EDUCATIVO", $link); 

IF ($DOC=="") {
 header("Location: /index.php");
exit;
}

$result = mysql_query("SELECT * FROM ENTRADA WHERE ID = '$IDENTIFICACION' and CONTRA = '$CONTRASEÑA' and DOC = '$DOC'", $link); 
if ($row = mysql_fetch_array($result)){ 
  
  
$_SESSION['ID1']=$row["ID"];
$_SESSION['NOM1']=$row["NOMBRE"]." ".$row["APELLIDO"];
$_SESSION['TIPO']=$row["TIPO"];
$_SESSION['GRADO']=$row["GRADO"];
     
  echo "Bienvenido(a) Señor(a) ";
  echo "<p>&nbsp;</p>";
  echo "<h1>".$row["NOMBRE"]." ".$row["APELLIDO"]."\n";
  echo "</h1>";
  
if ($_SESSION['TIPO'] == "ADMINISTRADOR"){
	header("Location: /MENU_ADMINISTRADOR.php");
	echo "<p>&nbsp;</p>";
echo "\n <a href='MENU_ADMINISTRADOR.php'>IR AL MENU PRINCIPAL DEL ADMINISTRADOR</a>";
} else {
if ($_SESSION['TIPO'] == "MAESTRO"){
	header("Location: /MENU_MAESTROS.php");
echo "\n <a href='MENU_MAESTRO.php'>IR AL MENU PRINCIPAL DEL MAESTRO</a>";
} else {
if ($_SESSION['TIPO'] == "ESTUDIANTE"){
header("Location: /MENU_ESTUDIANTES.php");
} else {
	if ($_SESSION['TIPO'] == "PADRE DE FAMILIA"){
header("Location: /MENU_PADRES_DE_FAMILIA.php");
}
}
}
}

 

} else { 
echo "\n\n ¡ No se ha encontrado ningún registro ! \n\n"; 
echo "<a href='INDEX.HTML'><img src=regresar.fw.png width=90 height=90 /></a>";
} 


?>
</div>
</body>
</html>
