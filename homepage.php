<?php include('head.php') ?>

<div class="dropdown" id="menu">
    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-chevron-circle-down"></i>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#1">Nommer les variables</a>
        <a class="dropdown-item" href="#2">Assigner des valeurs</a>
        <a class="dropdown-item" href="#3">Vérifier le type des variables</a>
        <a class="dropdown-item" href="#4">Afficher les valeurs des varibales</a>
        <a class="dropdown-item" href="#5">Concaténer les variables entres elles</a>
        <a class="dropdown-item" href="#6">Ressources</a>
    </div>
</div>
<div class="container my-container">
    <div class="jumbotron">
        <h1 class="display-4">💲 Les Variables :</h1>
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
        <section id="1">
            <h3>1 - Nommer les variables</h3>
            <p>
                La première étape consiste à nommer mes variables en respectant les conventions de nommage (lire le <a href="index.php">README</a> pour revoir les conventions de nommage): <br>
                <ul class="list">
                    <li><code>$name</code></li>
                    <li><code>$age</code></li>
                    <li><code>$job</code></li>
                    <li><code>$littleChildrens</code></li>
                    <li><code>$isRetired</code></li>
                </ul>
            </p>
        </section>
        <hr class="my-4">
        <section id="2">
            <h3>2 - Assigner des valeurs</h3>
            <p>
                La deuxième étape consiste à assigner une valeur à chacune des variables : <br>
                <ul class="list">
                    <li><code>$name = "Rick";</code></li>
                    <li><code>$age = 70;</code></li>
                    <li><code>$job = "scientifique";</code></li>
                    <li><code>$littleChildrens = ["Summer","Morty"];</code></li>
                    <li><code>$isRetired = true;</code></li>
                </ul>
                <div class="text-center">
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="popover" title="Comments in code" data-content="Quelque que chose en PHP se passe à cet endroit du code. Pour aller voir, rend toi dans ton IDE, dans le fichier homepage.php et tape une recherche du mot clé = _PHP" ><i class="fas fa-comment"></i> Comments in code</button>
                </div>
                <!-- ICI => J'assigne une valeur à chaque variable : -->
                <div id="_PHP">
                    <?php
                        $name = "Rick";
                        $age = 70;
                        $job = "scientifique";
                        $littleChildrens = ["Summer", "Morty"];
                        $isRetired = true;
                    ?>
                </div>
            </p>
        </section>
        <hr class="my-4">
        <section id="3" class="_TYPE">
            <h3>3 - Vérifier le type des variables</h3>
            <p>
                Pour vérifier le typage dynamique des variables je peux utiliser la méthode <code>gettype($maVariable);</code> :<br>
                <!-- ICI => J'utilise la méthode gettype() pour afficher le type de mes variables et echo pour afficher le résulat -->
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
                <div class="text-center">
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="popover" title="Comments in code" data-content="Quelque que chose en PHP se passe à cet endroit du code. Pour aller voir, rend toi dans ton IDE, dans le fichier homepage.php et tape une recherche du mot clé = _TYPE" ><i class="fas fa-comment"></i> Comments in code</button>
                </div>
            </p>
        </section>
        <hr class="my-4">
        <section id="4" class="_ECHO">
            <h3>4 - Afficher les valeurs des varibales</h3>
            <p>
                Pour afficher la valeur d'une variable j'utilise la méthode <code>echo $maVariable</code>, pour les array j'utilise <code>Print_r($monArray)</code> : <br>
                <!-- ICI => J'affiche la valeur de mes variables -->
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
                <div class="text-center">
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="popover" title="Comments in code" data-content="Quelque que chose en PHP se passe à cet endroit du code. Pour aller voir, rend toi dans ton IDE, dans le fichier homepage.php et tape une recherche du mot clé = _ECHO" ><i class="fas fa-comment"></i> Comments in code</button>
                </div>
            </p>
        </section>
        <hr class="my-4">
        <section  id="5" class="_CONCATENER">
            <h3>5 - Concaténer les variables</h3>
            <p>
                Maintenant j'aimerais afficher le message suivant : <br>
                <blockquote>"Rick a 70 ans, il est scientifique. Morty et Summer sont ses petits enfants."</blockquote> 
                <p>
                    Pour cela, je vais devoir concaténer mes variables comme ceci : <br>
                </p>
                <code>
                    $name ." a " .$age ." ans, il est " .$job .". " .$littleChildrens[1] ." et " .$littleChildrens[0] ." sont ses petits enfants.";
                </code>
                <p> => <br>
                    <!-- ICI => Je concatène mes variables entre elles à l'aide du signe '.' -->
                    <?php
                    echo $name ." a " .$age ." ans, il est " .$job . ". " .$littleChildrens[1] ." et " .$littleChildrens[0] ." sont ses petits enfants.";
                    ?>
                </p>
                <div class="text-center">
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="popover" title="Comments in code" data-content="Quelque que chose en PHP se passe à cet endroit du code. Pour aller voir, rend toi dans ton IDE, dans le fichier homepage.php et tape une recherche du mot clé = _CONCATENER" ><i class="fas fa-comment"></i> Comments in code</button>
                </div>
            </p>
        </section>
    </div>
    <div class="jumbotron bg-dark text-light" id="6">
        <h2 class="display-4">😎 Ressources :</h2>
        <hr class="my-4">
        <div class="row">
            <div class="col-lg-4 col-sm-12 my-5">
                <ol>
                    <li><a href="https://www.grafikart.fr/tutoriels/variables-php-1115" target="_blank">Grafikart - Les Variables</a></li>
                    <li><a href="https://www.php.net/manual/fr/language.variables.basics.php" target="_blank">Documentation Officielle PHP - Les Variables</a></li>
                    <li><a href="https://www.php.net/manual/fr/language.operators.string.php" target="_blank" rel="noopener noreferrer">Documentation Officielle PHP - Concaténation - Opérateur de chaînes</a></li>
                </ol>
            </div>
            <div class="col-lg-8 col-sm-12 my-5">
            <iframe src="https://www.youtube.com/embed/UnqJwiIPbag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="iframe"></iframe>
            </div>
        </div>
    </div>
    <div class="my-5 text-center">
        <a href="exercices.php" class="btn btn-primary">Faire les exercices <i class="far fa-arrow-alt-circle-right"></i></a>
    </div>
</div>

<?php include('footer.php') ?>