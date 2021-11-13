<?php
    include("conecta.php");


    $cat = "insert into leads (cd_lead, nm_lead, ds_leademail, nr_telefone, nr_celular) values(null,'".$_POST['nome']."', '".$_POST['email']."', '".$_POST['celular']."', '".$_POST['telefone']."')"; 

    $query = "SELECT * FROM leads";

         if ($query = $mysqli->query($cat)){
            header("location: index.php");
         }                       
         else{
            printf("Erro obtido: %s\n", $mysqli->error);
         }

?>