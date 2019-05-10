<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Libs\Console;

require_once('vendor/autoload.php');

class ControllerMaker {
	private $controllerName;
	
	public function getControllerName() {
		return $this->controllerName;
	}

	public function setControllerName($controllerName) {
		return $this->controllerName = $controllerName;
	}
	
	public function getControllerContent($getController) {
		return "<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Controllers;

require_once('vendor/autoload.php');
	
use Styletools\Libs\Controller\Controller;
use Styletools\Styles\StylesContainer;
	
class ".trim($getController)."Controller extends Controller {
	public function indexAction() {
		\$stylesheets = StylesContainer::addStylesheets();
		
		echo \$this->render('default/index.html.twig', [
			'stylesheets' => \$stylesheets
		]);
	}	
}
";
	}
}
