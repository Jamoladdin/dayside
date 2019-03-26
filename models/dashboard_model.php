<?php 

/**
 * 
 */
class Dashboard_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index($page)
	{
		$sth = $this->db->prepare('SELECT COUNT(id) FROM tasks');
		$sth->execute();

		$data = $sth->fetch();
		$paginationSize = (int)($data[0]/3);
		if($data[0]%3 != 0) $paginationSize++;

		Session::init();
		if (!isset($_POST['select_sort2']) && Session::get('select_sort2') == null) {
			Session::set('select_sort2', 'name');
		} else if(isset($_POST['select_sort2'])){
			Session::set('select_sort2', $_POST['select_sort2']);
		}
		$sth2 = $this->db->prepare('SELECT * FROM tasks ORDER BY '.Session::get('select_sort2'));

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

	public function form($id)
	{
		$sth= $this->db->prepare("SELECT * FROM tasks WHERE id = :id");
		$sth->execute(array(
			':id' => $id,
		));

		$data = $sth->fetchAll();

		return $data;
	}

	public function update()
	{
		$sth= $this->db->prepare("UPDATE tasks SET text=:text, status=:status WHERE id = :id");
		$sth->execute(array(
			':id' => $_POST['id'],
			':text' => $_POST['text'],
			':status' => $_POST['status'],
		));

		header('location: ../dashboard/index');
	}

}

?>
