<?php
// L'un des composants essentiels des languages de programmation sont les variables.
// Lorsqu'on créé une variable, le programme réserve un espace dans la mémoire et y stocke une valeur
$maVariableTexte = "Bonjour Maxime";

// Maintenant, on peut afficher le contenu de cette variable
echo $maVariableTexte; // -->> affiche Bonjour Maxime

// On peut aussi faire des opérations entre variables, par example
$variableA = 5;
$variableB = 10;

echo $variableA + $variableB; // -->> affiche 15

// Le TYPE de contenu des variables est TRES IMPORTANT
// En PHP, les types de variables les plus utilisés sont :
// - string -> des chaînes de caractères (càd du texte)
// - boolean -> des booléens (soit true soit false, ou soit 0 soit 1)
// - integer -> des nombres ENTIERS (càd sans virgule)
// - float -> des nombres à virgule
// - array -> des "tableaux" contenant d'autres variables

// On peut faire des opérations avec des variables de type différent, MAIS CELA N'EST PAS RECOMMANDÉ car le résultat peut être inattendu, p.ex.

echo $variableA + $variableB + $maVariableTexte; // -->> affiche 15BonjourMaxime sur les anciennes versions de PHP (5.x) et plante sur la dernière (7.x)



