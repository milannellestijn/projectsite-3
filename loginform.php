<div class="row">
  <h1>Inloggen</h1>
</div>
<div class="row">
  <div class="col-6">
    <form action="./index.php?content=login-script" method="post">
      <div class="form-group">
        <label for="InputEmail">e-mailadres</label>
        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp"
          value="<?php if (isset($_GET['email'])) { echo $_GET['email'];} ?>" placeholder="Uw emailadres" name="email" >
      </div>
      <div class="form-group">
        <label for="InputPassword">Wachtwoord</label>
        <input type="password" class="form-control" id="InputPassword" placeholder="Uw wachtwoord" name="password" >
      </div>
      <button type="submit" class="btn btn-primary btn-lg btn-block">Inloggen</button>
    </form>
  </div>
  <div class="col-6">
    <img src="./img/Logo.png" class="img-fluid rounded mx-auto d-block" alt="Responsive image" width="70%">
  </div>
</div>