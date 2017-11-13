Voici la version avec l'autoload de composer.

Pour que notre code fonction, nous allons rajouté le fichier composer.json. Celui ci est remplit uniquement des besions pour l'autoload.

Le contenu est le suivant :
Nous appellons autoload, puis nous signalons utilisé le PSR-4 puis nous listons nos namespaces de la facon suivantes :
"Namespace\\": "directory/"
Cela permet à composer de savoir que, dans notre cas, le namespace App\ correspond au dossier src/. Attention au / et \ obligatoire.

Pour créer l'autoload, nouos n'avons plus qu'à lancé la commande 
```composer dump-autoload```
Elle aura pôur efffet de créer un dossier vendor qui contiendra toutes les dépendances ainsi que le fichier autoload.php
Noter que si vous utiliser aussi composer pour ajouter des librairies et que vous faites la commande ```composer install|update``` cela aura le même effet.

Il ne nous reste plus qu'à require le fichier autoload.php de composer situé dans le dossier vendor qui a été créer afin de pouvoir l'utiliser.
