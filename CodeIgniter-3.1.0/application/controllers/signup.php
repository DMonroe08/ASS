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
	
	public function check_username(){
		$this->load->library('form_validation');
		$this->load->model('new_users');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[10]' );
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email ', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[20]');
		
		if($this->form_validation->run() == TRUE){
			
			$this->load->model('new_users');
			$result = $this->new_users->username_avail();
			
			if($result == FALSE){
				$query = $this->new_users->create_user();
				if($query == TRUE){				
					$this->load->helper('url');
					$this->load->view('signin_page');
					echo 'Congratulations! Your account has been created! You can now sign in';
		}else{
			$this->load();
			echo 'Sorry but that user name has been taken. Please try a different password';
			}
		}
	}//Ends Check Username
}
} //Ends Signup Controller	
?>