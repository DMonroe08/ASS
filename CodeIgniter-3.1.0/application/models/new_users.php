<?php
class New_users extends  CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	} //Ends Construct Funtion

	public function username_avail($username){
		$this->db->where('username', $username);
		$check = $this->db->get('users');
		
		if($check->num_rows() > 0){
			return FALSE;
		}else{
			return TRUE;
		}//Ends if statement
	}//Ends username avail function
	
	public function create_user(){
		$username = $this->input->post('username');
		
		$newuser_insert = array(
			'username' => $this->input->post('username'),
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		); //Ends new user insert
		$insert = $this->db->insert('users', $newuser_insert);
	} //Ends Create User Function
	
} // Ends New_users Function
?>