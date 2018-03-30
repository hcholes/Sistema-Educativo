<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IE Rural Profirio Barba Jacob</title>
</head>

<body>
<table width="919" height="653" border="1" align="center">
  <tr> 
    <td height="201" colspan="2"><h3 align="center"><img src="logo.png" width="722" height="217" /></h3></td>
  </tr>
  <tr> 
    <td width="322" valign="top"><p>&nbsp;</p>
      <p align="center"><a href="INDEX.HTML"></a></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="672" valign="top">
	<?php
  session_start(); 
?>
<form action="subearchivo.php" method="post" enctype="multipart/form-data">
  <p>
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
  </p>
  <table width="30%" border="0" align="right">
    <tr> 
      <td><div align="right"><strong>Materia: 
          <select name="MATERIA">
            <?php 
			
          		  $link = mysql_connect("localhost", "root"); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		  $ID=$_SESSION['ID1'];
		  $result = mysql_query("SELECT * FROM MATERIA WHERE ID_MAESTRO = '$ID'", $link); 
		   while ($row = mysql_fetch_array($result)){ 
		  echo "<option >".$row['NOMBRE_M']."</option>";
		  }
		  
		?>
          </select>
          </strong></div></td>
    </tr>
    <tr> 
      <td><div align="right"><strong>Grado: </strong> 
          <select name="GRADO">
            <?php 
		  $link = mysql_connect("localhost", "root"); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		  $ID=$_SESSION['ID1'];
		  $result = mysql_query("SELECT * FROM MATERIA WHERE ID_MAESTRO = '$ID'", $link); 
		   while ($row = mysql_fetch_array($result)){ 
		  echo "<option >".$row['GRADO']."</option>";
		  }
		?>
          </select>
        </div></td>
    </tr>
  </table>
        <p>&nbsp;</p>
        <p>
		se permiten archivos .gif , .jpg , .doc , .docx , .xls , .xlsx , .pdf , .mp4 , .wmv , .avi , .mpg , .mp3 , .wma.<br> Tamaño de los archivos deben ser de 10 Mg(10264576 Bytes) máximo."; 
		<br>
          <b>Enviar un nuevo archivo: </b> <br>
          <b> 
          <input name="userfile" type="file" />
          </b> <br>
          <input type="submit" value="Enviar">
        </p>
</form>
	

	  
	  
	  
    </td>
  </tr>
</table>
</body>
</html>
