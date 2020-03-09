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
		$data['idUser'] = $this->input->get('idUser');
			// print_r($data['test'][0]->name);
		$this->load->view('test.php',$data);
	}
	public function select()
	{
			$this->load->model('User_model');
			$data['result_test'] = $this->User_model->get_result_for_user($this->input->post('idUser'));
			$data['user_info'] = $this->User_model->get_user_info($this->input->post('idUser'));
			$data['idUser'] = $this->input->post('idUser');
			$this->load->view('category.php',$data);
			//print_r($data['user_info']);
	}
	public function testValidate()
	{
		$countTrueAnswer = 0;
		$test2 = $this->input->post();
		$this->load->model('User_model');
		$test = $this->User_model->select_test($this->input->get('idTest'));
		for ($i=0; $i < count($test) ; $i++) {
				if($test[$i]->correct_answer == $test2[$i]){
					$countTrueAnswer++;
				}

		}
		$this->User_model->inserResult($this->input->get('idTest'),$this->input->get('idUser'),$countTrueAnswer,count($test));
		echo $countTrueAnswer;

	}
}

?>
