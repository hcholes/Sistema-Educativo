<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}
if ($_SESSION['TIPO']<>"PADRE DE FAMILIA"){
	 header("Location: /index.php");

}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="bred<" />
	<meta name="keywords" content="bred<" />
	<meta name="description" content="bred<" />
	<meta name="robots" content="all" />
	<title>IE RURAL PORFIRIO BARBA JACOB</title>

	<style type="text/css" title="currentStyle" media="screen">
		@import "./css/global.css";
	</style>
    
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
      <link rel="shortcut icon" href="ESCUDO.ico">
</head>

<body>
<div id="wrapper">
	<div id="top">
    	<h1 class="logo"><a href="index.html"><img src="LOGO.fw.png" alt="" width="353" height="68" /></a></h1>
    	
    	<ul id="topnavi">
		    <li><a href="index.php">INICIO</a></li>
        	<li><a href="INSTITUCION.PHP">INSTITUCION</a></li>
        	<li><a href="MISION.PHP">MISION</a></li>
        	<li><a href="VISION.PHP">VISION</a></li>
        	<li><a href="POLITICAS.PHP">POLITICAS</a></li>
        	<li><a href="CONTACTENOS.PHP">CONTACTENOS</a></li>
      </ul>
    </div>
    <div id="header"><img src="logo.png" alt="" width="998" height="183" /></div>
    <div id="main">
		<div class="ic"></div>
    	<div id="left-part">
       	  <h1><font size="+0">Bienvenido señor(a) 
        	  <?php

echo $_SESSION['NOM1'];
?>
                <br />
        	</font></h1>
            <ul id="subnavi">
                <li class="active">
                  <div align="center">Menu principal</div>
                </li>
              <li><a href="MENU_PADRES_DE_FAMILIA_NOTAS.PHP">Notas</a></li>
               <li><a href="MENU_PADRES_DE_FAMILIA_ACT_VER.php">Mensajes</a></li>			   			  
			   <li><a href="MENU_PADRES_DE_FAMILIA_MATERIAS.PHP">Materias Asignadas</a></li>			   			   
               <li  class="active"><a href="MENU_PADRES_DE_FAMILIA_PERFIL.PHP">Perfil</a></li>
                
                
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	
    <div id="right-part"> 
	<?php
	  
		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
	

$ID=$_SESSION['ID1'];
	$sql = mysql_query("SELECT * FROM ENTRADA WHERE ID='$ID'", $link); 
	
	
		if ($row = mysql_fetch_array($sql)){
$_SESSION['ID_USUARIO']=$ID;
$_SESSION['NO_USUARIO']=$row["NOMBRE"];
$_SESSION['AP_USUARIO']=$row["APELLIDO"];
$_SESSION['SE_USUARIO']=$row["SEXO"]; 
$_SESSION['TI_USUARIO']=$row["TIPO"]; 
$_SESSION['CO_USUARIO']=$row["CONTRA"]; 
$_SESSION['GR_USUARIO']=$row["GRADO"]; 
$_SESSION['DI_USUARIO']=$row["DIRECCION"];
$_SESSION['CE_USUARIO']=$row["CELULAR"]; 

$_SESSION['EM_USUARIO']=$row["EMAIL"]; 
$_SESSION['TE_USUARIO']=$row["TELEFONO"]; 
$_SESSION['CONT_USUARIO']=$row["CONTACTO"]; 
$_SESSION['FE_USUARIO']=$row["FECHA_NAC"]; 
$_SESSION['ED_USUARIO']=$row["EDAD"]; 


$_SESSION['TEMPO']=0;
}
?>
	
      <form name="form1" id="form1" method="post" action="MENU_PADRES_DE_FAMILIA_PERFIL_MOD.php">
        <p>&nbsp;</p>
        <table width="90%" border="0" align="center">
          <tr> 
            <td width="24%" align="left">DIRECCION:</td>
            <td width="31%" align="center"><label for="DIRECCION"></label> <div align="left"> 
                <textarea name="DIRECCION" cols="20" rows="1" id="DIRECCION"><?php echo $_SESSION['DI_USUARIO'] ?></textarea>
              </div></td>
            <td width="16%" align="left">SEXO:</td>
            <td width="29%"><label for="SEXO"></label> <div align="left"> 
                <select name="SEXO" id="SEXO">
                  <option selected="selected"> 
                  <?php echo $_SESSION['SE_USUARIO'] ?>
                  </option>
                  <option>M</option>
                  <option>F</option>
                </select>
              </div></td>
          </tr>
          <tr> 
            <td align="left">&nbsp;</td>
            <td><div align="left"></div></td>
            <td align="left">&nbsp;</td>
            <td><div align="left"></div></td>
          </tr>
          <tr> 
            <td align="left">CELULAR:</td>
            <td align="center"> <label for="CELULAR"></label> <div align="left"> 
                <input type="text" name="CELULAR" id="CELULAR" VALUE=<?php echo $_SESSION['CE_USUARIO'] ?>>
              </div></td>
            <td>TELEFONO:</td>
            <td><input type="text" name="TELEFONO" id="TELEFONO" value="<?php echo $_SESSION['TE_USUARIO'] ?>" /> 
            </td>
          </tr>
          <tr> 
            <td align="left">&nbsp;</td>
            <td><div align="left"></div></td>
            <td>&nbsp;</td>
            <td><div align="left"></div></td>
          </tr>
          <tr> </tr>
          <tr> 
            <td align="left">EMAIL</td>
            <td align="center"><div align="left">
                <input type="text" name="EMAIL" id="CELULAR3" value="<?php echo $_SESSION['EM_USUARIO'] ?>" />
              </div></td>
            <td>CONTACTO</td>
            <td><textarea name="CONTACTO" cols="20" rows="1" id="CELULAR5"><?php echo $_SESSION['CONT_USUARIO'] ?></textarea></td>
          </tr>
          <tr> 
            <td align="left">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td align="left">FECHA DE NACIMIENTO</td>
            <td align="center"><div align="left">
                <input type="text" name="FECHA_NAC" id="CELULAR4" value="<?php echo $_SESSION['FE_USUARIO'] ?>" />
              </div></td>
            <td>EDAD</td>
            <td><input type="text" name="EDAD" id="CELULAR6" value="<?php echo $_SESSION['ED_USUARIO'] ?>" /></td>
          </tr>
          <tr> 
            <td align="left">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td align="left">CONTRASEÑA:</td>
            <td align="center"><div align="left"> 
                <input type="text" name="CONTRA" id="CONTRA" VALUE=<?php echo $_SESSION['CO_USUARIO'] ?>>
              </div></td>
            <td>&nbsp;</td>
            <td><div align="left"></div></td>
          </tr>
          <tr> 
            <td align="left">&nbsp;</td>
            <td align="center"> <div align="left"> </div></td>
            <td>&nbsp;</td>
            <td><div align="left"> </div></td>
          </tr>
          <tr> 
            <td colspan="4" align="center">&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="4" align="center"><input type="submit" name="Submit" value="MODIFICAR" /></td>
          </tr>
        </table>
      
      </form>  
      <p align="center"><a href="MENU_PADRES_DE_FAMILIA.PHP"><img src="INICIO_.fw.png" alt="" width="70" height="70" /></a></p>
      <p align="center">&nbsp;</p>
    
      </h1></div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
