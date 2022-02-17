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
    <div class="mb-4">
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
                <form>
                    <div class="mb-3">
                        <label for="game" class="form-label">Filtre</label>
                        <input type="text" class="form-control" id="game">
                    </div>
                </form>
                <button type="submit" class="btn btn-primary">Submit</button>
                <ul class="list-group mt-3">
                    <li class="list-group-item">lol</li>
                    <li class="list-group-item">lol</li>
                    <li class="list-group-item">lol</li>
                    <li class="list-group-item">lol</li>
                    <li class="list-group-item">lol</li>
                    <li class="list-group-item">lol</li>
                    <li class="list-group-item">lol</li>
                    <li class="list-group-item">lol</li>
                    <li class="list-group-item">lol</li>
                    <li class="list-group-item">lol</li>
                    <li class="list-group-item">lol</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <h2 class="fw-light mb-3">Numéro 2</h2>
        <div class="row">
            <div class="col-4">
                <p>
                    Dans un fichier PHP, créez un tableau contenant au moins 10 chaînes de caractères.
                    Dans le HTML de ce fichier, affichez:
                </p>
                <ul>
                    <li>Affichez les deux résultats;</li>
                    <li>Un formulaire de recherche (champ texte et bouton)</li>
                </ul>
            </div>
            <div class="col-8"></div>
        </div>
    </div>
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
            <div class="col-8"></div>
        </div>
    </div>
</div>
</body>
</html>
