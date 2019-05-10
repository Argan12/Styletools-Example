<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Models;

require_once('vendor/autoload.php');

use \Styletools\Libs\CrudBuilder;

class RegistrationManager {	
	public function registration($username, $email, $pass) {
		$crudBuilder = new CrudBuilder();
		
		$addUser = $crudBuilder->insert(
			'user', 
			array(
				'username' => $username, 
				'email' => $email, 
				'pass' => $pass
			)
		);
		
		return $addUser;
	}
}
