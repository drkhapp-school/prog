<?php
require __DIR__ . "/../../controllers/UserController.php";
$controller = new UserController();
$controller->login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        name="viewport" />
  <meta content="ie=edge" http-equiv="X-UA-Compatible" />
  <title>Form</title>
  <link href="../../../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="m-3">
  <a class="btn btn-primary" href="../../../..">go back lol</a>
</div>
<hr />
<div class="container">
  <h1 class="display-5">Login</h1>
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
