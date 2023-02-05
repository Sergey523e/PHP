<?php

namespace Core;

	error_reporting(E_ALL);    
	ini_set('display_errors', 'on');

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/connection.php';
   
	spl_autoload_register(function($class) {
		preg_match('#(.+)\\\\(.+?)$#', $class, $match);
		
		$nameSpace = str_replace('\\', DIRECTORY_SEPARATOR, strtolower($match[1]));
		$className = $match[2];
		
		$path = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . $nameSpace . DIRECTORY_SEPARATOR . $className . '.php';
		
		if (file_exists($path)) {
			require_once $path;
			
			if (class_exists($class, false)) {
				return true;
			} else {
				throw new \Exception("Класс $class не найден в файле $path.");
			}
		} else {
			throw new \Exception("Для класса $class не найден файл $path.");
		}
	});

	$routes = require $_SERVER['DOCUMENT_ROOT'] . '/config/routes.php';
	
//	$router = new Router();	
//  $track  = $router->getTrack($routes, $_SERVER['REQUEST_URI']);
$track = ( new Router ) -> getTrack($routes, $_SERVER['REQUEST_URI']);
    
//$dispatcher=new Dispatcher;
//$page  = $dispatcher-> getPage($track);
$page  = ( new Dispatcher ) -> getPage($track);

//$view=new View;
//echo $view -> render($page);  
echo (new View) -> render($page); 
?>