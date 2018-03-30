<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}
if ($_SESSION['TIPO']<>"ADMINISTRADOR"){
	 header("Location: /index.php");

}
?>
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <link rel="shortcut icon" href="ESCUDO.ico">
</head>

<body>

 <div align="center">
   <p>
     <?php
		  
		   if (($_POST["ID"]=="") or ($_POST["NOMBRE"]=="--") or ($_POST["GRADO1"]=="--") or ($_POST["GRADO2"]=="--")) {
header("Location: /MENU_MATERIAS_AD_MERROR.php");
exit();
}		   
		  
		  if (isset($_POST["ID"])) $ID=$_POST["ID"]; 
if (isset($_POST["NOMBRE"]))  $NOMBRE=$_POST["NOMBRE"]; 
if (isset($_POST["GRADO1"]))  $GRADO1=$_POST["GRADO1"]; 
if (isset($_POST["GRADO2"]))  $GRADO2=$_POST["GRADO2"]; 
if (isset($_POST["ID_MAESTRO"]))  $IDMAESTRO=$_POST["ID_MAESTRO"]; 
		  
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 


$sql="INSERT INTO MATERIA(ID,NOMBRE_M,GRADO,ID_MAESTRO) VALUES ('$ID','$NOMBRE',('$GRADO1' '$GRADO2'),'$IDMAESTRO')";
$result = mysql_query($sql);

if (! $result){
header("Location: /MENU_MATERIAS_AD_MERROR.php");
exit();
}else{
header("Location: /MENU_MATERIAS_AD_MOK.php");
exit; 
}
?>
     
   </p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   
  <p><a href="MENU_MATERIAS_AD.php"><img src="regresar.fw.png" alt="" width="70" height="70" /></a></p>
 </div>
 <p>&nbsp;</p>
 <p align="center"><a href="MENU_MATERIAS_AD.php"></a></p>
</body>
</html>
