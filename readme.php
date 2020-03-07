<?php include('head.php')?>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">LES VARIABLES PHP :</h1>
            <p class="lead">Les variables nous servent à stocker des informations à un moment précis dans le code.</p>
            <hr class="my-4">
            <h4>Par exemple :</h4>
            <h5>Je veux stocker les informations de Rick qui est scientifique, il a 70 ans, Summers et Morty sont ses petits-enfants, il est à la retraite.</h5>
            <div>
                <div class="my-5" id="nommage"> 
                    <p>On utilise le caractère <strong> $ </strong> pour initialiser une variable et le signe <strong> = </strong> pour assigner une valeur.</p>
                    <p>
                        Il existe des <strong><u>conventions internationales</u></strong> pour nommer les variables : <br>
                        - La premiere lettre du nom de la variable est toujours en minuscule <br>
                        - On nomme le nom des variables toujours en anglais <br>
                        - On utilise le <a href="https://wprock.fr/blog/conventions-nommage-programmation/#Conventions-Le-Camel-case" target="_blank">camelCase</a>, c'est à dire que les mots sont liés sans espace. Chaque mot commence par une majuscule à l’exception du premier.
                    </p>
                </div>
                <div class="my-5">
                    <p>
                        Il existe <strong><u>différents types de variables : STRING, INTEGER, BOOLEAN, ARRAY...</u></strong>, <a href="https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/type-donnee/" target="_blank">Voir tous les types de variables ICI</a> <br>
                        En PHP, le typage des variables est dynamique, cela veut dire que l'on n'a pas besoin de présiser le type de la variable que l'on écrit, PHP typera lui-même la variable grâce à la synthaxe : <br>
                    </p>
                    <p>
                        <code>$name = "Rick"; // STRING (chaine de caractères)</code> <br>
                        <code>$age = 70; // INTEGER (nombre entier) </code> <br>
                        <code>$job = "scientifique"; // STRING </code> <br>
                        <code>$littleChildrens = ["Summer","Morty"]; // ARRAY (tableau)</code> <br>
                        <code>$isRetired = true; // BOOLEAN (true ou false)</code>
                    </p>
                </div>
                <div class="my-5">
                    <h5>Exemples pour nommer la variable du nom de Rick :</h5>
                    <p>
                        $RickName => mauvais <br>
                        $NomDeRick => mauvais <br>
                        $nom-De-Rick => mauvais <br>
                        $rickName => BON <br>
                    </p>
                    <h5>Exercices :</h5>
                    <p>
                        - cloner le projet -> créer une branche en la nommant par ton prénom <br>
                        - ouvrir le projet en entier dans un IDE <br>
                        - lancer le projet sur le serveur local <br>
                        - lire la homepage <br>
                        - faire les exercices de la page exercices en suivant les consignes <br>
                    </p>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-primary" href="index.php" role="button">Commencer <i class="far fa-arrow-alt-circle-right"></i></a>
            </div>
        </div>
    </div>

<?php include('footer.php')?>