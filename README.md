Voici la version avec un autoload maison.

Pour que notre code fonction, nous allons rajouter le fichier autoload.php qui contient deux parties.

* La première partie est une fonction qu'on a décidé d'appeler autoload. 
Elle contient comme paramètre $classname qui correspond au namespace de la classe. 
Elle a pour effet de retirer la premiere partie du namespace, ici App
Puis de remplacer les \ en / pour avoir un chemin de type Unix. 
On concatène la constante __DIR__, le dossier principal ( sr/ dans notre cas) et le résultat afin d'obtenir  le nom complet du fichier. 
Si le fichier existe, et donc notre classe aussi, on fait un require sur le fichier pour permettre d'utiliser notre classe dans le reste de notre code.

* La deuxième partie est l'utilisation de la fonction native PHP, spl_autoload_register. 
Il s'agit d'une fonction permettant d'avoir plusieur autoloaders, utile quand on utilise plusieurs librairie ou namespace. 
On passe simplement notre fonction en paramètre et PHP s'occupe du reste.

Il ne nous reste plus qu'à require le fichier autoload.php afin de pouvoir l'utiliser.
