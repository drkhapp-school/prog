<?php

class UserController
{
  function login()
  {

    require __DIR__ . '/../models/User.php';

    // for whatever reason mac is retarded, so
    // docker inspect -f '{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' webprog2-db-1
    // keep this in mind! :)
    if (isset($_POST["username"]) && isset($_POST["password"])) {
      $db = new PDO("mysql:dbname=test;host=172.19.0.2;port=3306", "test", "test");
      $username = $_POST["username"];
      $password = $_POST["password"];
      $user = User::getOne($db, $username);

      if ($user) {
        if (password_verify($password, $user->password)) {
          echo 'Login réussi';
        } else {
          echo 'Username existe';
        }
      } else {
        User::insert($db, $username, $password);
      }
    }
  }
}