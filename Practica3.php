<html>
<head></head>
<body background="billete.jpg">
<legend><center><h1><FONT COLOR="blue">Convertidor De Dolares a Pesos</FONT></h1></legend><br/><br/><br/>
	<label for="txtDolares"><b><FONT COLOR="coral">Dolares</FONT></b></label><br/>
	<input type="text" size="20" maxlength="255" id="txtDolares" name="dolares"/></center>
<br/>
<br/>
<center><label for="txtCambio"><b><FONT COLOR="coral">Tipo de Cambio</FONT></b></label><br/>
	<input type="text" size="20" maxlength="255" id="txtCambio" name="cambio"/></center>
<br/>
<br/>
<center><label for="txtPesos"><b><FONT COLOR="orangered">Pesos</FONT></b></label><br/>
	<input type="text" size="20" maxlength="255" id="txtPesos" name="pesos"/></center>
<br/>
<br/>
<center><input type="submit" name="convertir" value="Convertir" />
<input type="button" name="" value="Limpiar" /></center>
<?php
$dolar=10;
$cambio=15.5;
convertir=$dolar*$cambio;
echo convertir;
?>
</body>
</html>