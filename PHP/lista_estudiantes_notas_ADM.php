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
<table width="75%" border="10">
  <tr bgcolor="#990000"> 
    <td><div align="center"><strong><font color="#FFFFFF">IDENTIFICACION</font></strong></div></td>
    <td><div align="center"><strong><font color="#FFFFFF">NOMBRE</font></strong></div></td>
    <td><div align="center"><strong><font color="#FFFFFF">APELLIDO</font></strong></div></td>
    <td><div align="center"><strong><font color="#FFFFFF">GRADO</font></strong></div></td>
  </tr>

<p><br>

<?php

          $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		 
		  $GRADO=$_SESSION["GRADO"];
		  $sql = mysql_query("SELECT * FROM ENTRADA WHERE GRADO='$GRADO'", $link); 
          while ($row1 = mysql_fetch_array($sql)){ 
		  echo "<tr>";
		  echo "<td>".$row1['ID']."</td>";		  
		  echo "<td>".$row1['NOMBRE']."</td>";		  
		  echo "<td>".$row1['APELLIDO']."</td>";		  
		  echo "<td>".$row1['GRADO']."</td>";		  		  		  		  
		  echo "</tr>";
		   }
		  
		 
?> </table>
 </p>
</BODY> 
</HTML> 

