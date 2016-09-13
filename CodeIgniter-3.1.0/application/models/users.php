<?php
class Users extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	} //Ends Contruct Funtion
		
	public function signin_yes(){
		//Gets Users
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', $this->input->post('password'));
		$query = $this->db->get('users');
		
		//Creates a session if user is TRUE
		if($query->num_rows() == 1){
			$row = $query->row();
			$data = array(
				'username' => $row->username,
				'password' => $row->password
			);
			$this->session->set_userdata($data);
			return TRUE;
		}else{
			return FALSE;
		}
	} //Ends Signin Yes Function
	
	public function username_good(){
		//Checks if username is 
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		$result = $query->result();
		if($query->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	} //Ends Username Good Function
		
		
} //Ends Users Function
?>