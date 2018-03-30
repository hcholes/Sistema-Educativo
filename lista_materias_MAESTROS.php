<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}
if (($_SESSION['TIPO']<>"MAESTRO") AND ($_SESSION['TIPO']<>"ADMINISTRADOR")){
	 header("Location: /index.php");

}
?>

<HTML> 
<BODY onLoad="RecuperaDatos();">
<table width="97%" border="10">
  <tr bgcolor="#990000"> 
    <td width="17%"><div align="center"><font size="2"><strong><font color="#FFFFFF">IDENTIFICACION</font></strong></font></div></td>
    <td width="57%"><div align="center"><font size="2"><strong><font color="#FFFFFF">NOMBRE</font></strong></font></div></td>
    <td width="10%"><div align="center"><font size="2"><strong><font color="#FFFFFF">GRADO</font></strong></font></div></td>
    <td width="16%"><div align="center"><font size="2"><strong><font color="#FFFFFF">ID 
        MAESTRO</font></strong></font></div></td>
  </tr>
  <p><br>
    <?php

			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		  $ID=$_SESSION["ID1"];
		  $sql = mysql_query("SELECT ID,NOMBRE_M,GRADO,ID_MAESTRO FROM MATERIA  WHERE ID_MAESTRO='$ID' ", $link); 
          while ($row1 = mysql_fetch_array($sql)){ 
		  echo "<tr>";
		  echo "<td>".$row1['ID']."</td>";		  
		  echo "<td>".$row1['NOMBRE_M']."</td>";		  
		  echo "<td>".$row1['GRADO']."</td>";		  		  		  		  
		  echo "<td>".$row1['ID_MAESTRO']."</td>";		  		  		  		  		  
		  echo "</tr>";
		  
		  }
		  
		 
?>
</table>
 </p>
</BODY> 
</HTML> 

