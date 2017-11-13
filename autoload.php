<?php 

// Fonction autoload
function autoloader($classname) {

	// $classname contient le namespace complet de la class
	// e.g App\Controller\Controller

	// On recupere la position du premier \ +1 qui correspond au début de l'emplacement la class
	$lastSlash = strpos($classname, '\\'); 
	
	// On enleve le premier namespace qui ne correspond pas au dossier principal( src/)
	$classname = substr($classname, $lastSlash); 

	// On enleve le premier namespace qui ne correspond pas au dossier principal( src/)
	$directory = str_replace('\\', '/', $classname);
	
	// on construit le chemin complet et on ajoute l'extension
	$filename = __DIR__ . '/src' . $directory . '.php'; 
	

	// Si le fichier exist on le require.
	if(file_exists($filename)){
		require $filename;
	}

}

// On ajoute notre autoloade à la liste possible d'autoloader
spl_autoload_register('autoloader');