<?php

/*!
 * Styletools 1.4
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Libs;

class StylesFactory {
	public static function getNavicon() {
		return "
			<div class=\"navicon\" onclick=\"naviconTransition(this)\">
				<div class=\"bar1\"></div>
				<div class=\"bar2\"></div>
				<div class=\"bar3\"></div>
			</div>
		";
	}
	
	public static function displayModalBox() {
		return "
			onclick=\"document.getElementById('modal_box').style.display='block'\"
		";
	}
	
	public static function getModalBox($modalTitle, $modalContent) {
		return "
			<div id=\"modal_box\" class=\"modal_box\">
				<div class=\"modal_box_content box_animate_top box_card_4\">
					<header class=\"modal_box_content\" id=\"box_teal\">
						<span onclick=\"document.getElementById('modal_box').style.display='none'\" class=\"box_button box_display_topright\">&times;</span>
						<h2>$modalTitle</h2>
					</header>
					<div class=\"box_container\">
						<p>$modalContent</p>	
						<div class=\"btn bc_transition\" onclick=\"document.getElementById('modal_box').style.display='none'\">Close</div>
					</div>
					<footer class=\"modal_footer box_container\" id=\"box_teal\">
						<p style=\"visibility:hidden\">.</p>
					</footer>
				</div>
			</div>
		";
	}

	public static function getDropdownMenu(array $links) {
		$nav = '';
		
		foreach ($links as $gateways)
		{
			$nav .= "<li class=\"bc_transition\"><a href=\"#\">$gateways</a></li>";
		}
		
		return "
			<div class=\"dropdown_menu\">
				<ul class=\"dropdown_menu_gateways\">$nav</ul>
			</div>
		";
	}
	
	public static function getVerticalNavbar($links) {
		$nav = '';
		
		foreach ($links as list($gateways, $href))
		{
			$nav .= "<li><a href=\"$href\" class=\"bc_transition\">$gateways</a></li>";
		}
		
		return "
			<nav class=\"vertical_navbar\">
				<ul class=\"dropdown_menu_gateways\">
					$nav
				</ul>
			</nav>
		";
	}
	
	public static function getProgressBar() {
		return "
			<div class=\"bar\">
				<div class=\"percentage has-tip\" data-perc=\"50%\" style=\"width:50%\"></div>
			</div>
		";
	}
}