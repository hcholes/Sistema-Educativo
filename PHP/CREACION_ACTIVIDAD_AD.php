<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}
if ($_SESSION['TIPO']<>"ADMINISTRADOR"){
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
		  
		   if (($_POST["MATERIA"]=="") or ($_POST["ID_MAESTRO1"]=="") or ($_POST["GRADO"]=="") or ($_POST["PERIODO"]=="") or ($_POST["ANO"]=="")) {



header("Location: /MENU_ADMINISTRADOR_ACT_AD_MERROR.php");
exit();
}		   
		  


 $MATERIA=$_POST["MATERIA"]; 
 $NOMBRE=$_POST["ID_MAESTRO1"]; 
 $GRADO=$_POST["GRADO"]; 
 $PERIODO=$_POST["PERIODO"]; 
 $AÑO=$_POST["ANO"]; 
 $FECHA_CREACION=$_POST["FECHA_CREACION"]; 
 $COMENTARIO=$_POST["COMENTARIO"]; 
		  
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
$sw=0;

		$result = mysql_query("SELECT * FROM ACTIVIDADES WHERE ID_MATERIA='$MATERIA' AND GRADO='$GRADO' AND PERIODO='$PERIODO' AND ANO='$AÑO' AND ID_MAESTRO='$NOMBRE'", $link); 
        if ($row = mysql_fetch_array($result)){ 

		header("Location: /MENU_ADMINISTRADOR_ACT_AD_MERROR.php");
			$sw=1;
		}
		if ($sw==0){

$sql="INSERT INTO ACTIVIDADES(ID_MATERIA,GRADO,PERIODO,ANO,FECHA_CREACION,COMENTARIO,ID_MAESTRO) VALUES ('$MATERIA','$GRADO','$PERIODO','$AÑO','$FECHA_CREACION','$COMENTARIO','$NOMBRE')";
$result = mysql_query($sql);

if (! $result){
header("Location: /MENU_ADMINISTRADOR_ACT_AD_MERROR.php");
exit();
}else{
header("Location: /MENU_ADMINISTRADOR_ACT_AD_MOK.php");
exit; 
}
}
?>
     
   </p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   
  <p><a href="MENU_ADMINISTRADOR_AD.php"><img src="regresar.fw.png" alt="" width="70" height="70" /></a></p>
 </div>

</body>
</html>
