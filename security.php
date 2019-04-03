<?php
  if ( !isset($_SESSION["id"])) {
    // Als het emailadres niet goed is stuur door naar loginform
    echo '<div class="alert alert-danger" role="alert">
            U heeft geen rechten voor deze pagina, u moet eerst ingelogd zijn
          </div>';
    //header("Refresh: 3; url=./index.php?content=loginform");
    echo '<meta http-equiv="Refresh" content="0; url=./index.php?content=loginform">';
    exit();
  } elseif ( !in_array($_SESSION["userrole"], $userrole)) {
    // Als het emailadres niet goed is stuur door naar loginform
    echo '<div class="alert alert-danger" role="alert">
            U heeft niet de juiste gebruikersrol voor deze pagina.
          </div>';
  //header("Refresh: 3; url=./index.php?content=logout");
  echo '<meta http-equiv="Refresh" content="0; url=./index.php?content=logout">';
    exit();
  }
?>
