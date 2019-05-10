<?php

namespace Styletools\Libs\Components;

class Validation {
	public function passwordEncode($plainPassword) {
		$passwordEncode = PASSWORD_HASH($plainPassword, PASSWORD_DEFAULT);
		
		return $passwordEncode;
	}
}