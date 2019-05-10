<?php

/*!
 * Styletools 1.4
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Libs\Router;

require_once('vendor/autoload.php');

use \Styletools\Libs\Router\Route;
use \Styletools\Libs\FilesLoader;

class Router {
	private $url;
	private $routes = [];
	private $namedRoutes = [];
	
	public function __construct($url) {
		$this->url = $url;
	}
	
	public function get($path, $callable, $name = null) {
		return $this->add($path, $callable, $name, 'GET');
	}
	
	public function post($path, $callable, $name = null) {
		return $this->add($path, $callable, $name, 'POST');
	}
	
	public function add($path, $callable, $name, $method) {
		$route = new Route($path, $callable);
		$this->routes[$method][] = $route;
		
		if (is_string($callable) && $name === null) {
			$name = $callable;
		}
		
		if ($name) {
			$this->namedRoutes[$name] = $route;
		}
		
		return $route;
	}
	
	public function run() {
		$loader = new \Twig_Loader_Filesystem('src/app/views');
		$twig = new \Twig_Environment($loader, [
			'cache' => false,
		]);
		
		$stylesheets = array(
			FilesLoader::load('css', 'main')
		);
		
		if (!isset($this->routes[$_SERVER['REQUEST_METHOD']]))
		{
			throw new \Exception('REQUEST_METHOD does not exist');
		}
		
		foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route)
		{
			if ($route->match($this->url))
			{
				return $route->call();
			}
		}
		
		echo $twig->render('error/404.html.twig', [
			'stylesheets' => $stylesheets
		]);
	}
	
	public function url($name, $params = []) {
		if (!isset($this->namedRoutes[$name]))
		{
			throw new \RouterException('No route matches this name');
		}
		
		return $this->namedRoutes[$name]->getUrl($params);
	}
}