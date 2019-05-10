<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Libs\Controller;

require_once('vendor/autoload.php');

class Controller {
	public function redirect($location) {
		header('Location:'.$location);
		exit;
	}
	
	public function redirectToRoute() {
		
	}
	
	public function pageNotFound() {
		
	}
	
	public function sessionStart() {
		return session_start();
	}
	
	public function sessionDestroy() {
		session_start();
		$_SESSION = array();
		
		if (ini_get('session.use_cookies'))
		{
			$params = session_get_cookie_params();
			setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
		}
		
		session_destroy();
	}
		
	public function setCookie($name, $value = '', $expire = 0, $path = null, $domain = null, $secure = false, $httpOnly = true) {
		setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
	}
	
	public function render($path, $options = '') {
		$loader = new \Twig_Loader_Filesystem('src/app/views');
		$twig = new \Twig_Environment($loader, [
			'cache' => false,
		]);
		
		return $twig->render($path, $options);
	}
}