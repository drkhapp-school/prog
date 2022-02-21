<?php
if (isset($_POST["username"])) {
  // for whatever reason mac is retarded, so
  // docker inspect -f '{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' webprog2-db-1
  // keep this in mind! :)
  $db = new PDO("mysql:dbname=test;host=172.18.0.2;port=3306", "test", "test");
  $user = $_POST["username"];
  $pass = $_POST["password"];

  $search = $db->prepare("SELECT * FROM users WHERE username = ?");
  $search->bindValue(1, $user);
  $search->execute();
  $result = $search->fetch(PDO::FETCH_OBJ);

  if (!$result) {
    $query = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $query->execute([$user, password_hash($pass, PASSWORD_BCRYPT)]);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        name="viewport" />
  <meta content="ie=edge" http-equiv="X-UA-Compatible" />
  <title>Form</title>
  <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="m-3">
  <a class="btn btn-primary" href="..">go back lol</a>
</div>
<hr />
<div class="container">
  <h1 class="display-5">Basic Form</h1>
  <form method="post">
    <div class="mb-3">
      <label class="form-label" for="username">Username</label>
      <input class="form-control" id="username" name="username" type="text">
    </div>
    <div class="mb-3">
      <label class="form-label" for="password">Password</label>
      <input class="form-control" id="password" name="password" type="password">
    </div>
    <button class="btn btn-primary" type="submit">Create Account</button>
  </form>
</div>
</body>
</html>
