<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Libs\Components;

class HttpRequest {
	public function method() {
		return $_SERVER['REQUEST_METHOD'];
	}
	
	public function requestURI() {
		return $_SERVER['REQUEST_URI'];
	}
}