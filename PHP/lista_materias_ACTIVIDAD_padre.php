<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}
if (($_SESSION['TIPO']<>"PADRE DE FAMILIA")){
	 header("Location: /index.php");

}
?>

<HTML> 
<BODY onLoad="RecuperaDatos();">
<table width="97%" border="10">
  <tr bgcolor="#990000"> 
    <td width="17%"><div align="center"><font color="#FFFFFF" size="2"><strong>CODIGO</strong></font></div></td>
    <td width="57%"><div align="center"><font size="2"><strong><font color="#FFFFFF">NOMBRE</font></strong></font></div></td>
  </tr>
  <p><br>
    <?php

			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		  $GRADO=$_SESSION["GRADO"];
		  $sql = mysql_query("SELECT DISTINCT ID_MATERIA,NOMBRE_M FROM ACTIVIDADES,MATERIA WHERE ID=ID_MATERIA AND ACTIVIDADES.GRADO='$GRADO'", $link); 
          while ($row1 = mysql_fetch_array($sql)){ 
		  echo "<tr>";
		  echo "<td>".$row1['ID_MATERIA']."</td>";		  
		  echo "<td>".$row1['NOMBRE_M']."</td>";		   		  		  
		  echo "</tr>";
		  
		  }
		  
		 
?>
</table>
 </p>
</BODY> 
</HTML> 

