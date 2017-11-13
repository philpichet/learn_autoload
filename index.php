<?php

use App\Controller\Controller;
use App\App;

// On appel l'autoloader de composer contenue dans le dossier vendor
require 'vendor/autoload.php';

// Appel de la class avec le namespace complet
$app = new App();
// Appel de la class avec l'aide du use
$controller = new Controller();

var_dump($controller);
var_dump($app);