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
}
?>
