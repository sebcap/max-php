<?php
// Pour séparer la logique des différents modules/éléments de code, on peut créer des "objets"
// Un objet en PHP est un bout de code INDEPENDANT du reste du programme et qui est responsable d'effectuer des opérations spécifiques à cet objet
// L'approche "par objet" est très importante lorsque le programme devient complexe car il permet de séparer la logique du code dans des endroits précis
// Par exemple dans le code d'un jeu on pourrait avoir un objet qui représente le joueur et d'autres qui représentent les ennemis
// En général, chaque objet est codé dans un fichier PHP séparé et appelé avec le nom de l'objet (p.ex. joueur.php) mais pour ce tuto on va tous les mettre dans ce fichier


// On défini un objet "Joueur" avec quelques propriétés (càd variables) et méthodes (càd fonctions).
class Joueur // C'est une bonne habitude de mettre une majuscule au nom des objets
{
    protected $monNom = "Maxime";

    public function disMonNom() // Cette fonction est PUBLIQUE, càd qu'elle pourra être appelée par d'autres objets du programme
    {
        echo "Je m'appele " . $this->monNom; // Le mot-clé "this" (TRRRRRRÈS IMPORTANT) permet de faire référence au contexte de la fonction, dans ce cas il s'agit de l'objet Joueur
    }
    public function arreteJeu()
    {
        $this->harakiri();
    }
    private function harakiri() // Cette fonction est PRIVÉE, càd que seul l'objet Joueur pourra l'appeler
    {
        echo "Banzaaaaaaaaaaaaiiiiiii";
        echo $this->monNom . " est mort, game over";
    }
}

// Et un autre objet "Ennemi"
class Ennemi
{
    public function attaqueJoueur()
    {
        echo "Je dois attaquer le joueur !";
    }
}


// Maintenant on peut "instancier" ces objets autant de fois que nécessaire.
// Ici on veut 1 joueur et 12 ennemis
$monJoueur = new Joueur();
$monJoueur->disMonNom();
$monJoueur->harakiri(); // Ceci ne fonctionnera pas car la fonction "harakiri" est PRIVÉE et ne peut être appelée que par l'objet Joueur lui-même
$monJoueur->arreteJeu();
// On fait une boucle pour instancier 12x l'objet Ennemi
for ($i = 0; $i < 12; $i++)
{
    $ennemi = new Ennemi();
    $ennemi->attaqueJoueur();
}

