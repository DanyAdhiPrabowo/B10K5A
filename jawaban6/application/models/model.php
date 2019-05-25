<?php 

class Model extends CI_Model{


	public function get_all($table)
	{
		return $this->db->get($table);
	}

	public function get_by($table,$id, $where)
	{
		return $this->db->get_where($table, [$id=>$where]);
	}

	public function save($table,$data)
	{
		$this->db->insert($table, $data);
	}

	public function programmer()
	{
		$sql = $this->db->query( "SELECT `users`.*, GROUP_CONCAT(`skills`.`name`) as `skill` from `users` left join `skills` on `users`.`id`=`skills`.`user_id` GROUP BY `users`.`id` ");
		return $sql;
	}

}
 ?>