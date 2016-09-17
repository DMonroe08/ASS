<?php
class Signup extends CI_Controller{
	
	public function load(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('signup_page');
		$this->load->view('footer');
	} //Ends load function
	
	public function create_user(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[10]|callback_username_avail' );
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email ', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[20]');
		
		
		if($this->form_validation->run() == FALSE){
			//$this->load->helper('url');
			//$this->load->helper('form');
			//$this->load->view('signup_page');
			$this->load();
			echo "Sorry that user name has been taken. Please try again.";
		}else{
			
			$this->load->model('new_users');
			$query = $this->new_users->create_user();
			if($query == TRUE){
				//redirect('signin/load');
				$data['account_created'] = 'Your account has been created. You may now sign in.';
				$this->load->helper('url');
				$this->load->view('signin/signin_form');
			
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