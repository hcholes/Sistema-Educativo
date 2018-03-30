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
?>
                <br />
        	</font></h1>
            <ul id="subnavi">
                <li class="active">
                  <div align="center">Menu principal</div>
                </li>
                <li><a href="MENU_USUARIOS_VER.php">Ver Usuarios</a></li>
                <li><a href="MENU_USUARIOS_AD_tipo.php">Crear Usuario</a><a href="#"></a></li>
                <li><a href="MENU_USUARIOS_ELI.php">Eliminar Usuario</a><a href="MENU_MATERIAS_VER.php"></a><a href="#"></a></li>
                <li class="active"><a href="MENU_USUARIOS_MOD.php">Modificar Usuario</a><a href="#"></a></li>
              <li class="active">
                  <a href="CIERRE_SESION.php"><div align="center">Cerrar Sesión</div></a><a href="#"></a>
              </li>
          </ul>
            
            
        </div>
    	<div id="right-part">
       	  
      <h1 align="center"> <img src="modificacion_usuario.fw.png" width="495" height="60" alt="PROC_MATERIA" /></h1>
       	  <form id="form1" method="post" action="BUSCAR_USUARIO.php">
       	  <p align="center">
   	        <?php
		
	if ($_SESSION['ID_USUARIO']==""){

$_SESSION['NO_USUARIO']="";
$_SESSION['AP_USUARIO']="";
$_SESSION['DI_USUARIO']=""; 
$_SESSION['CE_USUARIO']=""; 
$_SESSION['SE_USUARIO']="";  
$_SESSION['TI_USUARIO']="";
$_SESSION['CO_USUARIO']=""; 
$_SESSION['GR_USUARIO']=""; 

$_SESSION['TE_USUARIO']="";  
$_SESSION['ED_USUARIO']="";  
$_SESSION['FE_USUARIO']="";  
$_SESSION['CA_USUARIO']=""; 
$_SESSION['PA_USUARIO']=""; 
$_SESSION['CONT_USUARIO']=""; 
$_SESSION['EM_USUARIO']=""; 
$_SESSION['TEMPO']=0;

	$ID11="";
	$NOMBRE="";
	$APELLIDO="";
	$DIRECCION="";
	$SEXO="";
	$CELULAR="";
	$TIPO="";
	$CONTRA="";
	$GRADO="";
	
	$TELEFONO="";
	$EDAD="";
	$FECHA_NAC="";
	$CARGO=""; 
	$PARENTESCO="";
	$CONTACTO=""; 
	$EMAIL=""; 
	}else{
	$ID11=$_SESSION['ID_USUARIO'];
	$NOMBRE=$_SESSION['NO_USUARIO'];
	$APELLIDO=$_SESSION['AP_USUARIO'];
	$DIRECCION=$_SESSION['DI_USUARIO'];
	$SEXO=$_SESSION['SE_USUARIO'];
	$CELULAR=$_SESSION['CE_USUARIO'];
	$TIPO=$_SESSION['TI_USUARIO']; 
	$CONTRA=$_SESSION['CO_USUARIO']; 
	$GRADO=$_SESSION['GR_USUARIO']; 
	
	$TELEFONO=$_SESSION['TE_USUARIO']; 
	$EDAD=$_SESSION['ED_USUARIO']; 
	$FECHA_NAC=$_SESSION['FE_USUARIO']; 
	$CARGO=$_SESSION['CA_USUARIO']; 
	$PARENTESCO=$_SESSION['PA_USUARIO']; 
	$CONTACTO=$_SESSION['CONT_USUARIO']; 
	$EMAIL=$_SESSION['EM_USUARIO']; 

	$_SESSION['TEMPO']=0;
	}
	
		?>
   	        </p>
       	    <div align="right">
       	      <table width="154" border="0">
       	        <tr>
       	          <td align="center">IDENTIFICACION</td>
   	            </tr>
       	        <tr>
       	          <td align="center"><label for="ID"></label>
       	            <label for="ID2"></label>
       	            <select name="ID" id="ID2">
                    <?php 
			
          		  $link = mysql_connect("localhost", "root", ""); 
		  mysql_select_db("SISTEMA_EDUCATIVO", $link); 
         
		  $ID=$_SESSION['ID1'];
		  		  $result = mysql_query("SELECT * FROM ENTRADA", $link); 
		   while ($row = mysql_fetch_array($result)){ 
		  echo "<option >".$row['ID']."</option>";
		  }
		  
		?>
                  </select>
                <strong>
                <input name="button" type='button' onclick="AbreVentanaModal()" value="..." />
                </strong></td>
   	            </tr>
       	        <tr>
       	          <td align="center"><input type="submit" name="Submit" value="Buscar" /></td>
   	            </tr>
   	          </table>
       	      
          <table width="200" border="1" align="center">
            <tr bgcolor="#990000"> 
              <td> <div align="center"><font size="2"><strong>ID</strong></font></div></td>
              <td> <div align="center"><font size="2"><strong>NOMBRE</strong></font></div></td>
              <td> <div align="center"><font size="2"><strong>APELLIDO</strong></font></div></td>
              <td> <div align="center"><font size="2"><strong>DIRECCION</strong></font></div></td>
              <td> <div align="center"><font size="2"><strong>SEXO</strong></font></div></td>
              <td> <div align="center"><font size="2"><strong>CELULAR</strong></font></div></td>
              <td> <div align="center"><font size="2"><strong>GRADO</strong></font></div></td>
              <td> <div align="center"><font size="2"><strong>TIPO</strong></font></div></td>
              <td> <div align="center"><font size="2"><strong>CONTRA</strong></font></div></td>
            </tr>
            <tr> 
              <td><div align="center">
                  <?php echo $ID11; ?>
                </div></td>
              <td><div align="center">
                  <?php echo $NOMBRE; ?>
                </div></td>
              <td><div align="center">
                  <?php echo $APELLIDO; ?>
                </div></td>
              <td><div align="center">
                  <?php echo $DIRECCION; ?>
                </div></td>
              <td><div align="center">
                  <?php echo $SEXO; ?>
                </div></td>
              <td><div align="center">
                  <?php echo $CELULAR; ?>
                </div></td>
              <td><div align="center">
                  <?php echo $GRADO; ?>
                </div></td>
              <td><div align="center">
                  <?php echo $TIPO; ?>
                </div></td>
              <td><div align="center">
                  <?php echo $CONTRA; ?>
                </div></td>
            </tr>
          </table>
       	      <p>&nbsp;</p>
       	    </div>
       	  </form>
       	  <form id="form2" method="post" action="MODIFICAR_USUARIO.php">
       	    <div align="center">
       	      
          <table width="86%" border="0" align="center">
            <tr> 
              <td width="17%" align="left"><font size="1">NOMBRE<font color="#FF0000"><strong>(*)<font color="#FFFFFF">:</font></strong></font></font></td>
              <td width="31%" align="center"> <div align="left">
                  <textarea name="NOMBRE2" cols="20" rows="1" class="active"><?php echo $NOMBRE; ?></textarea>
                </div></td>
              <td width="18%" align="left"><font size="1">APELLIDO<font color="#FF0000"><strong>(*)<font color="#FFFFFF">:</font></strong></font></font></td>
              <td width="34%" align="center">
<label for="APELLIDO2"></label>
                <div align="left">
                  <textarea name="APELLIDO2" cols="20" rows="1"><?php echo $APELLIDO; ?></textarea>
                </div></td>
            </tr>
            <tr> 
              <td align="left">&nbsp;</td>
              <td>&nbsp;</td>
              <td align="left">&nbsp;</td>
              <td><div align="center"></div></td>
            </tr>
            <tr> 
              <td align="left"><font size="1">DIRECCION</font></td>
              <td align="center"> <div align="left">
                  <label for="DIRECCION2"></label>
                  <textarea name="DIRECCION2" cols="20" rows="1"><?php echo $DIRECCION; ?></textarea>
                </div></td>
              <td align="left"><font size="1">SEXO<font color="#FF0000"><strong>(*)<font color="#FFFFFF">:</font></strong></font></font></td>
              <td>
<label for="SEXO2"></label>
                <div align="left">
                  <select name="SEXO2" >
                    <option selected="selected"> 
                    <?php echo $SEXO; ?>
                    </option>
                    <option>M</option>
                    <option>F</option>
                  </select>
                </div></td>
            </tr>
            <tr> 
              <td align="left">&nbsp;</td>
              <td>&nbsp;</td>
              <td align="left">&nbsp;</td>
              <td><div align="center"></div></td>
            </tr>
            <tr> 
              <td align="left"><font size="1">CELULAR</font></td>
              <td align="center"> <div align="left">
                  <label for="TELEFONO2"> 
                  <input type="text" name="CELULAR2" VALUE=<?php echo $CELULAR; ?>>
                  </label>
                </div></td>
              <td align="left"><font size="1">TELEFONO</font></td>
              <td align="center">
<label for="CELULAR2"></label>
                <div align="left">
                  <input name="TELEFONO" type="text" id="TELEFONO" value="<?php echo $TELEFONO; ?>" />
                </div></td>
            </tr>
            <tr> 
              <td align="left">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><div align="center"></div></td>
            </tr>
            <tr> 
              <td align="left"><p><font size="1">FECHA </font><font size="1">NACIMIENTO<font color="#FF0000"><strong>(*)<font color="#FFFFFF">:</font></strong></font></font></p>
                </td>
              <td align="center"> <div align="left">
                  <input name="FECHA_NAC" type="text" id="FECHA_NAC" value="<?php echo $FECHA_NAC; ?>" />
                </div></td>
              <td><font size="1">EDAD<font color="#FF0000"><strong>(*)<font color="#FFFFFF">:</font></strong></font></font></td>
              <td> <div align="left">
                  <input name="EDAD" type="text" id="EDAD" value="<?php echo $EDAD; ?>" />
                </div></td>
            </tr>
            <tr> 
              <td align="left">&nbsp;</td>
              <td align="center"></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td align="left"><font size="1">PARENTESCO</font></td>
              <td align="center"> <div align="left">
                  <input name="PARENTESCO" type="text" id="PARENTESCO" value="<?php echo $PARENTESCO; ?>" />
                </div></td>
              <td><font size="1">EMAIL</font></td>
              <td>
<input name="EMAIL" type="text" id="EMAIL" value="<?php echo $EMAIL; ?>" />
              </td>
            </tr>
            <tr> 
              <td align="left">&nbsp;</td>
              <td align="center"></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td align="left"><font size="1">CARGO</font></td>
              <td align="center"> <div align="left">
                  <input name="CARGO" type="text" id="PARENTESCO23" value="<?php echo $CARGO; ?>" />
                </div></td>
              <td><font size="1">GRADO</font></td>
              <td> <div align="left">
                  <select name="GRADO1" ">
                    <option selected="selected">--</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                  </select>
                  <select name="GRADO2">
                    <option>--</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                    <option>F</option>
                  </select>
                
				</div></td>
            </tr>
            <tr> 
              <td align="left">&nbsp;</td>
              <td align="center">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td align="left"><font size="1">CONTACTO</font></td>
              <td align="center"> <div align="left">
                  <input name="CONTACTO" type="text" id="PARENTESCO32" value="<?php echo $CONTACTO; ?>" />
                </div></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td align="left">&nbsp;</td>
              <td align="center">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td align="left"><font size="1">TIPO<font color="#FF0000"><strong>(*)<font color="#FFFFFF">:</font></strong></font></font></td>
              <td align="center"> <div align="left">
                  <select name="TIPO">
                    <option selected="selected"> 
                    <?php echo $TIPO; ?>
                    </option>
                    <option>ADMINISTRADOR</option>
                    <option>MAESTRO</option>
                    <option>ESTUDIANTE</option>
                    <option>PADRE DE FAMILIA</option>
                  </select>
                </div></td>
              <td><font size="1">CONTRASEÑA<font color="#FF0000"><strong>(*)<font color="#FFFFFF">:</font></strong></font></font></td>
              <td> <div align="left">
                  <input type="password" name="CONTRA" id="textfield" value=<?php echo $CONTRA; ?>>
                </div></td>
            </tr>
          </table>
   	        </div>
       	    <p align="center">
       	      <label for="CC"></label>
       	      <input type="submit" name="MODIFICAR" id="MODIFICAR" value="Modificar" />
   	        </p>
   	      </form>
       	  <p align="center">
       	   
       	  </p>
       	 
      <p align="center"><a href="MENU_ADMINISTRADOR.php"><img src="INICIO_.fw.png" alt="" width="70" height="70" /></a></p>
    
      </h1></div>
    </div>
    <div id="footer">
    	<p align="center">© Copyright 2013. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>

<SCRIPT> 
//creamos una variable de tipo array para pasar y recuperar los datos 
var datos=new Array(); 

function AbreVentanaModal(){ 
datos=showModalDialog('lista_usuarios.php',datos,'status:no;resizable:yes'); 
} 

</SCRIPT> 