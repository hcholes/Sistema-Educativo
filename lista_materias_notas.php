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
    <td><div align="center"><strong><font color="#FFFFFF">GRADO</font></strong></div></td>
    <td><div align="center"><strong><font color="#FFFFFF">ID MAESTRO</font></strong></div></td>	
  </tr>

<p><br>

<?php

			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		
		  $result = mysql_query("SELECT DISTINCT ID_MATERIA FROM NOTAS ", $link); 
          while ($row = mysql_fetch_array($result)){ 
		
		  $ID_MATERIA=$row['ID_MATERIA'];
		  
		  $sql = mysql_query("SELECT ID,NOMBRE_M,GRADO,ID_MAESTRO FROM MATERIA WHERE ID='$ID_MATERIA' ORDER BY ID ", $link); 
          if ($row1 = mysql_fetch_array($sql)){ 
		  echo "<tr>";
		  echo "<td>".$row1['ID']."</td>";		  
		  echo "<td>".$row1['NOMBRE_M']."</td>";		  
		  echo "<td>".$row1['GRADO']."</td>";		  		  		  		  
		  echo "<td>".$row1['ID_MAESTRO']."</td>";		  		  		  		  		  
		  echo "</tr>";
		  }

		  }
		  
		 
?> </table>
 </p>
</BODY> 
</HTML> 

