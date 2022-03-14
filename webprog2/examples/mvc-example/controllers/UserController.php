<?php

namespace controllers;

use models\User;
use PDO;
use repositories\UserRepository;

class UserController
{
  function login()
  {

    // for whatever reason mac is retarded, so
    // docker inspect -f '{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' webprog2-db-1
    // keep this in mind! :)
    if (isset($_POST["username"]) && isset($_POST["password"])) {
      $db = new PDO("mysql:dbname=test;host=172.19.0.2;port=3306", "test", "test");
      $username = $_POST["username"];
      $password = $_POST["password"];

      $userRepo = new UserRepository();
      $user = $userRepo->getOne($db, $username);

      if ($user) {
        if (password_verify($password, $user->password)) {
          echo 'Login réussi';
        } else {
          echo 'Username existe';
        }
      } else {
        $user = new User();
        $user->username = $username;
        $user->password = $password;
        $userRepo->insert($db, $user);
      }
    }

    require __DIR__ . "/../views/User/login.php";
  }
}