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

	 $TEMP=$_POST["ID"];
	
		  if ($TEMP=="") {
			header("Location: /MENU_MATERIAS_MOD.php");
		  }else{
			 $ID=$_POST["ID"];
		  }
		  
		

		  
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 

			


	$sql = mysql_query("SELECT * FROM MATERIA WHERE ID='$ID'", $link); 
		if ($row = mysql_fetch_array($sql)){

$_SESSION['ID_MATERIA']=$row["ID"];
$_SESSION['NO_MATERIA']=$row["NOMBRE_M"];
$_SESSION['GR_MATERIA']=$row["GRADO"];
$_SESSION['ID_MAESTRO']=$row["ID_MAESTRO"]; 
header("Location: /MENU_MATERIAS_MOD.php");
exit; 
}else{
	header("Location: /MENU_MATERIAS_MOD.php");
exit();
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
