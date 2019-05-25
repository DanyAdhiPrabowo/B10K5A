<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programmer extends CI_Controller {

	var $table		= 'users';


	function __construct(){
		parent::__construct();
		$this->load->model('model');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data = [
					'tampil'=> $this->model->programmer()->result()
				];
		$this->load->view('v_programmers',$data);
	}

	public function tambahSkill($id)
	{
		$id_skill = $id;
		$this->form_validation->set_rules('skill', 'Skill', 'required|rtrim');
		$post 	= $this->input->post();
		if ($this->form_validation->run()==true) {
				$data = [
							'id'		=>null,
							'name'		=>$post['skill'],
							'user_id'	=>$id_skill
						];
				$this->model->save('skills', $data);
				redirect('programmer');
		
		}else{

			redirect('programmer');
		}
	}

	public function tambahProgrammer()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|rtrim');
		$post 	= $this->input->post();
		if ($this->form_validation->run()==true) {
				$data = [
							'id'		=>null,
							'name'		=>$post['nama'],
						];
				$this->model->save($this->table, $data);
				redirect('programmer');
		
		}else{

			redirect('programmer');
		}
	}

}

/* End of file Programmer.php */
/* Location: ./application/controllers/Programmer.php */