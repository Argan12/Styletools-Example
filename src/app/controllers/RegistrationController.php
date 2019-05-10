<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Controllers;

require_once('vendor/autoload.php');
	
use Styletools\Libs\Components\HttpRequest;
use Styletools\Libs\Components\Validation;
use Styletools\Libs\Controller\Controller;
use Styletools\Styles\StylesContainer;
use Styletools\Forms\UserForm;
use Styletools\Models\RegistrationManager;
	
class RegistrationController extends Controller {
	public function registerAction() {
		$request = new HttpRequest();
		$stylesheets = StylesContainer::addStylesheets();
		$navicon = StylesContainer::addNavicon();
		$modal = StylesContainer::addModal('What is Styletools ?', 'Styletools is a little CSS and MVC PHP Framework I developped for my personnal needs.');
		$modalLink = StylesContainer::addModalLink();
		$form = new UserForm();
		
		$userForm = $form->addForm();
		
		if ($request->method() == 'POST')
		{
			$registrationManager = new RegistrationManager();
			$hash = new Validation();
			$addUser = $registrationManager->registration($_POST['username'], $_POST['email'], $hash->passwordEncode($_POST['pass']));
			$this->redirect('/Styletools-Example');
		}
		
		echo $this->render('registration/register.html.twig', [
			'stylesheets' => $stylesheets,
			'navicon' => $navicon,
			'modal' => $modal,
			'modalLink' => $modalLink,
			'userForm' =>$userForm
		]);
	}	
}
