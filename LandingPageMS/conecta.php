<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'MSLand';
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);


if (mysqli_connect_errno()) 
	trigger_error(mysqli_connect_error());

else{
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	

</body>
</html>