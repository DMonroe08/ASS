<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Signin extends CI_Controller{
	
	public function load(){		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['content'] = 'signin_page';
		$this->load->view('includes/template', $data);
	} //Ends Load Function
	
	public function signin_validation(){
		$this->load->model('users');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		if($this->form_validation->run() == TRUE){
			$this->load->model('users');
			$query = $this->users->signin_yes();
			
			if($query){
				$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'is_logged_in' => true
				);
				$this->session->set_userdata($data);
				$this->signed_in();
			}else{
				$ms = "sorry something wasn't quite right";
				$this->load();
				
			}
		}
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
	
	public function signed_in(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['content'] = 'users_page';
		$this->load->view('includes/template', $data);
	} //Ends Load Function
	
	public function is_logged_in(){
		$is_logged_in = $this->session->set_userdata($data);
		
		if(isset($is_logged_in) || $is_logged_in != true){
			echo "You don't have permission to access this page. < a href='..login'>Login</a>";
			die();
		}
	} //Ends is logged function
	
	public function update(){
		$this->load->model('users');
		$this->load->library('form_validation');
	 	$this->form_validation->set_rules('password','Password','required|trim|');
		$this->form_validation->set_rules('new_pw','New Password','required|trim');
		$this->form_validation->set_rules('new_pw2','Confirm Password','required|trim|matches[new_pw]');
			
			if($this->form_validation->run() == TRUE){
				$this->load->model('users');
				$query = $this->users->update_info();
				
				if($query == TRUE){
					$message = "Update Successful";
				
					$this->signed_in();
					echo $message;
				}else{
					$message = "Please try again";
					$this->signed_in();
					echo $message;
				}
			}
	}
	
	public function delete(){
		$this->load->model('users');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		if($this->users->delete_user() == TRUE){
			$this->load->helper('url');
			$this->load->view('welcome/index');
			
		}
	}
	
} //Ends Signin Function
?>