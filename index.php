<?php

/**
 * 1. Créez une variable contenant une chaîne de caractères contenant du texte lorem ( 1 seule ligne suffit )
 * 2. Ajouter le contenu de cette variable dans un fichier avec la méthode de votre choix.
 * --> Attention à bien fermer votre fichier si vous utilisez fopen()
 */
// TODO Votre code ici.
$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias, aliquam aliquid beatae cum ducimus earum eius impedit mollitia necessitatibus nostrum porro provident quia quibusdam quisquam sapiente vel vero voluptatem!";

$first = fopen('monText.txt', 'a+b');
fwrite($first, $text . "\n");
fclose($first);
/**
 * 3. Créez un tableau contenant au moins 10 chaînes de caractère au choix.
 * 4. Faites en sorte d'ajouter chaque chaîne de caractère de ce tableau au fichier créé dans la première partie ( point 2 )
 * --> N'oubliez pas de fermer vos fichiers.
 * --> Attention: les chaînes de caractères doivent s'ajouter à la suite du contenu déjà existant, pas d'écrasement.
 */
// TODO Votre code ici

$table = ["Lorem ipsum dolor sit amet,", "consectetur adipisicing elit.", "Ad alias, aliquam aliquid beatae", "cum ducimus earum eius impedit", "mollitia necessitatibus nostrum", "porro provident quia quibusdam", "quisquam sapiente vel vero voluptatem!", "Lorem ipsum dolor sit amet,", "consectetur adipisicing elit.", "Ad alias, aliquam aliquid beatae"];

$nouveau = fopen('monText.txt', 'c+b');

foreach($table as $element) {
    fwrite($nouveau, $element . "\n");
}

fclose($nouveau);

/**
 * 5. Trouvez une solution pour afficher à l'aide d'un simple echo l'extension du fichier index.php
 */
// TODO Votre code ici
$file = fopen('monText.txt', 'rb');

while($ligne = fgets($file)) {
    echo "<div> $ligne </div>";
}

fclose($file);

echo "<br><br>";

/**
 * 6. Testez si le fichier 'toto' existe, sil n'existe pas, afficher un texte distant que ce fichier n'existe pas !
 */
// TODO Votre code ici.
if(file_exists('toto.txt')) {
    echo "Le fichier existe";
} else {
    echo "Le fichier n'existe pas";
}

echo "<br><br>";

/**
 * Super bonus.
 * Parcourrez votre fichier, à chaque fois que vous rencontrez le caractère 'a', remplacez le par le caractère '@'
 * Attention, il y a un piège avec les pointeurs, et une manière très simple de procéder... réfléchissez...
 */
// TODO Votre code ici si vous faites le bonus.
$fule = fopen('monText.txt', 'rb');

while($char = fgetc($fule)) {
    if($char === "a") {
        echo "<p> @ </p>";
    } else {
        echo "<p> $char </p>";
    }
}

fclose($fule);


