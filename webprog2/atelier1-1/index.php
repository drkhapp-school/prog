<?php
// Numéro 1
function NomComplet(string $last, string $first): string
{
    return $first . " " . $last;
}

function EstMajeur(int $age): ?bool
{
    return $age >= 18 ?: ($age > 0 ? false : null);
}

function PlusGrand(int ...$arr): int
{
    $max = $arr[0];
    foreach ($arr as $item) {
        if ($max < $item) {
            $max = $item;
        }
    }
    return $max;
}

// Numéro 2
function PGCD(int $j, int $k): int
{
    $pgcm = 1;
    $max = max($j, $k);
    for ($i = 1; $i <= $max; $i++) {
        if (!($j % $i) && !($k % $i)) {
            $pgcm = $i;
        }
    }
    return $pgcm;
}

function PPCM(int $j, int $k): int
{
    return ($j * $k) / PGCD($j, $k);
}
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
    <title>Document</title>
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
    <h1 class="display-3 mb-3">Atelier 1.1</h1>
    <div class="mb-5">
        <h2 class="fw-light">Numéro 1</h2>
        <p>Créer trois fonctions suivantes:</p>
        <ul>
            <li>
                NomComplet, reçoit nom et prénom en paramètre et retourne le nom
                complet
                <br/>
                Exemple: NomComplet("Girard", "Philippe") retourne "Philippe Girard"
            </li>
            <li>
                EstMajeur, reçoit un âge (nombre entier) en paramètre et retourne un
                booléen qui indique si la personne est majeure, retourne null si l'âge
                reçu est négatif
                <br/>
                Exemple: EstMajeur(19) retourne false
            </li>
            <li>
                PlusGrand, reçoit un nombre inconnu de nombres et retourne le plus
                grand nombre de cette liste, n'utilisez pas la fonction PHP max
                <br/>
                Exemple: PlusGrand(0, 42, 9001) retourne 9001
            </li>
        </ul>
        <p>
            Testez chacune de ces fonctions et affichez les résultats avec des
            'echo'
        </p>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title fw-light fs-4">NomComplet</h3>
                        <p class="card-body">
                            <code>
                                "Girard", "Philippe":
                                <?php var_dump(
                                    NomComplet("Girard", "Philippe")
                                ); ?>
                            </code>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title fw-light fs-4">EstMajeur</h3>
                        <p class="card-body">
                            <code>
                                20: <?php var_dump(EstMajeur(20)); ?><br>
                                11: <?php var_dump(EstMajeur(11)); ?><br>
                                -41: <?php var_dump(EstMajeur(-41)); ?>
                            </code>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title fw-light fs-4">PlusGrand</h3>
                        <p class="card-body">
                            <code>
                                1, 42, 404: <?php var_dump(
                                    PlusGrand(1, 42, 404)
                                ); ?>
                            </code>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-5">
        <h2 class="fw-light mb-3">Numéro 2</h2>
        <h4 class="fw-normal">Définitions</h4>
        <div class="row border-bottom border-1 mb-3">
            <div class="col">
                <h5 class="fw-light">Plus Grand Commun Diviseur</h5>
                <p> Entre 2 nombres, trouver le
                    plus grand entier qui permet de les diviser sans restes. Donc n1 / x = a
                    et n2 / x = b, trouver x (tous doivent être des entiers). Avec 8 et 6 le
                    PGCD est 2 (8 / 2 = 4 et 6 / 2 = 3) et avec 16 et 24, c'est 8 (16 / 8 = 2
                    et 24 / 8 = 3).
                </p>
            </div>
            <div class="col">
                <h5 class="fw-light">Plus Petit Commun Multiple</h5>
                <p> Avec 2 nombres, trouver le plus
                    petit multiple commun (avec des entiers). Donc n1 * a = x et n2 * b = x,
                    trouver x (tous doivent être des entiers). Avec 16 et 20 le PPCM est 80
                    (16 * 5 = 80 et 20 * 4 = 80).
                </p>
            </div>
        </div>
        <p>
            Ce que vous devez faire:
        </p>
        <ol>
            <li>
                Écrire deux fonctions, une qui calcul le PGCD et une qui calcul le
                PPCM.
            </li>
            <li>
                Choisir 2 nombres aléatoires entre 1 et 100 (fonction PHP rand(min,
                max)) et calculer leur PGCD et leur PPCM
            </li>
            <li>
                Afficher avec des echo les résultats ("PGCD de x et y est ?" et "PPCM
                de x et y est ?")
            </li>
        </ol>
        <div class="row">
            <?php
            $x = rand(1, 100);
            $y = rand(1, 100);
            ?>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title fw-light fs-4">Plus Grand Commun Diviseur</h3>
                        <p class="card-body">
                            <code>
                                <?php
                                echo "x: $x, y: $y<br>pgcd: ";
                                var_dump(PGCD($x, $y));
                                ?>
                            </code>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title fw-light fs-4">Plus Petit Commun Multiplicateur</h3>
                        <p class="card-body">
                            <code>
                                <?php
                                echo "x: $x, y: $y<br>ppcm: ";
                                var_dump(PPCM($x, $y));
                                ?>
                            </code>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-5">
        <h2 class="fw-light">Numéro 3</h2>
        <p>Générez un nombre aléatoire entre -10 et 10 et selon le nombre trouvé changez le PHP (ne pas echo de
            HTML).</p>
        <ul>
            <li>
                Nombre plus petit que 0: Afficher un alert rouge (danger) qui indique que le nombre est invalide
            </li>
            <li>
                Nombre plus grand que 0: Afficher un alert vert (success) et indiquez dans ce alert si le nombre est
                pair ou non
            </li>
            <li>
                Nombre égale à 0: Ne pas afficher de alert
            </li>
        </ul>
        <div class="row">
            <?php $num = rand(-10, 10); ?>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title fw-light fs-4">Input</h3>
                        <code class="card-body">
                            num: <?php var_dump($num); ?>
                        </code>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title fw-light fs-4">Output</h3>
                        <?php if ($num < 0) { ?>
                            <div class="alert alert-danger">
                                Le nombre est invalid.
                            </div>
                        <?php } elseif ($num) { ?>
                            <div class="alert alert-success">
                                Le nombre est valid et est
                                <?= $num % 2 == 0 ? "pair" : "impair" ?>.
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
