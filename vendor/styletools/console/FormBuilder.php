<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Libs\Console;

require_once('vendor/autoload.php');

use Styletools\Libs\Console\FormMaker;

class FormBuilder {
	public function writeFormClass() {
		$formMaker = new FormMaker();
		
		$stdin = fopen('php://stdin', 'r');			
		$form = $formMaker->setFormName(fgets($stdin));		
		$getForm = $formMaker->getFormName();
		
		if (trim($getForm) != null)
		{
			$filename = './src/forms/'.trim($getForm).'Form.php';
			
			if (!file_exists($filename))
			{
				$newForm = fopen('./src/forms/'.trim($getForm).'Form.php', "w+");
				$formContent = $formMaker->getFormContent($getForm);
				fwrite($newForm, $formContent);
				fclose($newForm);
		
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