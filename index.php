<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giro d'Italia</title>
    <link rel="stylesheet" href="style.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat:400,900|Open+Sans&display=swap" rel="stylesheet">
</head>
<body class="body">
<?php
	session_start();
?>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
            <?php
            	if($_SESSION['stato'] == "admin")
                	echo "<a class='nav-link' href='areaRis.php'>Area Riservata</a>";
                else
                	echo "<a class='nav-link' href='login.php'>Area Riservata</a>";
            ?>
            </li>
        </ul>
        </div>
    </nav>

    <h1 class="title">Giro d'Italia</h1>

    <div class="block-shadow">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 space-top">
                    <div class="block-menu" id="elencoCiclisti">
                        <p class="p-menu">Elenco ciclisti</p>
                    </div>
                </div>
                <div class="col-lg-6 space-top">
                    <div class="block-menu" id="elencoProvince">
                        <p class="p-menu">Elenco province di appartenenza dei ciclisti</p>
                    </div>
                </div>
            </div>
            <div class="row space-top">
                <div class="col-lg-6 space-top">
                    <div class="block-menu" id="elencoCiclistiSquadra">
                        <p class="p-menu">Elenco ciclisti di una squadra</p>
                    </div>
                </div>
                <div class="col-lg-6 space-top">
                    <div class="block-menu">
                        <p class="p-menu" id="tappe">Tappe oltre 200km</p>
                    </div>
                </div>
            </div>
            <div class="row space-top">
                <div class="col-lg-6 space-top">
                    <div class="block-menu">
                        <p class="p-menu">
                            Elenco in ordine di arrivo per tappa in input
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 space-top">
                    <div class="block-menu">
                        <p class="p-menu">Velocità media di ogni ciclista in una data tappa</p>
                    </div>
                </div>
            </div>
            <div class="row space-top">
                <div class="col-lg-6 space-top">
                    <div class="block-menu">
                        <p class="p-menu">Velocità media del gruppo per ogni tappa</p>
                    </div>
                </div>
                <div class="col-lg-6 space-top">
                    <div class="block-menu" id="classifica">
                        <p class="p-menu">Classifica</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <footer class="footer">® Giorgio Sinisi 5AI, Tutti i diritti riservati</footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>