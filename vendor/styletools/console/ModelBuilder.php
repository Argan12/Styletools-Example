<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Libs\Console;

require_once('vendor/autoload.php');

use Styletools\Libs\Console\ModelMaker;

class ModelBuilder {
	public function writeManager() {
		$modelMaker = new ModelMaker();
		
		$stdin = fopen('php://stdin', 'r');			
		$model = $modelMaker->setModelName(fgets($stdin));		
		$getModel = $modelMaker->getModelName();
		
		if (trim($getModel) != null)
		{
			$filename = './src/app/models/'.trim($getModel).'Manager.php';
			
			if (!file_exists($filename))
			{
				$newModel = fopen('./src/app/models/'.trim($getModel).'Manager.php', "w+");
				$modelContent = $modelMaker->getModelContent($getModel);
				fwrite($newModel, $modelContent);
				fclose($newModel);
		
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