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
  <link rel="shortcut icon" href="ESCUDO.ico">
</head>

<body>

 <div align="center">
   <p>
     <?php
	if (($_SESSION['ID_MATERIA']=="") or ($_POST["NOMBRE"]=="") or ($_POST["GRADO1"]=="--") or ($_POST["GRADO2"]=="--") or ($_POST["ID_MAESTRO"]=="")){
	header("Location: /MENU_MATERIAS_MOD_MERROR.php");
exit();

	}
	  if (isset($_POST["NOMBRE"])) $NOMBRE=$_POST["NOMBRE"]; 
      if (isset($_POST["GRADO1"])) $GRADO1=$_POST["GRADO1"]; 
	  if (isset($_POST["GRADO2"])) $GRADO2=$_POST["GRADO2"];
	  if (isset($_POST["ID_MAESTRO"])) $IDMAESTRO=$_POST["ID_MAESTRO"];

$ID= $_SESSION['ID_MATERIA'];
$GRADO=$GRADO1.$GRADO2;
		  
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 

$sql="UPDATE MATERIA SET NOMBRE_M='$NOMBRE', GRADO='$GRADO', ID_MAESTRO='$IDMAESTRO' WHERE ID='$ID'";
echo $sql;
$result = mysql_query($sql);

if (! $result){
header("Location: /MENU_MATERIAS_MOD_MERROR.php");
exit();
}else{
header("Location: /MENU_MATERIAS_MOD_MOK.php");
exit; 
}
?>
     
   </p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   
  <p><a href="MENU_MATERIAS_AD.php"><img src="regresar.fw.png" alt="" width="70" height="70" /></a></p>
 </div>

</body>
</html>
