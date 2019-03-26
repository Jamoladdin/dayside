<?php 
/**
 * 
 */
class Index  extends Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function index() {
		$this->view->render('/index/index');
	}

	public function list($page = 1){
		$data = $this->model->list($page);
		$this->view->render('/index/list', $data);
	}

	public function form(){
		$this->view->render('/index/form');
	}

	public function create(){
		$this->model->create();
	}
}
?>
