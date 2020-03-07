<?php include('head.php')?>
  
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Les Variables :</h1>
            <hr class="my-4">
            <div class="row">
                <div class="col-lg-4 col-sm-12 my-3 text-center">
                    <img src="assets/images/index.gif" alt="rick" class="avatar">
                </div>
                <div class="col-lg-8 col-sm-12 my-5">
                    <p class="lead">
                        <strong>J'aimerais stocker les informations suivantes : </strong><br>
                        - Son nom -> Rick <br>
                        - Son âge -> 70 ans <br>
                        - Sa profession -> scientifique <br>
                        - Ses petits enfants -> Summer et Morty <br>
                        - S'il est à la retraite -> Oui <br>
                    </p>
                </div>
            </div>
            <hr class="my-4">
            <p>
                La première étape consiste à nommer mes variables en respectant les conventions de nommage (lire le <a href="readme.php">README</a> pour revoir les conventions de nommage): <br>
                <ul class="list">
                    <li><code>$name</code></li>
                    <li><code>$age</code></li>
                    <li><code>$job</code></li>
                    <li><code>$littleChildrens</code></li>
                    <li><code>$isRetired</code></li>
                </ul>
            </p>
            <hr class="my-4">
            <p>
                La deuxième étape consiste à assigner une valeur à chacune des variables : <br>
                <ul class="list">
                    <li><code>$name = "Rick";</code></li>
                    <li><code>$age = 70;</code></li>
                    <li><code>$job = "scientifique";</code></li>
                    <li><code>$littleChildrens = ["Summer","Morty"];</code></li>
                    <li><code>$isRetired = true;</code></li>
                </ul>
                <!-- J'assigne une valeur à chaque variable : -->
                <?php
                $name = "Rick";
                $age = 70;
                $job = "scientifique";
                $littleChildrens = ["Summer", "Morty"];
                $isRetired = true;
                ?>
            </p>
            <hr class="my-4">
            <p>
                Pour vérifier le typage dynamique des vaviables je peux utiliser la méthode <code>gettype($maVariable);</code> :<br>
                <p>
                    <code>echo gettype($name);</code> <br> => <br>
                    <?php echo gettype($name); ?>
                </p>
                <p>
                    <code>echo gettype($age);</code> <br> => <br>
                    <?php echo gettype($age); ?>
                </p>
                <p>
                    <code>echo gettype($job);</code> <br> => <br>
                    <?php echo gettype($job); ?>
                </p>
                <p>
                    <code>echo gettype($littleChildrens);</code> <br> => <br>
                    <?php echo gettype($littleChildrens); ?>
                </p>
                <p>
                    <code>echo gettype($isRetired);</code> <br> => <br>
                    <?php echo gettype($isRetired); ?>
                </p>

            </p>
            <hr class="my-4">
            <p>
                Pour afficher la valeur d'une variable j'utilise la méthode <code>echo $maVariable</code>, pour les array j'utilise <code>Print_r($monArray)</code> : <br>
                <p>
                    <code>echo $name;</code> <br> => <br>
                    <?php echo $name; ?>
                </p>
                <p>
                    <code>echo $age;</code> <br> => <br>
                    <?php echo $age; ?>
                </p>
                <p>
                    <code>echo $job;</code> <br> => <br>
                    <?php echo $job; ?>
                </p>
                <p>
                    <code>Print_r($littleChildrens);</code> <br> => <br>
                    <?php Print_r($littleChildrens); ?>
                    <div class="row"></div>
                    Je peux aussi améliorer l'affichage du contenu du tableau pour une meilleure visibilité comme ceci : <br>
                    <code>&lt;pre&gt;&lt;?php Print_r($littleChildrens); ?&gt;&lt;\pre&gt;</code> <br>=> <br>
                    <pre><?php Print_r($littleChildrens); ?></pre>
                </p>
                <p>
                    Pour les boolean, le 1 est égal à true et 0 à false :<br>
                    <code>echo $isRetired;</code> <br> => <br>
                    <?php echo $isRetired; ?>
                </p>
            </p>
            <hr class="my-4">
            <p>
                Maintenant j'aimerais afficher le message suivant : <br>
                Rick a 70 ans, il est scientifique. Morty et Summer sont ses petits enfants. <br>
                <p>
                    Pour cela, je vais devoir conquaténer mes variables comme ceci : <br>
                </p>
                <code>
                    $name ." a ".$age ." ans, il est ".$job.". ".$littleChildrens[1]." et ".$littleChildrens[0]." sont ses petits enfants.";
                </code>
                <p> => <br>
                    <?php
                    echo $name . " a " . $age . " ans, il est " . $job . ". " . $littleChildrens[1] . " et " . $littleChildrens[0] . " sont ses petits enfants.";
                    ?>
                </p>
            </p>
        </div>
        <div class="media bg-light py-5 px-5">
            <div class="media-body">
                <h5>Ressources :</h5>
                <ol>
                    <li><a href="https://www.grafikart.fr/tutoriels/variables-php-1115" target="_blank" rel="noopener noreferrer">Grafikart - Les Variables</a></li>
                    <li><a href="https://www.php.net/manual/fr/language.variables.basics.php" target="_blank" rel="noopener noreferrer">Documentation Officielle PHP - Les Variables</a></li>
                </ol>
            </div>
            <iframe src="https://www.youtube.com/embed/UnqJwiIPbag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="iframe"></iframe>
        </div>
        <div class="my-5 text-center">
            <a href="exercices.php" class="btn btn-primary">Faire les exercices <i class="far fa-arrow-alt-circle-right"></i></a>
        </div>
    </div>

<?php include('footer.php')?>    