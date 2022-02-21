<?php
function PGCD(int $j, int $k): int
{
    $n = min($j, $k);
    while ($j % $n != 0 || $k % $n != 0) {
        $n--;
    }
    return $n;
}

function PPCM(int $j, int $k): int
{
    return ($j * $k) / PGCD($j, $k);
}

$games = [
    "Portal 2",
    "Half Life 2",
    "Half Life Alyx",
    "Zenith MMR",
    "Beat Saber",
    "Counter Strike: Global Offensive",
    "Minecraft",
    "Super Smash Brothers Ultimate",
    "A Hat in Time",
    "NiER: Automata",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Atelier 1.2</title>
    <link
            href="../node_modules/bootstrap/dist/css/bootstrap.min.css"
            rel="stylesheet"
    />
</head>
<body>
<div class="m-3">
    <a href=".." class="btn btn-primary">go back lol</a>
</div>
<hr/>
<div class="container">
    <h1 class="display-3 mb-3">Atelier 1.2</h1>
    <div class="mb-4" id="num1">
        <h2 class="fw-light mb-3">Numéro 1</h2>
        <div class="row">
            <div class="col-4">
                <p>
                    Dans un fichier PHP, créez un tableau contenant au moins 10 chaînes de caractères.
                    Dans le HTML de ce fichier, affichez:
                </p>
                <ul>
                    <li> Un formulaire de recherche (champ texte et bouton)</li>
                    <li> La liste des chaînes dans un list-group Bootstrap ou un ul-li HTML</li>
                </ul>
                <p>
                    Le formulaire fonctionne en GET. Lorsque je fais une recherche, affichez seulement les éléments qui
                    contiennent le texte cherché. S'il n'y a pas de recherche en cours, affichez tous les éléments.
                </p>
            </div>
            <div class="col-8">
                <form method="get" action="index.php#num1">
                    <div class="mb-3">
                        <label for="q" class="form-label">Filtre</label>
                        <input type="text" class="form-control" id="q" name="q">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <ul class="list-group mt-3">
                    <?php foreach ($games as $value) {
                        if (
                            isset($_GET["q"]) &&
                            !str_contains(
                                strtolower($value),
                                strtolower($_GET["q"])
                            )
                        ) {
                            continue;
                        }
                        echo "<li class='list-group-item'>" . $value . "</li>";
                    } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="mb-4" id="num2">
        <h2 class="fw-light mb-3">Numéro 2</h2>
        <div class="row">
            <div class="col-4">
                <p>
                    Récupérez votre numéro de PGCD et PPCM de l'atelier précédent. Ajoutez un formulaire HTML qui
                    demande les deux nombres et qui fonctionne en POST. Lorsque je soumet le formulaire:
                </p>
                <ul>
                    <li>Affichez les deux résultats;</li>
                    <li>Gardez les nombres envoyés dans le formulaire;</li>
                </ul>
            </div>
            <div class="col-8">
                <form method="post" action="index.php#num2">
                    <?php
                    $pgcd = "n/a";
                    $ppcm = "n/a";

                    if (isset($_POST["nb1"]) && $_POST["nb2"]) {
                        $pgcd = pgcd($_POST["nb1"], $_POST["nb2"]);
                        $ppcm = ppcm($_POST["nb1"], $_POST["nb2"]);
                    }
                    ?>
                    <div class="mb-3">
                        <label for="nb1" class="form-label">Nombre 1</label>
                        <input type="number" class="form-control" id="nb1" name="nb1"
                               value="<?= $_POST["nb1"] ?? "" ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nb2" class="form-label">Nombre 2</label>
                        <input type="number" class="form-control" id="nb2" name="nb2"
                               value="<?= $_POST["nb2"] ?? "" ?>">
                    </div>
                    <div class="mb-3">
                        <label for="pgcd-result" class="form-label">PGCD</label>
                        <input type="text" class="form-control" id="pgcd-result" disabled placeholder="<?= $pgcd ?>">
                    </div>
                    <div class="mb-3">
                        <label for="ppcm-result" class="form-label">PPCM</label>
                        <input type="text" class="form-control" id="ppcm-result" disabled placeholder="<?= $ppcm ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="mb-4" id="num3">
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
            <div class="col-8">
                <form method="post" action="page2.php">
                    <div class="mb-3">
                        <label for="fname" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="fname" name="fname">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="lname" name="lname">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
