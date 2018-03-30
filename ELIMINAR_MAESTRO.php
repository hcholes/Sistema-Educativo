
<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
	 
}
if ($_SESSION['TIPO']<>"ADMINISTRADOR"){
	 header("Location: /index.php");
exit;
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
		  
		  if (isset($_POST["ID"])) $ID=$_POST["ID"]; 

		  
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 

$sql = "DELETE FROM ENTRADA WHERE ID='$ID'";
$result = mysql_query($sql);

if (! $result){

echo "EXISTE ERRORES EN EL PROCESO DE ELIMINACION";
exit();
}else{
header("Location: /MENU_MAESTROS_ELI.php");
exit; 
}
?>
     
   </p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   
  <p><a href="MENU_MAESTROS_AD.php"><img src="regresar.fw.png" alt="" width="70" height="70" /></a></p>
 </div>
 <p>&nbsp;</p>
 <p align="center"><a href="MENU_MAESTROS_AD.php"></a></p>
</body>
</html>
