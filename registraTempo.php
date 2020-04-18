<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione tempo</title>
    <link rel="stylesheet" href="style.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat:400,900|Open+Sans&display=swap" rel="stylesheet">
	<style>
    	.block-shadow {
        	width: 700px;
        }
    </style>
</head>

<body class="body">
<?php
	session_start();
	$connessione = mysql_connect("localhost", "websinisi", "");
    mysql_select_db("my_websinisi");
	$idCiclista = $_GET['id'];
    
    $query = "select * from ciclista where id = $idCiclista;";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    
    $nome = $row['nome'];
    $cognome = $row['cognome'];
    
    $provincia = $row['idProvincia'];
    $squadra = $row['idSquadra'];
    
    //query provincia
    $query = "select sigla from provincia where id=". $provincia. ";";
    $resProv = mysql_query($query);
    $prov = mysql_fetch_array($resProv);
    $prov = $prov['sigla'];
                
    //query squadra
    $query = "select nome from squadra where id=". $squadra. ";";
    $resSqd = mysql_query($query);
    $team = mysql_fetch_array($resSqd);
    $team = $team['nome'];
?>
  <nav class="navbar navbar-expand-lg navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="login.php">Area Riservata</a>
      </li>
      </ul>
    </div>
  </nav>

    <h1 class="title">REGISTRAZIONE TEMPO CICLISTA</h1>  
    <div class="block-shadow">
        <form action="completaRegistrazioneTempo.php" method="post" enctype="multipart/form-data" onsubmit="return controlla(this)" name="form">
            <div class="form-group">
              <label for="nome">Nome</label>
              <?php
              	echo "<input type='text' class='form-control' id='nome' name='nome' readonly value='$nome'>";
              ?>     
            </div>
            <div class="form-group">
              <label for="cognome">Cognome</label>
              <?php
              	echo "<input type='text' class='form-control' id='cognome' name='cognome' readonly value='$cognome'>";
              ?>   
            </div>
            <div class="container text-center">
              <div class="row space-top">
              	<div class="col-lg-6">
                  <label for="provincia">Provincia</label>
                  <?php
              		echo "<input type='text' class='form-control' id='provincia' name='provincia' readonly value='$prov'>";
     			  ?>
                </div>
                <div class="col-lg-6">
                  <label for="provincia">Squadra</label>
                  <?php
              		echo "<input type='text' class='form-control' id='squadra' name='squadra' readonly value='$team'>";
     			  ?>
                </div>
              </div>

              <div class="row space-top">
                <div class="col-lg-6">
                  <label for="squadra">Seleziona Tappa</label>
                </div>
                <div class="col-lg-6">
                  <select name="tappa" id="tappa" class="btn btn-info select-btn">
                  <?php
                    $query = "select * from tappa;";
                    $result = mysql_query($query);
                    while($row =mysql_fetch_array($result))
                      {
                          echo "<option value='". $row['id']. "'>". $row['nome']. "</option>";
                      }
                  ?>                 
                </select>
                </div>
              </div>
              <div class="row space-top">
              	<div class="col-lg-6">
                	<label for="tempo">Inserisci tempo</label>
                </div>
                	<div class="col">
                    	<input type="number" max="60" min="0" placeholder="Ore" name="ore">
                    </div>
                    <div class="col">
                    	<input type="number" max="60" min="0" placeholder="Minuti" name="minuti">
                    </div>
                    <div class="col">
                    	<input type="number" max="60" min="0" placeholder="Secondi" name="secondi">
                    </div>
              </div>
            </div>

            <div class="space-top">
              <input type="submit" class="btn btn-info" value="Invia" name="invia">
            </div>
          </form>

          <div class="space-top">
              <button class="btn btn-secondary" id="indietro" name="indietro">Indietro</button>
          </div>
    </div>

    <!--Footer-->
    <footer class="footer">® Giorgio Sinisi 5AI, Tutti i diritti riservati</footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  
    <script>
    	function controlla(form){
        	if(form.ore.value == "" || form.minuti.value == "" || form.secondi.value == "")
            {
            	alert("Attenzione! Inserisci 0, non lasciare campi vuoti");
            	return false;
            }
            
        }
      $("#indietro").click(function() {
        window.location.replace("index.php");
      });
    </script>
  </body>
</html>