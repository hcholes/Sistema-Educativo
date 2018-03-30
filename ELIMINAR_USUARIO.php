
<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}
if ($_SESSION['TIPO']<>"ADMINISTRADOR"){
	 header("Location: /index.php");

}

?><html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <link rel="shortcut icon" href="ESCUDO.ico">
</head>

<body>

 <div align="center">
   <p>
     <?php
		  
		  if ($_POST["ID"]=="") {
			header("Location: /MENU_USUARIOS_ELI.php");
exit();  
		  }
		  
		  if (isset($_POST["ID"])) $ID=$_POST["ID"]; 

		  
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 

$sql = "DELETE FROM ENTRADA WHERE ID='$ID'";
$result = mysql_query($sql);

if (! $result){
header("Location: /MENU_USUARIOS_ELI_MERROR.php");
exit();
}else{
$sql = "DELETE FROM NOTAS WHERE ID_ESTUDIANTE='$ID'";
$result = mysql_query($sql);
$sql = "DELETE FROM NOTAS WHERE ID_MAESTRO='$ID'";
$result = mysql_query($sql);
$sql = "DELETE FROM ESTUDIANTE_PADRE WHERE ID_ESTUDIANTE='$ID'";
$result = mysql_query($sql);
$sql = "DELETE FROM ACTIVIDADES WHERE ID_MAESTRO='$ID'";
$result = mysql_query($sql);
$sql = "DELETE FROM MATERIA WHERE ID_MAESTRO='$ID'";
$result = mysql_query($sql);
$sql = "DELETE FROM ESTUDIANTE_PADRE WHERE ID_PADRE='$ID'";
$result = mysql_query($sql);
header("Location: /MENU_USUARIOS_ELI_MOK.php");
exit; 
}
?>
     
   </p>
   <p>&nbsp;</p>
   
  <p>&nbsp;</p>
  <p><a href="/MENU_MAESTROS_ad.php"><img src="/regresar.fw.png" width="70" height="70" border="0"></a></p>
</div>
 <p>&nbsp;</p>
 <p align="center"><a href="MENU_MAESTROS_AD.php"></a></p>
</body>
</html>
