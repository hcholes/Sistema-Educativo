<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IE Rural Profirio Barba Jacob</title>
  <link rel="shortcut icon" href="ESCUDO.ico">
</head>

<body>
<table width="919" height="653" border="1" align="center">
  <tr> 
    <td height="201"><h3 align="center"><img src="logo.png" width="722" height="217" /></h3></td>
  </tr>
  <tr> 
    <td width="672" valign="top"><h1>&nbsp;</h1>
	  <?php 
$MATERIA=$_POST["MATERIA"]; 
$GRADO=$_POST["GRADO"]; 


//$serv = $_SERVER['DOCUMENT_ROOT'] . '/descargas/';

//$ruta = $serv . $GRADO . "/" . $MATERIA;
//echo $ruta;
//mkdir ($ruta);

//tomo el valor de un elemento de tipo texto del formulario 

//datos del arhivo 
$nombre_archivo = $_FILES['userfile']['name']; 
$tipo_archivo = $_FILES['userfile']['type']; 
$tamano_archivo = $_FILES['userfile']['size']; 

$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/descargas/';
$uploadfile = $uploaddir .$GRADO."/".$MATERIA."/".basename($_FILES['userfile']['name']);
//compruebo si las características del archivo son las que deseo 
if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")  || strpos($tipo_archivo, "doc") || strpos($tipo_archivo, "docx") || strpos($tipo_archivo, "pdf") || strpos($tipo_archivo, "xls") || strpos($tipo_archivo, "xlsx") || strpos($tipo_archivo, "avi") || strpos($tipo_archivo, "mpg") || strpos($tipo_archivo, "wmv") || strpos($tipo_archivo, "wma") || strpos($tipo_archivo, "mp3") || strpos($tipo_archivo, "mp4")) && ($tamano_archivo < 10264576))) { 
   	echo "Nombre del Archivo: ".$nombre_archivo."<BR>";
	echo "Tipo del Archivo: ".$tipo_archivo."<BR>";
	echo "Tamaño del Archivo: ".$tamano_archivo." Kb<BR><BR><BR>";
	echo "Existe error en la extensión o el tamaño del Archivo. <br><br><table><tr><td><li>Verificar el tipo, solo se permiten archivos .gif , .jpg , .doc , .docx , .xls , .xlsx , .pdf , .mp4 , .wmv , .avi , .mpg , .mp3 , .wma<br><li>se permiten archivos de 10 Mg(10264576 Bytes) máximo.</td></tr></table>"; 
echo "<a href=archivo.php>Regresar</a>";
}else{ 
   	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){ 
			echo "Nombre del Archivo: ".$nombre_archivo."<BR>";
			echo "Tipo del Archivo: ".$tipo_archivo."<BR>";
			echo "Tamaño del Archivo: ".$tamano_archivo." Kb<BR><BR><BR>";      	 
		 echo "El archivo ha sido cargado correctamente."; 
		 echo "<a href=archivo.php>Regresar</a>";
   	}else{ 
	echo "Nombre del Archivo: ".$nombre_archivo."<BR>";
	echo "Tipo del Archivo: ".$tipo_archivo."<BR>";
	echo "Tamaño del Archivo: ".$tamano_archivo." Kb<BR><BR><BR>";
      	 echo "Ocurrió algún error al subir el fichero. No pudo guardarse."; 
		    	
		 echo "<a href=archivo.php><img src=regresar.fw.png width=90 height=90 /></a>";
   	} 
} 
?></p>
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div></td>
  </tr>
</table>
</body>
</html>
