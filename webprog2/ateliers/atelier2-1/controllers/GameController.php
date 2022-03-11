<?php

require __DIR__ . "/../models/Game.php";

class GameController
{
  private PDO $db;

  public function __construct()
  {
    $this->db = new PDO("mysql:dbname=test;host=172.19.0.2;port=3306", "test", "test");
  }

  function fetchList(): bool|array
  {
    return Game::getAll($this->db);
  }

  function insert()
  {
    if (isset($_POST["name"]) && isset($_POST["category"])) {
      Game::insert($this->db, $_POST["name"], $_POST["category"]);
    }
  }

}