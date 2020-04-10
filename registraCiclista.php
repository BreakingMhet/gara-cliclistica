<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione ciclista</title>
    <link rel="stylesheet" href="style.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat:400,900|Open+Sans&display=swap" rel="stylesheet">

</head>

<body class="body">
<?php
/*
		$connessione = mysql_connect("localhost", "websinisi", "");
    	mysql_selectdb("my_websinisi");  */			 
?>

    <h1 class="title">REGISTRAZIONE CICLISTA</h1>  
    <div class="block-shadow">
        <form>
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group">
              <label for="cognome">Cognome</label>
              <input type="text" class="form-control" id="cognome" name="cognome">
            </div>
            <div class="container text-center">
              <div class="row space-top">
                <div class="col-lg-6">
                  <label for="provincia">Seleziona Provincia</label>
                </div>
                <div class="col-lg-6">
                  <select name="provincia" id="provincia" class="btn btn-info select-btn">
                
                  <?php
                    /*
                    $query = "select * from provincia;";
                    $result = mysql_query($query);
                      while($row =mysql_fetch_array($result))
                      {
                        echo "<option value='". $row['id']. "'>". $row['sigla']. "</option>";
                      } */
                  ?>                   
                  </select>
                </div> 
              </div>

              <div class="row space-top">
                <div class="col-lg-6">
                  <label for="squadra">Seleziona Squadra</label>
                </div>
                <div class="col-lg-6">
                  <select name="squadra" id="squadra" class="btn btn-info select-btn">
                  <?php
                    /*
                    $query = "select * from squadra;";
                    $result = mysql_query($query);
                    while($row =mysql_fetch_array($result))
                      {
                          echo "<option value='". $row['id']. "'>". $row['nome']. "</option>";
                      } */
                  ?>                 
                </select>
                </div>
              </div>            
            </div>

            <div class="space-top">
              <button type="submit" class="btn btn-info">Invia</button>
              <button class="btn btn-secondary" id="indietro">Indietro</button>
            </div>
          </form>
    </div>

    <!--Footer-->
    <footer class="footer">® Giorgio Sinisi 5AI, Tutti i diritti riservati</footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  
    <script>
      $("#indietro").click(function() {
        window.open("index.html");
        window.close();
      });
    </script>
  </body>
</html>