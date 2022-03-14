<?php

namespace repositories;

use models\User;
use PDO;

class UserRepository
{
  static function getOne(PDO $db, string $username): User|bool
  {
    $query = $db->prepare("SELECT * FROM users WHERE username = ?");
    $query->bindValue(1, $username);
    $query->execute();
    $query->setFetchMode(PDO::FETCH_CLASS, '\models\User');
    return $query->fetch();
  }

  static function insert(pDO $db, User $user): void
  {
    $query = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $query->bindValue(1, $user->username);
    $query->bindValue(2, password_hash($user->password, PASSWORD_BCRYPT));
    $query->execute();
  }
}