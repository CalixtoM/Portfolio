<?php
session_start();
include('conecta.php');

if(isset($_POST['em'], $_POST['pw'])) {

  $senha = hash('sha256', $_POST['pw']);

	$sql = "SELECT * FROM tb_usuario WHERE ds_email = '".$_POST['em']."' AND ds_senha = '".$senha."'";

	if($query = $mysqli->query($sql)){
		$obj = $query->fetch_object();
		if ($query->num_rows>0) {
			$_SESSION['nm'] = $obj->nm_usuario;
			header('location: adm.php');
		}
	}
	else{
		echo "falha";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <title></title>
</head>

<center>
  <body class="text-center">


    <div class="container">
      <form class="form-signin" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
        <label for="inputEmail" class="sr-only">Endereço de email</label>
        <input type="email" id="inputEmail" name="em" class="form-control" placeholder="Seu email" required="" autofocus=""><br>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="pw" id="inputPassword" class="form-control" placeholder="Senha" required="">
        <input class="btn btn-lg btn-primary btn-block" style="margin-top: 20px;" type="submit" value="login">
        <p class="mt-5 mb-3 text-muted">© 2019-2019</p>
      </form>
    

  </body>
    </div>
</center>

</html>


<style type="text/css">

  body{
    background-color: #f5f5f5;

  }

  form{
    width: 400px;
    height: 486px;
  }

  
  body {
    padding-top: 130px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
}

</style>