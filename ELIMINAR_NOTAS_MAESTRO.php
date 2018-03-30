
<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}
if ($_SESSION['TIPO']<>"MAESTRO"){
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
		   if (($_POST["MATERIA"]=="") or ($_POST["GRADO"]=="") or ($_POST["ESTUDIANTE1"]=="") or ($_POST["PERIODO"]=="") or ($_POST["ANO"]=="")){
		header("Location: /MENU_MAESTRO_NOTAS_ELI.php");
	exit;
		}
	
$MATERIA=$_POST["MATERIA"]; 
$ESTUDIANTE=$_POST["ESTUDIANTE1"]; 
$GRADO=$_POST["GRADO"]; 
$PERIODO=$_POST["PERIODO"]; 
$ANO=$_POST["ANO"]; 

		  
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 

$sql = "DELETE FROM NOTAS WHERE ID_MATERIA='$MATERIA' AND ID_ESTUDIANTE='$ESTUDIANTE' AND GRADO='$GRADO' AND PERIODO='$PERIODO' AND ANO='$ANO'";
$result = mysql_query($sql);

if (! $result){
header("Location: /MENU_MAESTRO_NOTAS_ELI_MERROR.php");
exit();
}else{
header("Location: /MENU_MAESTRO_NOTAS_ELI_MOK.php");
exit; 
}
?>
     
   </p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p><a href="MENU_MAESTROS_AD.php">REGRESAR</a></p>
 </div>
 <p>&nbsp;</p>
 <p align="center"><a href="MENU_MAESTROS_AD.php"></a></p>
</body>
</html>
