<?php

/*!
 * Styletools 1.4
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Libs;

class FilesLoader {
	public static function load($ext, $filename) {
		$dir = dirname($_SERVER["PHP_SELF"]);
		
		$css = "<link rel=\"stylesheet\" href=\"$dir/src/web/css/$filename.$ext\"  />";
		$javascripts = "<script src=\"$dir/src/web/js/$filename.$ext\"></script>";
	
		if ($ext == 'js')
		{
			return $javascripts;
		} else if ($ext == 'css') {
			return $css;
		}
	}
	
	public static function styletoolsComponents($ext, $filename) {
		$dir = dirname($_SERVER["PHP_SELF"]);
		
		$css = "<link rel=\"stylesheet\" href=\"$dir/dist/css/$filename.min.$ext\"  />";
		$javascripts = "<script src=\"$dir/dist/js/$filename.min.$ext\"></script>";
		
		if ($ext == 'js')
		{
			return $javascripts;
		} else if ($ext == 'css') {
			return $css;
		}
	}
}