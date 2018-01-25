<?php
// Pour éviter de ré-écrire les mêmes instructions plusieurs fois, on utilise des fonctions

// On déclare une fonction comme cela
function afficheMonNom()
{
    echo "Maxime";
}

// Maintenant, on peut appeler cette fonction de cette façon :
afficheMonNom(); // --> affiche Maxime

// On peut bien sûr appeler une fonction depuis une boucle
for ($i = 0; $i < 3; $i++)
{
    afficheMonNom(); // -->> affiche MaximeMaximeMaxime
}

// On peut aussi passer des paramètres à une fonction
function afficheUnNom($nom)
{
    echo $nom;
}

// On peut maintenant appeler cette fonction et la faire afficher un nom différent
afficheUnNom("Maxime");
afficheUnNom("Sébastien");
afficheUnNom("Jean-Claude");

// Une fonction peut exécuter un nombre infini d'instructions mais il est fortemment recommandé d'avoir des fonctions qui remplissent une seule mission
