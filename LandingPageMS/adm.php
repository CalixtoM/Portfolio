<?php
include("conecta.php");
session_start();

	if(!isset($_SESSION['nm'])){
		echo "<script>location.href='index.php';</script>";
	}

	else{
		
		$select = "SELECT * FROM leads";

		$adm = "SELECT * FROM tb_usuario";

	}
	

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="icon" type="imagem/png" href="img/logo2.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
	<meta charset="utf-8">
	<title>Adm</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark  bg-dark" id="topo">
		<div class="container">
			<a class="navbar-brand">
				<img src="img/logo2.png" alt="" width="60" height="52">
			</a>
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			    <li class="nav-item" >
			    	<a class="nav-link" id="linknav" style="color: red;" href="destroy.php">Sair</a>
			    </li>
			</ul>	
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h4>Leads Registrados:</h4><br>

					<div class="table-responsive">
						<table class="table ">
				  			<thead>
				    			<tr>
							      	<th scope="col">Nome</th>
									<th scope="col">Email</th>
								    <th scope="col">Celular</th>
									<th scope="col">Telefone</th>
				    			</tr>
				  			</thead>
				  			<tbody>
								<?php

							if($result = $mysqli->query($select)){
								while($obj = $result->fetch_object()){

								
						 		    echo "<tr>
										      <td>$obj->nm_lead</td>
										      <td>$obj->ds_leademail</td>
										      <td>$obj->nr_telefone</td>
										      <td>$obj->nr_celular</td>
										  </tr>";


						 		}
							}

					else{
							echo "erro";
					}
								?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<h4>Administradores Registrados:</h4><br>

					<div class="table-responsive">
						<table class="table ">
				  			<thead>
				    			<tr>
							      	<th scope="col">Nome</th>
									<th scope="col">Email</th>
								    <th scope="col">Opções</th>
				    			</tr>
				  			</thead>
				  			<tbody>
								<?php

							if($result = $mysqli->query($adm)){
								while($obj = $result->fetch_object()){

								
						 		    echo "<tr>
										      <td>$obj->nm_usuario</td>
										      <td>$obj->ds_email</td>
										      <td></td>
										  </tr>";


						 		}
							}

					else{
							echo "erro";
					}
								?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaladd">
					Adicionar Administrador
				</button>
			</div>
		</div>
	</div>

		<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<h5 class="modal-title" id="exampleModalLongTitle">Adicionar Administrador</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
		      		<div class="modal-body">
		      			<?php
		      				include("reg.php");
		      			?>
		      		</div>
		      		<div class="modal-footer">
		        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		      		</div>
		    	</div>
		 	</div>
		</div>


</body>
</html>

<style type="text/css">
	#sair{
		color: red;
	}
</style>