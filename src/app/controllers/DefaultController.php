<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Controllers;

require_once('vendor/autoload.php');

use Styletools\Libs\Controller\Controller;
use Styletools\Styles\StylesContainer;

class DefaultController extends Controller {
	public function indexAction() {
		$stylesheets = StylesContainer::addStylesheets();
		$navicon = StylesContainer::addNavicon();
		$modal = StylesContainer::addModal('What is Styletools ?', 'Styletools is a little CSS and MVC PHP Framework I developped for my personnal needs.');
		$modalLink = StylesContainer::addModalLink();
		
		echo $this->render('default/index.html.twig', [
			'stylesheets' => $stylesheets,
			'navicon' => $navicon,
			'modal' => $modal,
			'modalLink' => $modalLink
		]);
	}
}