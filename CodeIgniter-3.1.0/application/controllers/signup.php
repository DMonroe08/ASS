<?php
class Signup extends CI_Controller{
	
	public function load(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->view('signup_page');
	} //Ends load function
	
	public function create_user(){
		$this->load->view('signup_page');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|ma_length[10]|callback_username_avail' );
		
		if($this->form_validation->run() == FALSE){
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->view('signup_page');
			echo "Sorry that user name has been taken. Please try again.";
		}else{
			$this->load->model('new_users');
			if($query = $this->new_users->create_user()){
				$data['account_created'] = 'Your account has been created. You may now sign in.';
				$this->load->helper('url');
				$this->load->helper('form');
				$this->load->view('home_page');
			} //Ends if statement
			
		} //Ends If else Statement
		
	} //Ends Create User Function
	
	
	public function username_avail($requested_username){
		$this->load->model('new_users');
		$username_free = $this->new_users->username_avail($requested_username);
		if($username_free){
			return TRUE;
		}else{
			return FALSE;
		}
	} //Ends Username Avail Function
	
	
	
	
	
} //Ends Signup Controller	
?>