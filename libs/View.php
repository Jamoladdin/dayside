<?php 

/**
 * 
 */
class View
{
	
	function __construct()
	{
		// echo 'Main View' . '<br />';	
	}

	public function render($name, $data = null)
	{
		require 'views/header.php';
		require 'views/' . $name . '.php';
		require 'views/footer.php';
	}
}

 ?>