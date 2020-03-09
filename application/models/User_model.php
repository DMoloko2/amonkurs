<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User_model extends CI_Model {

		public function get_users()
  {
    $this->load->database();
     $result = $this->db->query("SELECT id_people,rank, fio FROM users")->result();
     return $result;
  }
  public function select_test($category)
  {
    $this->load->database();
     $result = $this->db->query("SELECT * FROM test.test, test.question where question.category = '$category'  and test.id_test = '$category'")->result();
     return $result;
  }
	public function inserResult($id_qeston,$id_user,$number_right,$number_all)
	{
	  $this->load->database();
		$result = $this->db->query("INSERT INTO test.result (id_qestion, id_user,number_right, number_all) VALUES ('$id_qeston','$id_user', '$number_right', '$number_all')");
	}
	public function get_result_for_user($id)
	{
		$this->load->database();
		$result = $this->db->query("SELECT * FROM result where id_user = '$id'  ORDER BY data DESC LIMIT 3")->result();
		return $result;
	}
	public function get_user_info($id)
	{
		$this->load->database($id);
		$result = $this->db->query("SELECT * FROM users where id_people = '$id'")->result();
		return $result;
	}
}

?>
