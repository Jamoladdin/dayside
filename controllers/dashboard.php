<?php 

/**
 * 
 */
class Dashboard extends Controller
{
	
	function __construct()
	{
		parent:: __construct();
		// echo 'We are in Login controller';
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location: ../login');
			exit();
		}
	}

	public function index() {
		$data = $this->model->index();
		$this->view->render('dashboard/index', $data);
	}

	public function form($id = null) {
		$data = $this->model->form($id);
		$this->view->render('dashboard/form', $data);
	}

	public function update() {
		$this->model->update();
		// $this->view->render('dashboard/index');
	}

	public function logout() {
		Session::destroy();
		header('location: ../login');
		exit();
	}
}

 ?>