<?php

	session_start();

	if(isset($_SESSION['nm'])){
		session_destroy();
		echo "<script>location.href='index.php';</script>";
	}

?>