<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
if ($_SESSION['ID1']==""){
	 header("Location: /index.php");
}
if ($_SESSION['TIPO']<>"ADMINISTRADOR"){
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
$tipo=$_POST['TIPO'];
?>
                <br />
        	</font></h1>
            <ul id="subnavi">
                <li class="active">
                  <div align="center">Menu principal</div>
                </li>
                <li><a href="MENU_USUARIOS_VER.php">Ver Usuarios</a></li>
                <li class="active"><a href="MENU_USUARIOS_AD_tipo.PHP">Crear Usuario</a></li>
                <li><a href="MENU_USUARIOS_ELI.php">Eliminar Usuario</a></li>
                <li><a href="MENU_USUARIOS_MOD.php">Modificar Usuario</a></li>
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a>
              </li>
          </ul>
            
            
        </div>
    	
    <div id="right-part"> 
      <h1 align="center"> <img src="creacion_usuarios.fw.png" width="470" height="60" alt="PROC_MATERIA" />
        <?php
			if ($tipo=="ESTUDIANTE"){
			echo "<img src=/estudiante.png />";
			}else{
			if ($tipo=="MAESTRO"){
			echo "<img src=/profes.png />";
			}
			}
			?>
      </h1>
       	  <form name="form1" id="form1" method="post" action="CREACION_USUARIOS_AD.php">
        	
        <p>&nbsp; </p>

        <table width="90%" border="0" align="center">
          <tr> 
            <td width="15%" align="left"><font size="1">TIPO ID</font><font color="#FF0000" size="1"><strong>(*)</strong></font><font size="1">:</font></td>
            <td width="36%" align="center"><label for="textfield2"></label> <div align="left"> 
                <select name="DOC" size="-5">
                  <option selected="selected">Tarjeta de Identidad</option>
                  <option>Cedula de Ciudadania</option>
                  <option>Pasaporte</option>
                  <option>Documento Nacional de Idenificacion</option>
                  <option>Numero de Identificacion Tributaria</option>
                </select>
              </div></td>
            <td align="center"><div align="left"><font size="1">IDENTIFICACION</font><font color="#FF0000" size="1"><strong>(*)</strong></font><font size="1">:</font></div></td>
            <td align="center"><div align="left"> 
                <input type="text" name="ID" />
              </div></td>
          </tr>
          <tr> 
            <td align="left">&nbsp;</td>
            <td align="center"><div align="left"></div></td>
            <td width="24%">&nbsp;</td>
            <td width="25%"><label for="textfield"></label></td>
          </tr>
          <tr> 
            <td align="left"><font size="1">NOMBRE</font><font color="#FF0000" size="1"><strong>(*)</strong></font><font size="1">:</font></td>
            <td align="center"><div align="left"> 
                <input type="text" name="NOMBRE" />
              </div></td>
            <td align="left"><div align="left"><font size="1">APELLIDO</font><font color="#FF0000" size="1"><strong>(*)</strong></font><font size="1">:</font></div></td>
            <td align="center"><label for="APELLIDO"></label> <div align="left"> 
                <input type="text" name="APELLIDO" id="APELLIDO" />
              </div></td>
          </tr>
          <tr> 
            <td align="left">&nbsp;</td>
            <td><div align="left"></div></td>
            <td align="left">&nbsp;</td>
            <td><div align="left"></div></td>
          </tr>
          <tr> 
            <td align="left"><font size="1">DIRECCION:</font></td>
            <td align="center"><label for="DIRECCION"></label> <div align="left"> 
                <input type="text" name="DIRECCION" id="DIRECCION" />
              </div></td>
            <td align="left"><font size="1">SEXO</font><font color="#FF0000" size="1"><strong>(*)</strong></font><font size="1">:</font></td>
            <td><label for="SEXO"></label> <div align="left"> 
                <select name="SEXO" id="SEXO">
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
            <td align="left"><font size="1">CELULAR:</font></td>
            <td align="center"> <div align="left"> 
                <input type="text" name="CELULAR" id="CELULAR" />
              </div></td>
            <td><font size="1">TELEFONO:</font></td>
            <td><input type="text" name="TELEFONO" id="TELEFONO" /></td>
          </tr>
          <tr> 
            <td align="left">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td align="left"><font size="1">FECHA</font> <font size="1">NACIMIENTO</font><font color="#FF0000" size="1"><strong>(*)</strong></font><font size="1">:</font></td>
            <td align="center"><div align="left"> 
                <input type="text" name="FECHA_NAC" />
              </div></td>
            <td><font size="1">EDAD</font><font color="#FF0000" size="1"><strong>(*)</strong></font><font size="1">:</font></td>
            <td><input type="text" name="EDAD" id="CELULAR4" /></td>
          </tr>
          <tr> 
            <td align="left">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td align="left"><font size="1">PARENTESCO:</font></td>
            <td align="center"><div align="left"> 
                <?php
			if ($tipo<>"PADRE DE FAMILIA"){
			echo "<input type=text name=PARENTESCO disabled=disabled value=DESABILITADO>";
			$_SESSION['PARENTSCO']="DESABILITADO";
			}else{
			echo "<input type=text name=PARENTESCO />";			
			}
			?>
              </div></td>
            <td><font size="1">EMAIL:</font></td>
            <td><input type="text" name="EMAIL" id="CELULAR6" /></td>
          </tr>
          <tr> 
            <td align="left">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td align="left"><font size="1">CARGO:</font></td>
            <td align="center"><label for="CELULAR"></label> <div align="left"> 
                <?php
			if ($tipo<>"ADMINISTRADOR"){
			echo "<input type=text name=CARGO disabled=disabled value=DESABILITADO />";
			$_SESSION['CARGO']="DESABILITADO";
			}else{
			echo "<input type=text name=CARGO />";			
			}
			?>
              </div></td>
            <td><font size="1">GRADO:</font></td>
            <td> 
              <?php
			if ($tipo<>"ESTUDIANTE"){
			echo "<select name=GRADO1 disabled=disabled>";
			echo "<option selected=selected>--</option>";
			echo "</select> <select name=GRADO2 disabled=disabled>";
			echo "<option>--</option>";
			echo "</select>";
			$_SESSION['GRADO1']="--";
			$_SESSION['GRADO2']="--";
			}else{
			echo "<select name=GRADO1>";
			echo "<option selected=selected>--</option>";
			echo "<option>1</option>";
			echo "<option>2</option>";
			echo "<option>3</option>";
			echo "<option>4</option>";
			echo "<option>5</option>";
			echo "<option>6</option>";
			echo "<option>7</option>";
			echo "<option>8</option>";
			echo "<option>9</option>";
			echo "<option>10</option>";
			echo "<option>11</option>";
			echo "</select> <select name=GRADO2>";
			echo "<option>--</option>";
			echo "<option>A</option>";
			echo "<option>B</option>";
			echo "<option>C</option>";
			echo "</select>";
			}
			?>
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
            <td align="left"><font size="1">CONTACTO:</font></td>
            <td align="center"><div align="left"> 
                <input type="text" name="CONTACTO" id="EMAIL" />
              </div></td>
            <td>&nbsp;</td>
            <td><div align="left"> </div></td>
          </tr>
          <tr> 
            <td align="left">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td align="left"><font size="1">TIPO:</font></td>
            <td align="center"><div align="left"> 
                <select name="TIPO" disabled="disabled">
                  <option> 
                  <?php
				  echo $tipo; 
				  $_SESSION['TIPO_USUARIO']=$tipo;
				  ?>
                  </option>
                </select>
              </div></td>
            <td><font size="1">CONTRASEÑA</font><font color="#FF0000" size="1"><strong>(*)</strong></font><font size="1">:</font></td>
            <td><input type="password" name="CONTRA" id="CONTRA2" /></td>
          </tr>
          <tr> 
            <td align="left">&nbsp;</td>
            <td align="center"><div align="left"> </div></td>
            <td>&nbsp;</td>
            <td><div align="left"> </div></td>
          </tr>
          <tr> 
            <td height="90" colspan="4" align="center"><font size="1">OBSERVACIONES:</font> 
              <textarea name="OBSERVACION" id="FECHA_NAC"></textarea></td>
          </tr>
          <tr> 
            <td colspan="4" align="center"><input type="submit" name="Submit" value="Crear Usuarios" /></td>
          </tr>
        </table>
        <p align="center">los datos que tengan <font color="#FF0000"><strong>(*)</strong></font> 
          son obligatorios </p>
        </form>
      
      <p align="center"><a href="MENU_USUARIOS_AD_tipo.php"><img src="regresar.fw.png" alt="" width="70" height="70" /></a></p>
    
      </h1></div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
