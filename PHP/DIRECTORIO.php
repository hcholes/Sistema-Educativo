<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IE Rural Profirio Barba Jacob</title>
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
<table width="1034" height="653" border="1" align="center">
  <tr> 
    <td height="201" colspan="2"><h3 align="center"><img src="logo.png" width="722" height="217" /></h3></td>
  </tr>
  <tr> 
    <td width="279" valign="top"><p><strong>Usuario: 
        <?php
  session_start(); 
echo $_SESSION['NOM1'];
?>
        <br />
        Identificado con: 
        <?php
   echo $_SESSION['ID1'];
$ID=$_SESSION['ID1'];
  ?>
        <br />
        Tipo: 
        <?php
   echo $_SESSION['TIPO'];
  ?>
        </strong></p>
      <p align="center"><a href="INDEX.HTML"></a>Menu Principal</p>
      <p><a href="INDEX.HTML"> 
        <center>
        </center>
        </a></p>
      <ul>
        <li>Crear Estudiante</li>
        <li>Insertar Notas</li>
      </ul>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="624" valign="top"><h1>&nbsp;</h1>

		  
	  <form name="form1" id="form1" method="post" action="LISTA_ARCHIVOS.php">
        <table width="30%" border="0" align="center">
          <tr> 
            <td><div align="center"><strong>Materia: 
                <select name="MATERIA">
                  <?php 
			
          		  $link = mysql_connect("localhost", "root"); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		  $result = mysql_query("SELECT * FROM MATERIA WHERE ID_MAESTRO = '$ID'", $link); 
          while ($row = mysql_fetch_array($result)){ 
		$TEMP=$row['NOMBRE_M'];
		  echo "<option >".$row['NOMBRE_M']."</option>";
		  }
		?>
                </select>
                </strong></div></td>
          </tr>
          <tr> 
            <td><div align="center"><strong>Grado: </strong> 
                <select name="GRADO">
                  <?php 
		  $link = mysql_connect("localhost", "root"); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		  $ID=$_SESSION['ID1'];
		  $GRADO=$_SESSION['GRADO'];
		  $result = mysql_query("SELECT * FROM MATERIA WHERE ID_MAESTRO = '$ID'", $link); 
		  echo $_SESSION['ID1'];
          while ($row = mysql_fetch_array($result)){ 
		  echo "<option >".$row['GRADO']."</option>";
		  }
		?>
                </select>
              </div></td>
          </tr>
          <tr> 
            <td> <div align="center"> 
                <input type="submit" name="Submit" value="Enviar" />
              </div></td>
          </tr>
        </table>
        <div align="right"></div>
      </form>
      <font size="6">&nbsp;</font> </td>
  </tr>
</table>
</body>
</html>
