<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Riservata</title>
    <link rel="stylesheet" href="style.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat:400,900|Open+Sans&display=swap" rel="stylesheet">
</head>
<body class="body">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
        </ul>
        </div>
    </nav>
	<?php
    	session_start();
    	if($_SESSION['stato'] == "admin")
        {
        	echo '<h1 class="title">Impostazioni amministratore</h1>';
            echo '<div class="block-shadow">';
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-lg-6 space-top">';
            echo '<div class="block-menu" id="registraCiclista">';
            echo '<p class="p-menu">Registra nuovo ciclista</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="col-lg-6 space-top">';
            echo '<div class="block-menu" id="elencoCiclisti">';
            echo '<p class="p-menu">Inserimento tempo ciclista</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        else
        {
        	echo '<h2 class="title">Non sei autorizzato ad accedere al contenuto!</h2>';
            echo '<a href="login.php">Vai al login</a>';
        }
    ?>

    <!--Footer-->
    <footer class="footer">® Giorgio Sinisi 5AI, Tutti i diritti riservati</footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>