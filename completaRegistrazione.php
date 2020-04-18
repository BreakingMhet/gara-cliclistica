<?php
			if($_FILES['img']['size']>1048576)
            {
            	$msg="ATTENZIONE! Il file non deve superare 1MB!!";
                header("Location: registraCiclista.php?Msg=$msg");
         		die();
            }
            list($width, $height, $type, $attr) = getimagesize($_FILES['img']['tmp_name']);
            
            if (($width != 150) and ($height != 150))
            {
            	$msg = "Dimensioni non corrette!!";
           		header("Location: registraCiclista.php?Msg=$msg");
     		  	die();
            }
            
            if(($type!=1)&&($type!=2)&&($type!=3))            
            {
            	$msg = "Formato non corretto!!";
				header("Location: registraCiclista.php.php?Msg=$msg");
     		  	die();
            }
            $t=$_FILES['img']['name'];
            $checkFile="images/.$t";
            if(file_exists($checkFile))
            {
              $msg = "File già esistente sul server. Rinominarlo e riprovare.";
              header("Location: registraCiclista.php?Msg=$msg");
     		  die();
            }
            if (!move_uploaded_file($_FILES['img']['tmp_name'],'images/'.$_FILES['img']['name']))
			{
              $msg = "Errore nel caricamento dell'immagine!!";
              header("Location: registraCiclista.php?Msg=$msg");
     		  die();
            }
	//Accesso al db
    $connessione = mysql_connect("localhost", "websinisi", "");
    mysql_select_db("my_websinisi");
    
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $immagine = 'images/'.$_FILES['img']['name'];
    $provincia = $_POST['provincia'];
    $squadra = $_POST['squadra'];
    
    $query = "insert into ciclista (nome, cognome, immagine, idSquadra, idProvincia) values ('$nome', '$cognome', '$immagine', $squadra, $provincia);";
    $result = mysql_query($query);
    
    header("location: registraCiclista.php?Msg=Registrazione effettuata con successo!");
    
?>