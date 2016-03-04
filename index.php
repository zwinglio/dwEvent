<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>dwEvent v0.0.1</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php include 'includes/dbconfig.php'; ?>
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <form>
        <fieldset>
          <h2>Entre no sistema</h2>
          <label>CPF:</label><br>
          <input type="text" class="form-control" placeholder="00011122233344" name="cpf"><br>
          <label>Senha:</label><br>
          <input type="password" class="form-control" name="senha"><br>
          <input type="submit" class="btn btn-default" value="Entrar">
        </fieldset>
      </form>
    </div>
    <div class="col-md-8"><h2>Informações importantes</h2>
      <p>Nome do evento</p>
    <p>Algumas datas e preços</p>
  <p>Link de cadastro >></p></div>
  </div>
  </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>

  </body>
</html>
