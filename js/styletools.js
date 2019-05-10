/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

/*** Display dropdown menu ***/
	$('.navicon').click(function() {
		$('.dropdown_menu').slideToggle("slow");
		});
	
/* Display dropdown menu horizontal animation */
	$('.vertical_dropdown_menu').click(function() {
		$('#dropdown_menu_horizontal_animation').animate({width:'toggle'});
		});
		
/* Display dropdown menu vertical animation */
	$('.navicon').click(function() {
		$('.vertical_navbar').animate({width:'toggle'});
		});

/*** Navicon transition ***/
	function naviconTransition(x) {
		x.classList.toggle("change");
	}
	
/*** Copyright ***/
	var copyrightYear = new Date();
	var displayYear = copyrightYear.getFullYear();
		
	document.getElementsByClassName("copyright")[0].innerHTML = displayYear;

/*** Progress bar ***/
	(function () {
		var $bar, perc, start, update;
		
		$bar = $('.percentage');
		perc = 0;
		
		update = function () {
			$bar.css("width", perc + '%');
			$bar.attr("perc", Math.floor(perc) + '%');
			perc += 0.2;
		
			if (Math.floor(perc) === 5) {
				$bar.addClass('active')
			}
			
			if (Math.floor(perc) === 95) {
				$bar.removeClass('active')
			}
			
			if (perc >= 85) {
				return perc = 85
			}
		};
		
		start = function () {
			var run;
				
			return run = setInterval(update, 10)
		};

		start()
	})

	.call(this)
	
/*** Display your age ***/
 	var birthdate = new Date("1997/5/29"); /* Replace by your birthdate ! */
	var now = new Date();
	var diff = now - birthdate;
	var age = Math.floor(diff/31536000000);
	
	document.getElementById("age").innerHTML = age;