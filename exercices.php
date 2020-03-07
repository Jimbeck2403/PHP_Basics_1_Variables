<?php include('head.php'); ?>

<div class="container">
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
            <div class="col-12">
                Pour cela on va donc utiliser les variables :
            </div>
        </div>
        <hr class="my-4">
        <!-- 1ere ETAPE -->
        <div class="col-12" id="1">
            <p>
                Première étape, nomme les variables dont on a besoin pour stocker toutes les informations du Larbin : <br>
                <small>
                    <div class="alert alert-primary" role="alert">
                        Exemple : <br>
                        <code>$name</code>
                    </div>
                </small>
                <ol>
                    <li>
                        <code>$
                            <!-- NOM VARIABLE --></code>
                    </li>
                    <li>
                        <code>$
                            <!-- NOM VARIABLE --></code>
                    </li>
                    <li>
                        <code>$
                            <!-- NOM VARIABLE --></code>
                    </li>
                    <li>
                        <code>$
                            <!-- NOM VARIABLE --></code>
                    </li>
                    <li>
                        <code>$
                            <!-- NOM VARIABLE --></code>
                    </li>
                    <li>
                        <code>$
                            <!-- NOM VARIABLE --></code>
                    </li>
                    <li>
                        <code>$
                            <!-- NOM VARIABLE --></code>
                    </li>
                </ol>
            </p>
        </div>
        <hr class="my-4">
        <!-- 1ere ETAPE -->
        <div class="col-12" id="2">
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
                // <!-- ICI TON CODE POUR ASSIGNER LES VALEURS AUX VARIABLES :-->
                // ------------  N'oublie pas le point virgule ; 🤙 ------------>
                ?>
            </p>
        </div>
        <hr class="my-4">
        <div class="col-12" id="3">
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
        </div>
        <hr class="my-4">
        <div class="col-12" id="5">
            Dernère étape, conquatène les variables entre elles afin d'afficher le texte suivant : <br>
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
                    <strong>Exemple :</strong><br>
                    <code>
                        $name = "Jenny";<br>
                        $job = "développeuse";
                    </code>
                    <br>
                    <code>echo "Hello je suis ".$name." et je suis ".$job.".";</code> <br> => <br>
                    <!-- EXEMPLE -->
                    <?php 
                        $name = "Jenny";
                        $job = "développeuse";
                        echo "Hello je suis ".$name." et je suis ".$job."."; 
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
                    Photo non contractuelle.
                    
                    ** N'oublie pas de mettre ton code dans des balises PHP 🤙           
                -->
                </p>
            </p>
        </div>
    </div>
    <div class="jumbotron bg-dark text-light">
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
                            - Observe comment j'ai découpé mon code, notamment avec les fichiers <code>head.php</code> et <code>footer.php</code> et comment je les utilise dans index et exercices <br>
                        <p class="my-3">
                            <?php 
                                if($secretIsVisible === false) {
                                    echo "👻";
                                }
                            ?>
                        </p>                    
                    </div>
                </small>

                <?php
                    //TROUVE COMMENT AFFICHER LE PERSONNAGE CACHE

                    
                    
                ?>

            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>