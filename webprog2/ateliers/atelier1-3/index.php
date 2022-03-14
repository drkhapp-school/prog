<?php
$db = new PDO("mysql:dbname=test;host=172.19.0.2;port=3306", "test", "test");
$query = $db->query("SELECT jeux.nom AS game, categories.nom AS categ, jeux.id AS id FROM jeux INNER JOIN categories ON categorie_id = categories.id");
$result = $query->fetchAll(pdo::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Atelier 1.3</title>
  <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body>
<div class="m-3">
  <a href=".." class="btn btn-primary">go back to main lol</a>
</div>
<hr />
<div class="container">
  <h1 class="display-3 mb-3">Atelier 1.3</h1>
  <div class="row">
    <div class="col-4">
      <p>Dans votre base de données, créez les tables suivantes:</p>
      <ul>
        <li>categories: id, nom</li>
        <li>jeux: id, nom, categorie_id</li>
      </ul>
      <p>Ajoutez manuellement quelques catégories dans votre base de données.</p>
      <p>En PHP, créez les quatres action CRUD pour les jeux dans 3 ou 4 fichiers différents, particularités:</p>
      <ul>
        <li>
          Create: On doit avoir un 'select' pour choisir une catégorie existante
        </li>
        <li>
          Read: On doit voir le nom de la catégorie dans la liste, pas l'ID
        </li>
        <li>
          Update: Comme Create, la bonne catégorie doit être sélectionné à l'ouverture
        </li>
        <li>
          Delete: Cette action peut se trouver dans le même fichier qu'une autre action
        </li>
      </ul>
    </div>
    <div class="col-8">
      <div class="d-flex justify-content-between">
        <h3>Liste de jeu</h3>
        <a href="create.php" class="btn btn-outline-success">Ajouter un nouveau jeu</a>
      </div>
      <div class="list-group mt-2 mb-4">
        <?php
        foreach ($result as $arr) {
          // god I wish this could be better formatted 🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄
          echo "<div class='list-group-item list-group-item-action d-flex flex-row justify-content-between align-items-center'>";
          echo "<div>" . $arr["game"] . "<span class='text-muted'> - " . $arr["categ"] . "</span></div>";
          echo "<div><a href='edit.php?id=" . $arr['id'] . "' class='btn btn-outline-primary'><i class='bi bi-pencil'></i></a>";
          echo "<a class='btn btn-outline-danger'><i class='bi bi-trash'></i></a>";
          echo "</div></div>";
        }
        ?>
      </div>
    </div>
  </div>
</div>
</body>
</html>
