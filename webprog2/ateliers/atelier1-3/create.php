<?php
$db = new PDO("mysql:dbname=test;host=172.19.0.2;port=3306", "test", "test");
if (isset($_POST["name"]) && isset($_POST["category"])) {
  $name = $_POST["name"];
  $category = $_POST["category"];

  $query = $db->prepare("INSERT INTO jeux (nom, categorie_id) VALUES (?, ?);");
  $query->bindValue(1, $name);
  $query->bindValue(2, $category);
  $query->execute();
}
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
      <h3>Ajouter un jeu</h3>
      <form method="post" action="create.php">
        <div class="mb-3">
          <label class="form-label" for="name">Nom</label>
          <input class="form-control" id="name" name="name" type="text">
        </div>
        <div class="mb-3">
          <label class="form-label" for="category">Catégorie</label>
          <select id="category" class="form-select" name="category">
            <?php
            $query = $db->query("SELECT * FROM categories");
            $result = $query->fetchAll(pdo::FETCH_ASSOC);

            foreach ($result as $arr) {
              echo "<option value='" . $arr["id"] . "'>" . $arr["nom"] . "</option>";
            }
            ?>
          </select>
        </div>
        <button class="btn btn-primary" type="submit">Ajouter</button>
        <a href="index.php" class="btn btn-secondary ms-3">Annuler</a>
      </form>
    </div>
  </div>
</div>
</body>
</html>
