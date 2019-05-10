<?php

/*!
 * Styletools 1.4
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Libs;

class User {
	public function isAuthenticated() {
		return ($_SESSION == true);
	}
}