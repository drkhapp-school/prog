<?php

require __DIR__ . "/../models/Category.php";

class CategoryController
{

  private PDO $db;

  public function __construct()
  {
    $this->db = new PDO("mysql:dbname=test;host=172.19.0.2;port=3306", "test", "test");
  }

  public function fetchCategory(): bool|array
  {
    return Category::getAll($this->db);
  }
}