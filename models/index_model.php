<?php 

class Index_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function list($page) {
		$sth = $this->db->prepare('SELECT COUNT(id) FROM tasks');
		$sth->execute();

		$data = $sth->fetch();
		$paginationSize = (int)($data[0]/3);
		if($data[0]%3 != 0) $paginationSize++;

		Session::init();
		if (!isset($_POST['select_sort']) && Session::get('select_sort') == null) {
			Session::set('select_sort', 'name');
		} else if(isset($_POST['select_sort'])){
			Session::set('select_sort', $_POST['select_sort']);
		}
		$sth2 = $this->db->prepare('SELECT * FROM tasks ORDER BY '.Session::get('select_sort'));

		$sth2->execute();

		$tasks = $sth2->fetchAll();

		$pages = ($page-1)*3;

		$task = [];
		for($i=$pages; $i<$pages+3 && $i<$data[0]; $i++){
			$task[] = $tasks[$i];
		}

		$data = array(
			'paginationSize' => $paginationSize,
			'task' => $task,
			'page' => $page
		);
		return $data;
	}

	public function create() {
		$sth = $this->db->prepare('INSERT INTO tasks (name, email, text) VALUES (:name, :email, :text)');
		$sth->execute(array(
			':name' => $_POST['name'],
			':email' => $_POST['email'],
			':text' => $_POST['text'],
		));
		
		header('location: ../index/list');
	}
}

?>
