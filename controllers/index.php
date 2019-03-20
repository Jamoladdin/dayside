<?php 

/**
 * 
 */
class Index  extends Controller
{
	
	function __construct()
	{
		parent:: __construct();
		// echo 'We are in Index controller';
	}

	public function index() {
		$this->view->render('index/index');
	}

	public function list(){
		$data = $this->model->list();
		$this->view->render('index/list', $data);
	}

	public function form(){
		$this->view->render('index/form');
	}

	public function create(){
		$this->model->create();
		self::list();
	}
}

 ?>