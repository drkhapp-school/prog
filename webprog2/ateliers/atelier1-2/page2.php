<?php
if (empty($_POST["fname"]) || empty($_POST["lname"])) {
  header("Location: index.php");
  die();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Atelier 1.2 - Page 2</title>
  <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="m-3">
  <a href="../.." class="btn btn-primary">go back to main lol</a>
</div>
<hr />
<div class="container">
  <h1 class="display-3 mb-3">Atelier 1.2</h1>
  <div class="mb-4">
    <h2 class="fw-light mb-3">Numéro 3</h2>
    <div class="row">
      <div class="col-4">
        <p>
          Ce numéro fonctionne avec 2 pages:
        </p>
        <ol>
          <li>
            Formulaire POST qui demande un nom et un prénom, envoie la requête à la page 2.
          </li>
          <li>
            Affiche la concaténation du nom et prénom reçu de la page 1, ajoutez aussi un lien pour
            retourner à la page 1. Si on ne reçoit rien, redirigez vers la page 1.
          </li>
        </ol>
      </div>
      <div class="col-8 alert alert-success">
        <?= "<p>Votre nom est " . $_POST["fname"] . " " . $_POST["lname"] . "!</p>" ?>
        <a href="index.php" class="btn btn-outline-secondary">Retourner en arrière</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>
