<?php
  session_unset();
  session_destroy();
  echo '<div class="alert alert-danger" role="alert">
            U bent succesvol uitgelogd, u wordt doorgestuurd naar de algemene homepagina</div>';
  //header("Refresh: 4; url=./index.php?content=home");
  echo '<meta http-equiv="Refresh" content="1; url=./index.php?content=home">';
?>
