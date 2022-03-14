<?php

class Category
{
  public int $id;
  public string $name;

  static function getAll(PDO $db): bool|array
  {
    $query = $db->query("SELECT id AS id, nom AS name FROM categories");
    $query->setFetchMode(pdo::FETCH_CLASS, "Category");
    return $query->fetchAll();
  }
}