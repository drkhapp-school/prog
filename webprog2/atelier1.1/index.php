<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
    <hr />
    <div class="container">

    <h1 class="display-3">Atelier 1.1</h1>
    <div>
      <h3 class="fw-light">Numéro 1</h3>
      <p>Créer trois fonctions suivantes:</p>
      <ul>
        <li>
          NomComplet, reçoit nom et prénom en paramètre et retourne le nom
          complet
          <br />
          Exemple: NomComplet("Girard", "Philippe") retourne "Philippe Girard"
        </li>
        <li>
          EstMajeur, reçoit un âge (nombre entier) en paramètre et retourne un
          booléen qui indique si la personne est majeure, retourne null si l'âge
          reçu est négatif
          <br />
          Exemple: EstMajeur(19) retourne false
        </li>
        <li>
          PlusGrand, reçoit un nombre inconnue de nombres et retourne le plus
          grand nombre de cette liste, n'utilisez pas la fonction PHP max
          <br />
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
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title fw-light fs-4">EstMajeur</h3>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title fw-light fs-4">PlusGrand</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <h3 class="fw-light">Numéro 2</h3>
      <p>
        <b>PGCD: Plus Grand Commun Diviseur.</b> Entre 2 nombres, trouver le
        plus grand entier qui permet de les diviser sans restes. Donc n1 / x = a
        et n2 / x = b, trouver x (tous doivent être des entiers). Avec 8 et 6 le
        PGCD est 2 (8 / 2 = 4 et 6 / 2 = 3) et avec 16 et 24 c'est 8 (16 / 8 = 2
        et 24 / 8 = 3).
      </p>
      <p>
        <b>PPCM: Plus Petit Commun Multiple.</b> Avec 2 nombres, trouver le plus
        petit multiple commun (avec des entiers). Donc n1 * a = x et n2 * b = x,
        trouver x (tous doivent être des entiers). Avec 16 et 20 le PPCM est 80
        (16 * 5 = 80 et 20 * 4 = 80). Ce que vous devez faire:
      </p>
      <ol>
        <li>
          Écrire deux fonctions, une qui calcul le PGCD et une qui calcul le
          PPCM.
        </li>
        <li>
          Choisir 2 nombres aléatoire entre 1 et 100 (fonction PHP rand(min,
          max) ) et calculer leur PGCD et leur PPCM
        </li>
        <li>
          Afficher avec des echo les résultats ( "PGCD de x et y est ?" et "PPCM
          de x et y est ?")
        </li>
      </ol>
    </div>
    </div>
  </body>
</html>
