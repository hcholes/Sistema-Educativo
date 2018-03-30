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
	if ($_SESSION['TEMPO']==1){
	$TEMP=$_SESSION['TEMPO'];
	}else{
	 $TEMP=$_POST['ID'];
	 }
		  if ($TEMP=="") {
			  header("Location: /MENU_USUARIOS_MOD.php");
		  }else{
			  $ID=$_POST['ID'];;
		  }
		  
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
	


	$sql = mysql_query("SELECT * FROM ENTRADA WHERE ID='$ID'", $link); 
	
	
		if ($row = mysql_fetch_array($sql)){
$_SESSION['ID_USUARIO']=$ID;
$_SESSION['NO_USUARIO']=$row["NOMBRE"];
$_SESSION['AP_USUARIO']=$row["APELLIDO"];
$_SESSION['SE_USUARIO']=$row["SEXO"]; 
$_SESSION['TI_USUARIO']=$row["TIPO"]; 
$_SESSION['CO_USUARIO']=$row["CONTRA"]; 
$_SESSION['GR_USUARIO']=$row["GRADO"]; 
$_SESSION['DI_USUARIO']=$row["DIRECCION"];
$_SESSION['CE_USUARIO']=$row["CELULAR"]; 

$_SESSION['TE_USUARIO']=$row["TELEFONO"]; 
$_SESSION['ED_USUARIO']=$row["EDAD"]; 
$_SESSION['FE_USUARIO']=$row["FECHA_NAC"]; 
$_SESSION['CA_USUARIO']=$row["CARGO"]; 
$_SESSION['PA_USUARIO']=$row["PARENTESCO"]; 
$_SESSION['CONT_USUARIO']=$row["CONTACTO"]; 
$_SESSION['EM_USUARIO']=$row["EMAIL"];

$_SESSION['TEMPO']=0;

 
header("Location: /MENU_USUARIOS_MOD.php");
exit; 
}else{
	echo "EXISTE ERRORES EN EL PROCESO DE BUSQUEDA, O NO SE ENCONTRO EL REGISTRO";
	header("Location: /MENU_USUARIOS_MOD.php");
exit();
}
?>
     
   </p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
 </div>
 <p>&nbsp;</p>
 <p align="center"><a href="MENU_USUARIOS_MOD.php"></a></p>
</body>
</html>
