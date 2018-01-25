<?php
// Pour contrôler le comportement d'un programme on utilise des conditions
// Ex: Si Maxime a plus de 15 ans alors on lui dit qu'il est vieux
$ageMaxime = 14;
if ($ageMaxime >= 15) { // Fait quelque chose si l'age de Maxime est plus grand ou égal à 15
    echo "Tu es vieux !";
} else { // Sinon, fait quelque chose d'autre
    echo "Tu es encore jeune !";
}

// On peut utiliser des conditions sur n'importe quel type de variable, p.ex.
$estVieux = true; // Valeur booléen
if ($estVieux) { // Est-ce que $estVieux est vrai ?
    echo "Tu es vieux";
} else {
    echo "Tu n'est pas vieux";
}
$monNom = "Sébastien";
if ($monNom === "Seb") { // Est-ce que $monNom est égal à Seb ?
    echo "Salut, Seb";
} else {
    echo "Salut, quelqu'un d'autre";
}
// Note : il n'est pas obligatoire d'utiliser le "else"


// Pour répéter une instruction plusieurs fois on utilise une boucle de contrôle :
for ($compteur = 0; $compteur < 10; $compteur++) { // Le compteur commence à 0, la boucle s'arrête quand le compteur arrive à 10, le compteur est incrémenté (+1) à chaque tour de boucle
    echo "Ligne numéro " . $i; // -->> affiche ligne numéro 0, ligne numéro 1, ligne numéro 2, etc
}




