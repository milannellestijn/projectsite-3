<?php
  // Maak contact met de mysql-server en database
  include("./connect_db.php");

  // Maak de sanitize() functie beschikbaar op deze pagina
  include("./functions.php");

  // Maak de $_POST array waarden schoon
  $email = sanitize($_POST["email"]);
  $password = sanitize($_POST["password"]);

  // check
  if ( !empty($email) && !empty($password)) {
    // Maak een query die het emailadres opzoekt in de database
    $sql = "SELECT * FROM `login`
    WHERE `email` = '$email'";

    // Vuur de query af op de database en krijg wel of geen result terug
    $result = mysqli_query($conn, $sql);

    // Tel het aantal gevonden records met mysqli_num_rows($result)
    if ( mysqli_num_rows($result) ==  1 ) {
      // Maak van het result een werkbaar associatief array
      $record = mysqli_fetch_assoc($result);

      // Haal het gehashte password uit de database (60 tekens lang)
      $db_password = $record["password"];

      // Kijk met password_verify of het ingevoerde wachtwoord matched met het gehashte wachtwoord uit de database
      if ( password_verify($password, $db_password) ) {
        // Stuur door naar homepage gebruikersrol

        $_SESSION["id"] = $record["id"];
        $_SESSION["email"] = $record["email"];
        $_SESSION["userrole"] = $record["userrole"];


        switch ($record["userrole"]) {
        case 'administrator':
          //header("Refresh:0");
          echo '<meta http-equiv="Refresh" content="0; url=./index.php?content=administrator_home">';
          break;
        case 'customer':
          //header("Location: ./index.php?content=customer_home");
          echo '<meta http-equiv="Refresh" content="0; url=./index.php?content=customer_home">';
          break;
        case 'moderator':
          //header("Location: ./index.php?content=moderator_home");
          echo '<meta http-equiv="Refresh" content="0; url=./index.php?content=moderator_home">';
          break;
        case 'root':
          //header("Location: ./index.php?content=root_home");
          echo '<meta http-equiv="Refresh" content="0; url=./index.php?content=root_home">';
          break;
        default:
          //header("Location: ./index.php?content=home");
          echo '<meta http-equiv="Refresh" content="0; url=./index.php?content=home">';
          break;
        }
      } else {
        // Als het wachtwoord niet goed is, stuur door naar loginform
        echo '<div class="alert alert-danger" role="alert">
            De door u opgegeven e-mailadres en wachtwoord combinatie is niet bekend. Probeer het opnieuw
          </div>';
        //header("Refresh: 4; url=./index.php?content=loginform");
        echo '<meta http-equiv="Refresh" content="0; url=./index.php?content=loginform">';
      }
    } else {
    // Als het emailadres niet goed is stuur door naar loginform
    echo '<div class="alert alert-danger" role="alert">
        Het door u opgegeven e-mailadres is niet bekend. Probeer het opnieuw
      </div>';
    //header("Refresh: 4; url=./index.php?content=loginform");
    echo '<meta http-equiv="Refresh" content="0; url=./index.php?content=loginform">';
    }


  } else {
    // Als het emailadres niet goed is stuur door naar loginform
    echo '<div class="alert alert-danger" role="alert">
            U heeft het e-mail of wachtwoord veld niet ingevuld, probeer het opnieuw
          </div>';
    //header("Refresh: 3; url=./index.php?content=loginform&email=$email");
    echo '<meta http-equiv="Refresh" content="0; url=./index.php?content=loginform">';
  }

?>
