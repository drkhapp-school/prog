<?php

class Game
{
  public int $id;
  public string $name;
  public string $categ_name;
  public int $categ_id;

  static function getOne(PDO $db, string $id): Game|bool
  {
    $query = $db->query("SELECT jeux.nom AS name, categories.nom AS categ_name, jeux.id AS id, categorie_id AS categ_id FROM jeux INNER JOIN categories ON categorie_id = categories.id WHERE id = ?");
    $query->bindValue(1, $id);
    $query->execute();
    $query->setFetchMode(pdo::FETCH_CLASS, 'Game');
    return $query->fetch();
  }

  static function getAll(PDO $db): array|bool
  {

    $query = $db->query("SELECT jeux.nom AS name, categories.nom AS categ_name, jeux.id AS id, categorie_id AS categ_id FROM jeux INNER JOIN categories ON categorie_id = categories.id");
    $query->execute();
    $query->setFetchMode(pdo::FETCH_CLASS, 'Game');
    return $query->fetchAll();
  }

  static function insert(PDO $db, string $name, string $category)
  {
    $query = $db->prepare("INSERT INTO jeux (nom, categorie_id) VALUES (?, ?);");
    $query->bindValue(1, $name);
    $query->bindValue(2, $category);
    $query->execute();
  }
}