<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Libs\Console;

require_once('vendor/autoload.php');

class FormMaker {
	private $formName;
	
	public function getFormName() {
		return $this->formName;
	}
	
	public function setFormName($formName) {
		return $this->formName = $formName;
	}
	
	public function getFormContent($getForm) {
		return "<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Forms;

require_once('vendor/autoload.php');

use Styletools\Libs\FormBuilder;

class ".trim($getForm)."Form {
	/**
	 * This method is a form example
	 */
	public static function addForm() {
		\$formBuilder = new FormBuilder();
		\$form = \$formBuilder->startForm().''.
		\$form = \$formBuilder->newInput('text', 'username', '', array('placeholder' => 'Nom')).''.
		\$form = \$formBuilder->newInput('email', 'email', '', array('placeholder' => 'Adresse e-mail')).''.
		\$form = \$formBuilder->newInput('password', 'pass', '', array('placeholder' => 'Mot de passe')).''.
		\$form = \$formBuilder->newInput('submit', 'submit', 'S\'inscrire', array('class' => 'btn bc_blue')).''.
		\$form = \$formBuilder->endForm();
		
		return \$form;
	}
}
";
	}
}