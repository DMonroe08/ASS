<?php
class Signup extends CI_Controller{
	
	public function load(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('signup_page');
	} //Ends load function
	
	
} //Ends Signup Controller
	
?>