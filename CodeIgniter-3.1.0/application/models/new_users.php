<?php
class New_users extends  CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	} //Ends Construct Funtion

	
	public function create_user(){
		$new_member_insert_data = array(
			'firstname' =>$this->input->post('firstname'),
			'lastname' =>$this->input->post('lastname'),
			'email' =>$this->input->post('email'),
			'username' =>$this->input->post('username'),
			'password' =>md5($this->input->post('password'))
		);
		
		$insert = $this->db->insert('users', $new_member_insert_data);
		return $insert;
	}
} // Ends New_users Function
?>