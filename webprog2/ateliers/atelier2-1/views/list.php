<?php
require __DIR__ . "/../controllers/GameController.php";
$gameController = new GameController();
$list = $gameController->fetchList();
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
      <div class="d-flex justify-content-between">
        <h3>Liste de jeu</h3>
        <a href="create.php" class="btn btn-outline-success">Ajouter un nouveau jeu</a>
      </div>
      <div class="list-group mt-2 mb-4">
        <?php
        if (!is_bool($list))
          foreach ($list as $game) {
            // god, I wish this could be better formatted 🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄🙄
            echo "<div class='list-group-item list-group-item-action d-flex flex-row justify-content-between align-items-center'>";
            echo "<div>" . $game->name . "<span class='text-muted'> - " . $game->categ_name . "</span></div>";
            echo "<div><a href='edit.php?id=" . $game->id . "' class='btn btn-outline-primary me-2'><i class='bi bi-pencil'></i></a>";
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
