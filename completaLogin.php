<?php
	$nomeUtente = $_POST['nomeUtente'];
    $password = $_POST['password'];
    
    if($nomeUtente == "admin" and $password == "bd399")
    {
    	session_start();
    	$_SESSION['stato'] = "admin";
        header("location: areaRis.php");
    }
    else
    {
    	//messaggio
    }
?>