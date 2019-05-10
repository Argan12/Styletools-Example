<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Libs;

class FormBuilder {
	private $xhtml;
    
    public function __construct($xhtml = true) {
     	 $this->xhtml = $xhtml;
    }
	
	public function startForm($action = '#', $method = '', $attr = array()) {
		$formTag = "<form action=\"$action\" method=\"$method\"";
		
		if ($attr)
		{
			$formTag .= $this->attr($attr) . '>';
		} else {
			$formTag .= '>';
		}
		
		return $formTag;
	}
	
	private function attr($attr) {
		$formTag = '';
		
        $min_atts = array('checked', 'disabled', 'readonly', 'multiple', 'required', 'autofocus', 'novalidate', 'formnovalidate');
				
        foreach($attr as $key => $val) 
		{
            if (in_array($key, $min_atts)) 
			{
                if (!empty($val)) 
				{ 
                    $formTag .= $this->xhtml? " $key=\"$key\"": " $key";
                }
            } else {
                $formTag .= " $key=\"$val\"";
            }
        }
        return $formTag;
	}
	
	public function newInput($type, $name, $value = '', $attr = array()) {
		$formTag = "<input type=\"$type\" name=\"$name\"";
		
		if (!empty($value))
		{
			$formTag .= " value=\"$value\"";
		}
		
		if ($attr) {
			$formTag .= $this->attr($attr) . ' required>';
		} else {
			$formTag .= '  />';
		}
		
		return $formTag;
	}
	
	public function newTextarea($name, $cols = '', $rows = '', $value = '', $attr = array()) {
		$formTag = "<textarea name =\"$name\"";
		
		if (!empty($cols) && !empty($rows))
		{
			$formTag .= " cols=\"$cols\" rows=\"$rows\"";
		}
		
		if ($attr)
		{
			$formTag .= $this->attr($attr) . '>';
		} else {
			$formTag .= 'required>';
		}
		
		if (!empty($value))
		{
			$formTag .= "$value</textarea>"; 
		} else {
			$formTag .= '</textarea>';	
		}
		
		return $formTag;
	}

	public function newLabel($for, $label) {
		$formTag = "<label for=\"$for\">$label</label>";
		
		return $formTag;		
	}
	
	public function endForm() {
		return '</form>';
	}
}