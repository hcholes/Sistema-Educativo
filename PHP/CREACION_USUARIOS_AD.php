<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}
if ($_SESSION['TIPO']<>"MAESTRO"){
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
	 
	 if (($_POST["ID"]=="") or ($_POST["NOMBRE"]=="") or ($_POST["APELLIDO"]=="")  or ($_POST["CONTRA"]=="")){
		 header("Location: /MENU_USUARIOS_AD_MERROR.php");
		 echo "hola";
	 exit;
	 }
	 if (($_POST["TIPO"]=="ESTUDIANTE") and ($_POST["GRADO1"]=="--")){
		 header("Location: /MENU_USUARIOS_AD_MERROR.php");
	 exit;
	 }
	  if (($_POST["TIPO"]=="ESTUDIANTE") and ($_POST["GRADO2"]=="--")){
		 header("Location: /MENU_USUARIOS_AD_MERROR.php");
	 exit;
	 }


 $DOC=$_POST["DOC"]; 
 $ID=$_POST["ID"]; 
 $NOMBRE=$_POST["NOMBRE"]; 
 $APELLIDO=$_POST["APELLIDO"]; 
 $DIRECCION=$_POST["DIRECCION"]; 
 $SEXO=$_POST["SEXO"]; 
 $CELULAR=$_POST["CELULAR"]; 
 if ($_SESSION["TIPO_USUARIO"]=="ESTUDIANTE"){
  $GRADO1=$_POST["GRADO1"]; 
 $GRADO2=$_POST["GRADO2"]; 
 }else{
  $GRADO1=$_SESSION["GRADO1"]; 
 $GRADO2=$_SESSION["GRADO2"]; 
 }

 $GRADO=$GRADO1.$GRADO2;
 $TIPO=$_SESSION["TIPO_USUARIO"]; 
 $CONTRA=$_POST["CONTRA"]; 
 $EMAIL=$_POST["EMAIL"]; 
 if ($_SESSION["TIPO_USUARIO"]=="PADRE DE FAMILIA"){
  $PARENTESCO=$_POST["PARENTESCO"]; 
 }else{
  $PARENTESCO=$_SESSION["PARENTESCO"]; 
 }
if ($_SESSION["TIPO_USUARIO"]=="ADMINISTRADOR"){
 $CARGO=$_POST["CARGO"]; 
 }else{
  $CARGO=$_SESSION["CARGO"]; 
 }
 $TELEFONO=$_POST["TELEFONO"]; 
 $CONTACTO=$_POST["CONTACTO"]; 
 $FECHA_NAC=$_POST["FECHA_NAC"]; 
 $EDAD=$_POST["EDAD"]; 		  		  		  		  		  
 $OBSERVACION=$_POST["OBSERVACION"]; 		  		  		  		  		  		  
		  
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
if ($TELEFONO==""){
	$TELEFONO=0;
}
if ($CELULAR==""){
	$CELULAR=0;
}

$sql="INSERT INTO ENTRADA(ID,NOMBRE,APELLIDO,DIRECCION,CELULAR,SEXO,CONTRA,TIPO,DOC,GRADO,EMAIL,PARENTESCO,CARGO,TELEFONO,CONTACTO,FECHA_NAC,EDAD,OBSERVACION) VALUES ('$ID','$NOMBRE','$APELLIDO','$DIRECCION','$CELULAR','$SEXO','$CONTRA','$TIPO','$DOC','$GRADO','$EMAIL','$PARENTESCO','$CARGO','$TELEFONO','$CONTACTO','$FECHA_NAC','$EDAD','$OBSERVACION')";
$result = mysql_query($sql);
echo $sql;
if (! $result){
header("Location: /MENU_USUARIOS_AD_MERROR.php");
exit();
}else{
header("Location: /MENU_USUARIOS_AD_MOK.php");
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
