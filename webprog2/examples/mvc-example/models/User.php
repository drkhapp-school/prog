<?php

class User
{
  public int $id;
  public string $username;
  public string $password;

  static function getOne(PDO $db, string $username): User|bool
  {
    $query = $db->prepare("SELECT * FROM users WHERE username = ?");
    $query->bindValue(1, $username);
    $query->execute();
    $query->setFetchMode(PDO::FETCH_CLASS, 'User');
    return $query->fetch();
  }

  static function insert(pDO $db, string $username, string $password)
  {
    $query = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $query->bindValue(1, $username);
    $query->bindValue(2, password_hash($password, PASSWORD_BCRYPT));
    $query->execute();
  }
}