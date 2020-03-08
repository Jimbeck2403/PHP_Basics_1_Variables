<!----------------------------------------------------------------------------------------------- 
Pour te repérer dans cette page de code, tu peux faire une recherche des mots clés 
ETAPE, BONUS, PUSH, EXEMPLE, ICI TON CODE
afin de te deplacer plus facilement sans te perdre 
------------------------------------------------------------------------------------------------->

<?php include('head.php'); ?>

<div class="dropdown" id="menu">
    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-chevron-circle-down"></i>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#1">Nommer les variables</a>
        <a class="dropdown-item" href="#2">Assigner les valeurs / Afficher le résultat des variables</a>
        <a class="dropdown-item" href="#3">Vérifier le type des variables</a>
        <a class="dropdown-item" href="#4">Concaténer les variables</a>
        <a class="dropdown-item" href="#5">Faire des opérations</a>
        <a class="dropdown-item" href="#bonus">Bonus</a>
        <a class="dropdown-item" href="#push">Pusher mon code</a>
    </div>
</div>
<div class="container my-container">
    <div class="jumbotron">
        <h2 class="display-4">💻 Exercices :</h2>
        <hr class="my-4">
        <div class="row">
            <div class="col-lg-4 col-sm-12 my-5 text-center">
                <img src="assets/images/larbin.gif" alt="larbin" class="avatar">
            </div>
            <div class="col-lg-8 col-sm-12 my-5">
                <p class="lead">
                    <strong>Mr Meeseeks ou M. Larbin en français, est un personnage particulier. </strong><br>
                    Il va falloir stocker un certain nombre d'info à son sujet : <br>
                    - Son identifiant unique -> 3,14 <br>
                    - Couleurs disponibles -> Bleu, Rouge, Vert, Jaune, Violet - (série limitée) <br>
                    - Son temps de vie -> 48 heures <br>
                    - Profession -> Larbin <br>
                    - Souhait(s) disponible(s) -> 1 <br>
                    - Invention de Rick -> Oui <br>
                    - Signe particulier -> S'évapore une fois qu'il a réalisé ton souhait
                </p>
            </div>
        </div>
        <hr class="my-4">
        <!-- 1ere ETAPE -->
        <div class="col-12" id="1">
        <h4 class="display-5">Nommer les variables :</h4>
            <p>
                Première étape, nomme les variables dont on a besoin pour stocker toutes les informations de Monsieur Larbin : <br>
                <small>
                    <div class="alert alert-primary" role="alert">
                        Exemple : <br>
                        <code>$name</code>
                    </div>
                </small>
                <ol>
                    <li>
                        <code>$<!-- NOM VARIABLE --></code>
                    </li>
                    <li>
                        <code>$<!-- NOM VARIABLE --></code>
                    </li>
                    <li>
                        <code>$<!-- NOM VARIABLE --></code>
                    </li>
                    <li>
                        <code>$<!-- NOM VARIABLE --></code>
                    </li>
                    <li>
                        <code>$<!-- NOM VARIABLE --></code>
                    </li>
                    <li>
                        <code>$<!-- NOM VARIABLE --></code>
                    </li>
                    <li>
                        <code>$<!-- NOM VARIABLE --></code>
                    </li>
                </ol>
            </p>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <hr class="my-4">
        <!-- 2eme ETAPE -->
        <div class="col-12" id="2">
        <h4 class="display-5">Assigner des valeurs :</h4>
            <p>
                Deuxième étape, assigne les valeurs aux variables puis affiche les : <br>
                <small>
                    <div class="alert alert-primary" role="alert">
                        <strong>Tips :</strong><br>
                        - Il y a 2 string, 2 integer, 1 array, 1 float, 1 boolean. <br>
                        - Fais attention à la synthaxe afin que le typage dynamique soit correct. <br>
                        - Pour afficher les valeurs d'un ARRAY tu peux utiliser <code>&lt;pre&gt;&lt;?php Print_r($array); ?&gt;&lt;\pre&gt;</code> afin d'avoir un affichage plus friendly. <br>
                        - N'oublie pas les points virgules ; 🤙
                        <hr class="my-2">
                        <strong>Exemple :</strong><br>
                        <code>$name = "Rick";</code> <br>
                        <code>echo "=> " .$name .'&lt;br&gt;';</code> <br>
                        <!-- EXEMPLE -->
                        <?php
                            $name = "Rick";
                            echo "=> " . $name . '<br>';
                        ?>
                        <!-- / -->
                    </div>
                </small>
                <br>
                <?php
                // ICI TON CODE 
                // <!-- REPRENDS LE NOM DE TES VARIABLES ET ASSIGNE LEUR LES VALEURS DE MONSIEUR LARBIN :-->
                // ------------  Aide toi de l'exemple juste au dessus 🤙 ------------>
                // ------------  N'oublie pas le point virgule ; 🤙 ------------>
                ?>
            </p>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <hr class="my-4">
        <!-- 3ème ETAPE -->
        <div class="col-12" id="3">
        <h4 class="display-5">Vérifier le type des variables :</h4>
            <p>
                Troisième étape, utilise la méthode <code>gettype($maVariable);</code> pour vérifier le typage de tes variables :<br>
                <small>
                    <div class="alert alert-primary" role="alert">
                        <strong>Exemple :</strong><br>
                        <code>echo gettype($name);</code> <br> => <br>
                        <!-- EXEMPLE -->
                        <?php echo gettype($name); ?><br>
                        <!-- / -->
                    </div>
                </small>
                <p>
                    <code>echo gettype(<-- $variable -->);</code> <br> => <br>
                    <?php
                    // ICI TON CODE POUR VERIFIER LE TYPAGE DE LA PREMIERE VARIABLE
                    ?>
                </p>
                <p>
                    <code>echo gettype(<-- $variable -->);</code> <br> => <br>
                    <!-- ICI TON CODE POUR VERIFIER LE TYPAGE DE LA VARIABLE SUIVANTE
                     EN AJOUTANT TOI MÊME LES BALISES PHP -->
                </p>
                <p>
                    <code>echo gettype(<-- $variable -->);</code> <br> => <br>
                    <!-- ICI TON CODE POUR VERIFIER LE TYPAGE DE LA VARIABLE SUIVANTE
                     EN AJOUTANT TOI MÊME LES BALISES PHP -->
                </p>
                <p>
                    <code>echo gettype(<-- $variable -->);</code> <br> => <br>
                    <!-- ICI TON CODE POUR VERIFIER LE TYPAGE DE LA VARIABLE SUIVANTE
                     EN AJOUTANT TOI MÊME LES BALISES PHP -->
                </p>
                <p>
                    <code>echo gettype(<-- $variable -->);</code> <br> => <br>
                    <!-- ICI TON CODE POUR VERIFIER LE TYPAGE DE LA VARIABLE SUIVANTE
                     EN AJOUTANT TOI MÊME LES BALISES PHP -->
                </p>
                <p>
                    <code>echo gettype(<-- $variable -->);</code> <br> => <br>
                    <!-- ICI TON CODE POUR VERIFIER LE TYPAGE DE LA VARIABLE SUIVANTE
                     EN AJOUTANT TOI MÊME LES BALISES PHP -->
                </p>
                <p>
                    <code>echo gettype(<-- $variable -->);</code> <br> => <br>
                    <!-- ICI TON CODE POUR VERIFIER LE TYPAGE DE LA VARIABLE
                     EN AJOUTANT TOI MÊME LES BALISES PHP -->
                </p>
            </p>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <hr class="my-4">
        <!-- 4ème ETAPE -->
        <div class="col-12" id="4">
        <h4 class="display-5">Concaténer les variables :</h4>
            Quatrième étape, concatène les variables entre elles afin d'afficher le texte suivant : <br>
            <div class="font-italic my-3">
                Le <strong><u>larbin*</u></strong> est une invention de Rick. <br>
                Les couleurs disponibles sont : <strong><u>Bleu*, Rouge*, Vert*, Jaune*, Violet - (série limitée)* </u></strong>. <br>
                Vit environ <strong><u>48*</u></strong> heures. <br>
                <strong><u>S'évapore une fois qu'il a réalisé ton souhait*</u></strong>. <br>
                <strong><u>1*</u></strong> souhait par larbin.
                Photo non contractuelle.
            </div>
            <small>
                <div class="alert alert-primary" role="alert">
                <strong>Tips :</strong><br>
                    Le terme concaténer veut dire que l'on associe les variables entre elles. Par exemple : <br>
                    J'ai 2 varibales : $direBonjour = "Hello" et $destination = "World". <br>
                    Je souhaite associer les 2 variables pour afficher "Hello World", pour cela je vais utilser la concaténation. <br>
                    En PHP, il suffit de placer un point '.' devant la variable à associer : <br>
                    <code>echo .$direBonjour .$destination;</code> <br> => <br> 
                    <?php echo $direBonjour = "Hello" .$destination = "World"; ?> <br>
                    Sauf que mes mots sont collés alors je concatène un espace entre les 2 comme ceci : <br> <code>echo .$direBonjour ." " .$destination;</code> <br> => <br>
                    <?php echo $direBonjour = "Hello" ." " .$destination = "World"; ?>  <br>
                    <hr class="my-2">
                    <strong>Exemple :</strong><br>
                    <code>
                        $name = "Rick";<br>
                        $job = "scientifique";
                    </code>
                    <br>
                    <code>echo "Hello je suis ".$name." et je suis ".$job.".";</code> <br> => <br>
                    <!-- EXEMPLE -->
                    <?php
                        $name = "Rick";
                        $job = "scientifique";
                        echo "Salut je suis " .$name ." et je suis " .$job .".";
                    ?>
                    <!-- / -->
                    <br>
                </div>
            </small>
            <p>
                <p>
                    <!-- ICI TON CODE POUR AFFICHER LE TEXTE : 

                    Le larbin est une invention de Rick.
                    Les couleurs disponibles sont : Bleu, Rouge, Vert, Jaune, Violet - (série limitée).
                    Vit environ 48 heures.
                    S'évapore une fois qu'il a réalisé ton souhait.
                    1 souhait par larbin.
                    Photo non contractuelle**.
                    
                    ** N'oublie pas de mettre ton code dans des balises PHP 🤙           
                -->
                </p>
            </p>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <hr class="my-4">
        <!-- 5ème ETAPE -->
        <div class="col-12" id="5">
        <h4 class="display-5">Faire des opérations :</h4>
            Cinquième étape, on va aider Rick à chiffrer sa production de larbins : <br>
            <small>
                <div class="alert alert-primary" role="alert">
                <strong>Tips :</strong><br>
                    Liste des opérateurs disponibles => <br>
                    <code>
                        * => multiplier <br>
                        + => additionner <br> 
                        - => soustraire <br>
                        / => diviser <br>   
                        % => modulo : $a % $b = reste de $a divisé par $b <br>  
                        ** => exponentielle : $a ** $b = puissance de $a par $b <br>
                    </code>
                    <hr class="my-2">
                    <strong>Exemple :</strong><br>
                    Si Rick vend 24 larbins identiques à 60 000$, quel est le prix d'un larbin ? <br>
                    <code>
                        $total = 60000; <br>
                        $larbins = 24 <br>
                        echo $total / $larbins ." $"; <br> => <br>
                        <!-- EXEMPLE -->
                        <?php 
                            $total = 60000;
                            $larbins = 24;
                            echo $total / $larbins ." $";
                        ?>
                        <!-- / -->
                    </code>
                    <br>
                </div>
            </small>
            <p>
                <p>
                    - Si Rick dispose de 1545 larbins violets, de 1988 larbins bleu et de 1423 larbins verts, combien a-t-il de larbins en stock ? <br>
                    <!-- ICI TON CODE --> 
                    <!-- ** N'oublie pas de mettre ton code dans des balises PHP 🤙  -->
                    <br>
                    - Si Rick avait 78 459 larbins en stock mais que Condorman lui en commande 57 621, combien va-t-il lui en rester ? <br>
                    <!-- ICI TON CODE --> 
                    <!-- ** N'oublie pas de mettre ton code dans des balises PHP 🤙  -->
                    <br>
                    - Si Rick a 100 larbins jaunes qui coutent 2 fois moins cher que 100 larbins bleus à 5480$, combien coûte un larbin jaune ? <br>
                    <!-- ICI TON CODE --> 
                    <!-- ** N'oublie pas de mettre ton code dans des balises PHP 🤙  -->
                    <br>
                    - Rick dispose de 17 larbins violets, s'il veut en donner 5 à Morty, 5 à Summer, 5 à sa fille et le reste à Jerry, combien de larbins va avoir Jerry ? (tips : utilise le modulo) <br>
                    <!-- ICI TON CODE --> 
                    <!-- ** N'oublie pas de mettre ton code dans des balises PHP 🤙  -->
                    <br>
                    - Bonus : Rick voudrait écrire une fonction qui lui permette d'être alerté lorsque le nombre de ses larbins en stock est inférieur ou égale à 15, comment faire ? <br>
                    <!-- ICI TON CODE --> 
                    <!-- ** N'oublie pas de mettre ton code dans des balises PHP 🤙  -->
                    <br>
                </p>
            </p>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    <!-- BONUS -->
    <div class="jumbotron bg-dark text-light" id="bonus">
        <h2 class="display-4">😎 Bonus :</h2>
        <hr class="my-4">
        <div class="row">
            <div class="col-lg-4 col-sm-12 my-5 text-center">
                <img src="assets/images/bonus.gif" alt="bonus 8 bit" class="avatar">
            </div>
            <div class="col-lg-8 col-sm-12 my-5">
                <p class="lead">
                    J'ai caché un personnage dans le code, à toi de jouer pour trouver comment l'afficher :
                </p>
                <small>
                    <div class="alert alert-primary" role="alert">
                        <strong>Tips :</strong><br>
                        - Le personnage caché ne s'affichera que si la variable <code>$secretIsVisible</code> est réiniatlisée à <code>true</code> <br>
                        - Observe comment j'ai découpé mon code, notamment avec les fichiers <code>head.php</code> et <code>footer.php</code> et comment je les utilise dans <code>index.php</code> et <code>exercices.php</code> <br>
                        - Il y a plusieurs manières d'arriver à afficher le personnage caché. <br>
                    </div>
                </small>
            </div>
            <div class="col-12">
                <?php
                    if ($secretIsVisible === false) {
                        echo "👻";
                    }
                    // ICI TON CODE
                    // TROUVE COMMENT AFFICHER LE PERSONNAGE CACHE
                ?>
            </div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    <!-- PUSH -->
    <div class="jumbotron" id="push">
        <h2 class="display-4">➜ ✅ : git push</h2>
        <hr class="my-4">
        <div class="row">
            <div class="col-12 my-5">
                <h4> Dans ton terminal : <h4>
                    <code class="git">
                        ➜  git:(nom_de_ta_branche) ✗ git add &lt;les fichiers modifiés&gt; <br>
                        ➜  git:(nom_de_ta_branche) ✗ git commit -m "ton message de commit" <br>
                        ➜  git:(nom_de_ta_branche) git push --set-upstream origin nom_de_ta_branche <br>
                    </code>
                </h4>
            </div>
            <div class="col-12">
                <div class="text-center my-4">
                    <img src="assets/images/noob.gif" alt="thanks noob noob" class="noob">
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>