<?php 

/**
 * 
 */
class Login  extends Controller
{
	
	function __construct()
	{
		parent:: __construct();
		// echo 'We are in Login controller';
	}

	public function index() {
		$this->view->render('login/index');
	}
	
	public function run() {
		$this->model->run();
		$this->view->render('dashboard/index');
	}
}

 ?>