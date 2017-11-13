<?php

use App\Controller\Controller;

// Appel de la class avec le namespace complet
$app = new App\App();
// Appel de la class avec l'aide du use
$controller = new Controller();

var_dump($controller);
var_dump($app);