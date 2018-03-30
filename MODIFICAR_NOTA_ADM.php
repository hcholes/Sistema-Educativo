<?php
session_start();
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
	 	 
	
		$GRADO=$_SESSION["GRADO1"];
		$MATERIA=$_SESSION["MATERIA1"];
		$ESTUDIANTE=$_SESSION["ESTUDIANTE1"];
		$PERIODO=$_SESSION["PERIODO1"];
		$AÑO=$_SESSION["ANO1"];
	
	
		  $nota1=$_POST['NOTA1'];
		  $nota2=$_POST['NOTA2'];
		  $nota3=$_POST['NOTA3'];		  		  
		  $nota4=$_POST['NOTA4'];		  
  		  $nota5=$_POST['NOTA5'];
		  $nota6=$_POST['NOTA6'];
		  $nota7=$_POST['NOTA7'];
		  $nota8=$_POST['NOTA8'];		


	  	  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 

$sql="UPDATE NOTAS SET NOTA1='$nota1', NOTA2='$nota2', NOTA4='$nota4', NOTA3='$nota3', NOTA5='$nota5', NOTA6='$nota6', NOTA7='$nota7', NOTA8='$nota8' WHERE GRADO='$GRADO' AND ID_MATERIA='$MATERIA' AND ID_ESTUDIANTE='$ESTUDIANTE' AND PERIODO='$PERIODO' AND ANO='$AÑO'";
//echo $sql;
//exit;
$result = mysql_query($sql);

if (! $result){
header("Location: /MENU_ADMINISTRADOR_NOTAS_MOD_MERROR.php");

exit();
}else{
header("Location: /MENU_ADMINISTRADOR_NOTAS_MOD_MOK.php");
exit; 
}
?>
     
   </p>
 
   </div>

</body>
</html>
