<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Libs\Console;

require_once('vendor/autoload.php');

use Styletools\Libs\Console\ControllerMaker;

class ControllerBuilder {

	public function writeController() {
		$controllerMaker = new ControllerMaker();
		
		$stdin = fopen('php://stdin', 'r');			
		$controller = $controllerMaker->setControllerName(fgets($stdin));		
		$getController = $controllerMaker->getControllerName();
		
		if (trim($getController) != null)
		{
			$filename = './src/app/controllers/'.trim($getController).'Controller.php';
			
			if (!file_exists($filename))
			{
				$newController = fopen('./src/app/controllers/'.trim($getController).'Controller.php', "w+");
				$controllerContent = $controllerMaker->getControllerContent($getController);
				fwrite($newController, $controllerContent);
				fclose($newController);
		
				fclose($stdin);
				
				return 'success';
			} else {
				return 'file_exists';
			}
		} else {
			return 'error';
		}
	}
}