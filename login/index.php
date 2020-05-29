<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
</head>
<body>
  <h1 class="title">Login</h1>
  <form method="post" action="script.php">
    <div class="form-group">
      <label for="exampleInputEmail1">Endereço de Email</label>
       <input required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted">Insira dados válidos para este campo!</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Senha</label>
      <input required type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <input type="submit" name="submit" class="btn btn-primary"></input>
  </form>
</body>
</html>