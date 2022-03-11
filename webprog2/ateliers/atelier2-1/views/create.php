<?php
require __DIR__ . "/../controllers/GameController.php";
require __DIR__ . "/../controllers/CategoryController.php";
$gameController = new GameController();
$categoryController = new CategoryController();
$list = $categoryController->fetchCategory();
$gameController->insert();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Atelier 2.1</title>
  <link href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../../node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body>
<div class="m-3">
  <a href="../../.." class="btn btn-primary">go back to main lol</a>
</div>
<hr />
<div class="container">
  <h1 class="display-3 mb-3">Atelier 2.1</h1>
  <div class="row">
    <div class="col-4">
      <p>Reprenez votre atelier 1.3 (CRUD de jeux). Implémentez les mêmes fonctionnalités dans une architecture MVC.</p>
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
            if (!is_bool($list))
              foreach ($list as $arr)
                echo "<option value='" . $arr->id . "'>" . $arr->name . "</option>";
            ?>
          </select>
        </div>
        <button class="btn btn-primary" type="submit">Ajouter</button>
        <a href="list.php" class="btn btn-secondary ms-3">Annuler</a>
      </form>
    </div>
  </div>
</body>
</html>
