<?php
class Signin extends CI_Controller{
	
	public function load(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('signin_page');
	} //Ends Load Function
	
	public function signin_validation(){
		$this->load->library('formvalidation');
		$this->form_validation->set_rules('username', 'Username', 'required|callback_validate_user');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');
		
		if($$this->form_validation->run()){
			$data = array(
				'username' =>$this->input->post('username'),
				'is_signedin' =>1
			);
			$this->session->set_userdata($data);
			if($this->session->userdata('is_signedin')){
				redirect('Welcome/index');
			}else{
				redirect('signin/load');
				echo "Please Try Again";
			} //Ends If Else Statement
		} //Ends if Statement
	} //Ends signin_validation Function
	
	public function username_good($requested_username){
		$this->load->model('users');
		$this->load->library('form_validation');
		$username_avail = $this->users->username_good($_POST['username']);
		
		if($username_avail > 0){
			$this->load->helper('url');
			$this->load->view('home_page');
		}else{
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->view('signin_page');
			echo "Oop! That wasn't quite right. Please try again"; 
		} //Ends If Else Statement
	} //Ends Username Good Function
	
	
	
	
	
} //Ends Signin Function
?>