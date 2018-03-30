<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
  <link rel="shortcut icon" href="ESCUDO.ico">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>
<table width="1300" height="653" border="1" align="center">
  <tr> 
    <td height="201" colspan="2"><h3 align="center"><img src="logo.png" width="722" height="217" /></h3></td>
  </tr>
  <tr> 
    <td width="274" valign="top"><p> Usuario: 
        <?php
  session_start(); 
echo $_SESSION['NOM1'];
?>
        <br>
        
        Tipo: 
        <?php
   echo $_SESSION['TIPO'];
  ?>
      </p>
      <p>&nbsp;</p>
      <p align="center"><a href="index.html"><img src="cerrar_sesion.jpg" width="108" height="83" alt="cerrar" /></a></p></td>
    <td width="629" align="center" valign="top"><h1 align="right"><font size="4">GRADO: </font> 
        <?php
   echo "<font size=4>".$_SESSION['GRADO']."</font>";
  ?>
    </h1>
      <form name="form1" id="form1" method="post" action="NOTAS_ESTUDIANTE2.php">
        <p align="center">Seleccione la asignatura </p>
        <p align="center">
          <select name="MATERIA">
            
            <?php 
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		  $ID=$_SESSION['ID1'];
		  $GRADO=$_SESSION['GRADO'];
		  $result = mysql_query("SELECT * FROM MATERIA,ENTRADA WHERE MATERIA.GRADO = '$GRADO' and ENTRADA.GRADO = '$GRADO'", $link); 
          while ($row = mysql_fetch_array($result)){ 
		  echo "<option >".$row['NOMBRE_M']."</option>";
		  }
		?>
          </select>
          
          
          
          
          <input type="submit" name="Submit" value="VER" />
        </p>
        <p><a href="MENU_ESTUDIANTE.php"><img src="regresar.fw.png" alt="" width="90" height="90" /></a></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </form>
      <p align="right">&nbsp; </p> </td>
  </tr>
</table>
</body>
</html>
