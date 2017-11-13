Voici la version avec un autoload maison.

Pour que notre code fonction, nous allons rajouté le fichier autoload.php qui contient deux parties.

* La premiére partie est un fonction qu'on a décidé d'appeller autoload. Elle contient comme parametre $classname qui correspond au namespace de la class. 
Elle a pour effet de retirer la premiere partie du namespace, ici App, puis de remplacer les \ en / pour avoir un chemin de type Unix. On concatene la contante __DIR__  le dossier principal ( sr/ dans notre cas) et le resultat afin d'obtenir  le nom complet du fichier. 
Si le fichier exist, et donc notre class aussi, on require le fichier pour permettre d'utilisé notre class dans le reste de notre code.

* La deuxième partie est l'utilisation de la fonction native PHP, spl_autoload_register. Il s'agit d'une fonction permettant d'avoir plusieur autoloaders, utilie quand on utilise plusieurs librairie ou namespace. On passe simplement notre fonction en parametre et PHP s'occupe du reste.

Il ne nous reste plus qu'à require le fichier autoload.php afin de pouvoir l'utiliser.
