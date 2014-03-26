<?php
if (!function_exists('dbug'))
{

	/**
	 * Outputs colored and structured tabular variable information.
	 * 
	 * Variable types supported are: Arrays, Classes/Objects, Database and XML 
	 * Resources.
	 * 
	 * @param type $var
	 */
	function dbug($var)
	{
		$CI = & get_instance();

		$CI->load->library('dbug');

		$CI->dbug->dbug_init($var);
	}

}