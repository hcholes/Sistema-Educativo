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
	 if (($_POST["NOMBRE2"]=="") or ($_POST["APELLIDO2"]=="") or ($_POST["TIPO"]=="") or ($_POST["CONTRA"]=="")){
	 header("Location: /MENU_USUARIOS_MOD_MERROR.php");
	  exit;
	 }
	  if (($_POST["TIPO"]=="ESTUDIANTE") and ($_POST["GRADO1"]=="--")){
	  	header("Location: /MENU_USUARIOS_MOD_MERROR.php");
	 exit;
	 }
	  if (($_POST["TIPO"]=="ESTUDIANTE") and ($_POST["GRADO2"]=="--")){
		 header("Location: /MENU_USUARIOS_MOD_MERROR.php");
	 exit;
	 }
	 
	$ID=$_SESSION['ID_USUARIO'];
    $NOMBRE=$_POST["NOMBRE2"]; 
    $APELLIDO=$_POST["APELLIDO2"]; 
	$DIRECCION=$_POST["DIRECCION2"];
    $SEXO=$_POST["SEXO2"];
   	$CELULAR=$_POST["CELULAR2"];
	$GRADO1=$_POST["GRADO1"]; 
	$GRADO2=$_POST["GRADO2"]; 
	$GRADO=$GRADO1.$GRADO2;
	$TIPO=$_POST["TIPO"]; 
	$CONTRA=$_POST["CONTRA"];
	
	$TELEFONO=$_POST['TELEFONO']; 
	$EDAD=$_POST['EDAD']; 
	$FECHA_NAC=$_POST['FECHA_NAC']; 
	$CARGO=$_POST['CARGO']; 
	$PARENTESCO=$_POST['PARENTESCO']; 
	$CONTACTO=$_POST['CONTACTO']; 
	$EMAIL=$_POST['EMAIL'];


	  if ($TELEFONO == ''){
		$TELEFONO=0;  
	  }
	    if ($CELULAR == ''){
		$CELULAR=0;  
	  }
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 

$sql="UPDATE ENTRADA SET EMAIL='$EMAIL', CONTACTO='$CONTACTO', PARENTESCO='$PARENTESCO', CARGO='$CARGO', FECHA_NAC='$FECHA_NAC', EDAD='$EDAD', TELEFONO='$TELEFONO', NOMBRE='$NOMBRE', APELLIDO='$APELLIDO', DIRECCION='$DIRECCION', SEXO='$SEXO', CELULAR='$CELULAR', GRADO='$GRADO', TIPO='$TIPO', CONTRA='$CONTRA' WHERE ID='$ID'";
//echo $sql;
$result = mysql_query($sql);

if (! $result){

header("Location: /MENU_USUARIOS_MOD_MERROR.php");

exit();
}else{

header("Location: /MENU_USUARIOS_MOD_MENSAJE.php");
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
