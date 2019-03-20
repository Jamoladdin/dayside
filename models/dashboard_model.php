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

	public function index()
	{
		$sth = $this->db->prepare('SELECT * FROM tasks');
		$sth->execute();
		
		$data = $sth->fetchAll();

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
		// $data = [
		//     'title' => $_POST['title'],
		//     'status' => $_POST['status'],
		//     'text' => $_POST['text'],
		//     'id' => $_POST['id'],
		// ];
		// print_r($data);die();
		$sth= $this->db->prepare("UPDATE tasks SET title=:title, text=:text, status=:status WHERE id = :id");
		$sth->execute(array(
			':id' => $_POST['id'],
			':title' => $_POST['title'],
			':text' => $_POST['text'],
			':status' => $_POST['status'],
		));

		header('location: http://mvcpure/dashboard/index');
	}

}

?>