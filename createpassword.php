<div class="row">
  <div class="col-6">
    <h1>Kies een password</h1>

    <form action="./index.php?content=createpassword-script" method="post">
      <div class="form-group">
        <label for="InputPassword">Wachtwoord</label>
        <input type="password" class="form-control" id="InputPassword" placeholder="Vul uw wachtwoord in..."
          name="password">
      </div>
      <div class="form-group">
        <label for="InputPassword2">Herhaal wachtwoord</label>
        <input type="password" class="form-control" id="InputPassword2" placeholder="Herhaal uw gekozen wachtwoord..."
          name="verify_password">
      </div>
      <input type="hidden" value="<?php echo $_GET["id"]; ?>" name="id">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Sla op!</button>
    </form>
  </div>
  <div class="col-6">
    <img src="./img/pasen.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image" width="70%">
  </div>
</div>
