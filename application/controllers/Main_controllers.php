<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controllers extends CI_Controller {
	public function index()
	{
		$this->load->model('User_model');
		$data['users'] = $this->User_model->get_users();
		$this->load->view('login.php',$data);
	}
	public function showtest()
	{
		$this->load->model('User_model');
		$test = $this->User_model->select_test($this->input->get('idCategory'));
		foreach ($test as $key) {
			$arr[0] = $key->correct_answer;
			$arr[1] = $key->answer_1;
			$arr[2] = $key->answer_2;
			shuffle($arr);
			$key->correct_answer = $arr[0];
			$key->answer_1 = $arr[1];
			$key->answer_2 = $arr[2];
		}
		//print_r($test);
		$data['test'] = $test;
			// print_r($data['test'][0]->name);
		$this->load->view('test.php',$data);
	}
	public function select()
	{
			$data['idUser'] = $this->input->post('idUser');
			$this->load->view('category.php',$data);
	}
}
?>
