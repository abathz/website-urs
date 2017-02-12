<?php
/**
 * Class ssliderDefault
 * @author Haris
 */
Class ssliderDefault
{
	// ssliderDefault::slide
	public static function slide($options = array(),$group = false) {
		$default = apply_filters('sangar_slider_default_options_slide',array());
		$options = is_array($options) ? $options : array();

		if(! defined('SSLIDER_CURRENT_ADDON') && $group) 
		{
			if(isset($default[$group])) {
				return array_merge($default[$group],$options); // frontend
			}
			else return false;			
		} 
		else {
			return array_merge($default,$options);
		}
	}

	// ssliderDefault::config
	public static function config($options = array(),$group = false) {
		$default = apply_filters('sangar_slider_default_options_config',array());
		$options = is_array($options) ? $options : array();
		
		if(! defined('SSLIDER_CURRENT_ADDON') && $group) 
		{
			if(isset($default[$group])) {
				return array_merge($default[$group],$options); // frontend
			}
			else return false;
		} 
		else {
			return array_merge($default,$options);
		}
	}
}

