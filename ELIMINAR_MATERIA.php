<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}

?>
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

 <div align="center">
   <p>
     <?php
		  
		  if (($_POST["GRADO1"]=="--") or ($_POST["GRADO2"]=="--")){
		 		 header("Location: /MENU_MATERIAS_ELI_MERROR.php");
exit();
		  }
		  if (isset($_POST["ID"])) $ID=$_POST["ID"]; 
if (isset($_POST["NOMBRE"]))  $NOMBRE=$_POST["NOMBRE"]; 
if (isset($_POST["GRADO1"]))  $GRADO1=$_POST["GRADO1"]; 
if (isset($_POST["GRADO2"]))  $GRADO2=$_POST["GRADO2"]; 
if (isset($_POST["ID_MAESTRO"]))  $IDMAESTRO=$_POST["ID_MAESTRO"]; 
		  
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
$GRADO=$GRADO1.$GRADO2;
$sql = "DELETE FROM MATERIA WHERE ID='$ID' AND GRADO='$GRADO'";
$result = mysql_query($sql);


if (! $result){
header("Location: /MENU_MATERIAS_ELI_MERROR.php");
exit();
}else{
$sql = "DELETE FROM NOTAS WHERE ID_MATERIA='$ID'";
$result = mysql_query($sql);
header("Location: /MENU_MATERIAS_ELI_MOK.php");
exit; 
}
?>
     
   </p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p><a href="MENU_MATERIAS_AD.php">REGRESAR</a></p>
 </div>
 <p>&nbsp;</p>
 <p align="center"><a href="MENU_MATERIAS_AD.php"></a></p>
</body>
</html>
