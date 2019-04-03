<?php
  // Maak een verbinding met de database
  include("./connect_db.php");

  // Maak de functie sanitize beschikbaar op de pagina functions.php
  include("./functions.php");

  $password = sanitize($_POST["password"]);
  $verify_password = sanitize($_POST["verify_password"]);
  $id = sanitize($_POST["id"]);

  if ( !strcmp($password, $verify_password)) {
    // Als de wachtwoorden gelijk zijn...
    $blowfish_password = password_hash($password, PASSWORD_BCRYPT);

    if ( !empty($password) && !empty($verify_password)) {
      $sql = "UPDATE  `login`
              SET     `password` = '$blowfish_password'
              WHERE   `id`       = $id";

      $result = mysqli_query($conn, $sql);

      if ($result) {
        // Selecteer het emailadres en geef dit mee als $_GET variabele aan de url
        $sql = "SELECT * FROM `login` WHERE `id` = $id";

        $result = mysqli_query($conn, $sql);

        $record = mysqli_fetch_assoc($result);

        $email = $record["email"];

        echo '<div class="alert alert-success" role="alert">Uw wachtwoord is veranderd. U wordt doorgestuurd naar de inlogpagina waar u kunt inloggen.</div>';
        //header("Refresh: 4; url=./index.php?content=loginform");
        echo '<meta http-equiv="Refresh" content="0; url=./index.php?content=loginform">';
      } else {
        echo '<div class="alert alert-danger" role="alert">Er is een fout opgetreden. Probeer het nogmaals.</div>';
        //header("Refresh: 4; url=./index.php?content=home");
        echo '<meta http-equiv="Refresh" content="0; url=./index.php?content=home">';
      }
    } else {
      echo '<div class="alert alert-danger" role="alert">U heeft een van beide wachtwoordvelden niet ingevuld. Probeer het nogmaals.</div>';
      //header("Refresh: 4; url=./index.php?content=createpassword");
      echo '<meta http-equiv="Refresh" content="0; url=./index.php?content=createpassword">';
    }
  } else {
    //  Als de wachtwoorden niet gelijk zijn...
    echo '<div class="alert alert-danger" role="alert">De door u ingevulde wachtwoorden zijn niet gelijk, Probeer het nogmaals</div>';
    //header("Refresh: 4; url=./index.php?content=createpassword");
    echo '<meta http-equiv="Refresh" content="0; url=./index.php?content=createpassword">';
  }




?>
