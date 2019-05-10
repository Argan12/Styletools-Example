<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Styles;

require_once('vendor/autoload.php');

use Styletools\Libs\FilesLoader;
use Styletools\Libs\StylesFactory;

class StylesContainer {
	public static function addStylesheets() {
		$stylesheets = array(
			FilesLoader::load('css', 'main')
		);
		
		return $stylesheets;
	}
	
	public static function addNavicon() {
		$navicon = StylesFactory::getNavicon();
		
		return $navicon;
	}
	
	public static function addModalLink() {
		$modalLink = StylesFactory::displayModalBox();
		
		return $modalLink;
	}
	
	public static function addModal($title, $content) {
		$modal = StylesFactory::getModalBox($title, $content);
		
		return $modal;
	}
}