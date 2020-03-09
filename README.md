# LES VARIABLES PHP : 

Les variables nous servent à stocker des informations à un moment précis dans le code.

## Par exemple : 
### Je veux stocker les informations de Rick qui est scientifique, il a 70 ans, Summers et Morty sont ses petits-enfants, il est à la retraite.

On utilise le caractère <strong> $ </strong> pour initialiser une variable et le signe <strong> = </strong> pour assigner une valeur.

#### Il existe une convention internationale pour nommer les variables : 
- La premiere lettre du nom de la variable est toujours en minuscule
- On nomme le nom des variables toujours en anglais
- On utilise le [camelCase](https://wprock.fr/blog/conventions-nommage-programmation/#Conventions-Le-Camel-case), c'est à dire que les mots sont liés sans espace. Chaque mot commence par une majuscule à l’exception du premier.
  
#### Il existe différents types de variables : STRING, INTEGER, BOOLEAN, ARRAY..., [Voir tous les types de variables ICI](https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/type-donnee/) <br>
En PHP, le typage des variables est dynamique, cela veut dire que l'on n'a pas besoin de présiser le type de la variable que l'on écrit, PHP typera lui-même la variable grâce à la synthaxe : <br>  

<code>$name = "Rick"; // STRING (chaine de caractères)</code> <br>
<code>$age = 70; // INTEGER (nombre entier) </code> <br>
<code>$job = "scientifique"; // STRING </code> <br>
<code>$littleChildrens = ["Summer","Morty"];  // ARRAY (tableau)</code> <br>
<code>$isRetired = true;  // BOOLEAN (true ou false)</code> 

  
#### Exemples pour nommer la variable du nom de Rick : 

$RickName => mauvais <br>
$NomDeRick => mauvais <br>
$nom-De-Rick => mauvais <br>
$rickName => BON <br>

## Exercices : 
- cloner le projet -> créer une branche en la nommant par ton prénom
- ouvrir le projet en entier dans un IDE
- lancer le projet sur le serveur local (php -S localhost:8000
)
- lire la homepage
- faire les exercices de la page exercices en suivant les consignes
