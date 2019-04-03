<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php
        if ( isset($_SESSION["id"])) {
          switch($_SESSION["userrole"]) {
            case 'administrator':
              echo '<li class="nav-item active">
                      <a class="nav-link" href="./index.php?content=gebruikersrollen">gebruikersrollen<span class="sr-only">(current)</span></a>
                    </li>';
            break;
            default:
            break;
          }

          echo '<li class="nav-item active">
                  <a class="nav-link" href="./index.php?content=home">Home <span class="sr-only">(current)</span></a>
                </li>';
          echo '<li class="nav-item">
                  <a class="nav-link" href="./index.php?content=logout">Uitloggen</a>
                </li>';
        } else {
          echo '<li class="nav-item">
                  <a class="nav-link" href="./index.php?content=registerform">Registreer</a>
                </li>';
          echo '<li class="nav-item">
                  <a class="nav-link" href="./index.php?content=loginform">Inloggen</a>
                </li>';
        }
      ?>
    </ul>
  </div>
</nav>