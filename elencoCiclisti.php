<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco ciclisti in ordine alfabetico</title>
    <link rel="stylesheet" href="style.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat:400,900|Open+Sans&display=swap" rel="stylesheet">
</head>
<body class="body">
  <?php
	session_start();
  	$connessione = mysql_connect("localhost", "websinisi", "");
    mysql_select_db("my_websinisi");
    
    $query = "select * from ciclista order by cognome, nome;";
    $result = mysql_query($query);
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

    <h1 class="title">ELENCO CICLISTI</h1>
    <div class="block-shadow">
    	<div class="container">
          <?php
              while($row = mysql_fetch_array($result))
              {
              	$idCiclista = $row['id'];
              	//query provincia
                $query = "select sigla from provincia where id=". $row['idProvincia']. ";";
                $resProv = mysql_query($query);
                $prov = mysql_fetch_array($resProv);
                
                //query squadra
                $query = "select nome from squadra where id=". $row['idSquadra']. ";";
                $resSqd = mysql_query($query);
                $team = mysql_fetch_array($resSqd);
                
			 	echo "<div class='row rider-box'>";
                echo "<div class='col-lg-6'>";
                echo "<img src='" . $row['immagine']. "'>";
                echo "</div>";
                echo "<div class='col-lg-6'>";
                echo "<p>Nome: ". $row['nome']. "</p>";
                echo "<p>Cognome: ". $row['cognome']. "</p>";
                echo "<p>Provincia: ". $prov['sigla']. "</p>";
                echo "<p>Squadra: ". $team['nome']. "</p>";
                if($_SESSION['stato'] == "admin")
                {
                	echo "<a href='registraTempo.php?id=$idCiclista' id='$idCiclista' class='stretched-link'>Registra tempo</a>";
                }
                echo "</div>";
                echo "</div>";
              }
          ?>
    	</div>
        <div class="space-top">
              <button class="btn btn-secondary" id="indietro">Indietro</button>
        </div>
    </div>

    <!--Footer-->
    <footer class="footer">® Giorgio Sinisi 5AI, Tutti i diritti riservati</footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  
    <script>
      $("#indietro").click(function() {
        window.location.href = "index.php";
      });
    </script>
</body>
</html>