<?php 

/**
 * 
 */
class Index_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function list() {
		$sth = $this->db->prepare('SELECT * FROM tasks');
		$sth->execute();

		$data = $sth->fetchAll();
		return $data;
	}

	public function create() {
		$sth = $this->db->prepare('INSERT INTO tasks (title, text) VALUES (:title, :text)');
		$sth->execute(array(
			':title' => $_POST['title'],
			':text' => $_POST['text'],
		));
	}
}

?>