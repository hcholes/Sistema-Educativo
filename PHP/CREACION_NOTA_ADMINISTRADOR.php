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
	 
		  $NOTA1=$_POST["NOTA1"]; 
 		  $NOTA2=$_POST["NOTA2"]; 
		  $NOTA3=$_POST["NOTA3"]; 
		  $NOTA4=$_POST["NOTA4"]; 
		  $NOTA5=$_POST["NOTA5"]; 
		  $NOTA6=$_POST["NOTA6"]; 
		  $NOTA7=$_POST["NOTA7"]; 
		  $NOTA8=$_POST["NOTA8"]; 
		  
		  
		  
		  if ($NOTA1==""){
			$NOTA1=0;  
		  }
		   if ($NOTA2==""){
			$NOTA2=0;  
		  }
		   if ($NOTA3==""){
			$NOTA3=0;  
		  }
		   if ($NOTA4==""){
			$NOTA4=0;  
		  }
		   if ($NOTA5==""){
			$NOTA5=0;  
		  }
		   if ($NOTA6==""){
			$NOTA6=0;  
		  }
		   if ($NOTA7==""){
			$NOTA7=0;  
		  }
		   if ($NOTA8==""){
			$NOTA8=0;  
		  }
		  

$MATERIA=$_SESSION["MATERIA"];
$ESTUDIANTE=$_SESSION["ESTUDIANTE"];
$PERIODO=$_SESSION["PERIODO"];
$AÑO1=$_SESSION["ANO"];
$GRADO=$_SESSION["GRADO"];

		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 

$result = mysql_query("SELECT * FROM NOTAS WHERE ID_ESTUDIANTE='$ESTUDIANTE'and ID_MATERIA='$MATERIA'and GRADO='$GRADO' and PERIODO='$PERIODO'and ANO='$AÑO1'", $link); 
if ($row = mysql_fetch_array($result)){ 
header("Location: /MENU_ADMINISTRADOR_NOTAS_AD4.php");
exit;
}



$sql="INSERT INTO NOTAS(ID_ESTUDIANTE,ID_MATERIA,GRADO,NOTA1,NOTA2,NOTA3,NOTA4,NOTA5,NOTA6,NOTA7,NOTA8,PERIODO,ANO) VALUES ('$ESTUDIANTE','$MATERIA','$GRADO','$NOTA1','$NOTA2','$NOTA3','$NOTA4','$NOTA5','$NOTA6','$NOTA7','$NOTA8','$PERIODO','$AÑO1')";
$result = mysql_query($sql);

if (! $result){
header("Location: /MENU_ADMINISTRADOR_NOTAS_AD4.php");
exit();
}else{
header("Location: /MENU_ADMINISTRADOR_NOTAS_AD3.php");
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
