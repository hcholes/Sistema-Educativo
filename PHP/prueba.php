<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
class canimal{
var $ojos=2;	
function patas(){
return "Este animal tiene ".$this->patas." patas y además tiene ".$this->ojos." ojos <br>";
}
}
$gato= new canimal();
$perro = new canimal();

$gato->patas = 3;
$perro->patas = 4;
echo $gato->patas();
echo $perro->patas();
?>
<script type="text/javascript">
document.write("hola mundo");
</script>
</body>
</html>