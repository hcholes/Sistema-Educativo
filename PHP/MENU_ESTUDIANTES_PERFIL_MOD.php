<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}

?>
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
  <link rel="shortcut icon" href="ESCUDO.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

 <div align="center">
   <p>
     <?php
	 if (($_POST["CONTRA"]=="")){
	 header("Location: /MENU_ESTUDIANTES_PERFIL_MERROR.php");
	 exit;
	 }
	$ID=$_SESSION['ID1'];
	$DIRECCION=$_POST["DIRECCION"];
    $SEXO=$_POST["SEXO"];
   	$CELULAR=$_POST["CELULAR"];
	$CONTRA=$_POST["CONTRA"];
	
	 $TELEFONO=$_POST["TELEFONO"]; 
 $CONTACTO=$_POST["CONTACTO"]; 
 $FECHA_NAC=$_POST["FECHA_NAC"]; 
 $EDAD=$_POST["EDAD"]; 
  $EMAIL=$_POST["EMAIL"]; 
	  
	 
	    if ($CELULAR == ''){
		$CELULAR=0;  
	  }
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 

$sql="UPDATE ENTRADA SET EMAIL='$EMAIL', CONTACTO='$CONTACTO', FECHA_NAC='$FECHA_NAC', EDAD='$EDAD', TELEFONO='$TELEFONO', DIRECCION='$DIRECCION', SEXO='$SEXO', CELULAR='$CELULAR', CONTRA='$CONTRA' WHERE ID='$ID'";
//echo $sql;
$result = mysql_query($sql);

if (! $result){
header("Location: /MENU_ESTUDIANTES_PERFIL_MERROR.php");
exit();
}else{
$_SESSION['TEMPO']=1;
header("Location: /MENU_ESTUDIANTES_PERFIL_MOK.php");
exit; 
}
?>
     
   </p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   </div>
 <p>&nbsp;</p>

</body>
</html>
