<?php

use App\Controller\Controller;

// Appel du fichier autoload
require 'autoload.php';

try{
	// Appel de la class avec le namespace complet
	$app = new App\App();

	// Appel de la class avec l'aide du use
	$controller = new Controller();

	// On var_dump les instances.
	var_dump($controller);
	var_dump($app);

} catch( \Exception $exception) {
	echo $exception->getMessage();
}
