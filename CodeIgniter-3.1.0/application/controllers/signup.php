<?php
class Signup extends CI_Controller{
	
	public function load(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['content'] = 'signup_page';
		$this->load->view('includes/template', $data);
	} //Ends load function
	
	public function create_user(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('firstname', 'Name', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		
		if($this->form_validation->run() == FALSE){
			$this->load();
		}else{
			$this->load->model('new_users');
			if($query = $this->new_users->create_user()){
				redirect('signin/load');
			}else{
				$data['main_content'] = 'Username already exists!';
				$this->load->view('signup_form', $data);
			}
		}
	} //Ends Create Member Function	
}
?>