<?php
class Users extends CI_Models{
	function __construct(){
		parrent::__contruct();
		$this->load->database();
	} //Ends Contruct Funtion
		
	public function signin_yes(){
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', $this->input->post('password'));
		$query = $this->db->get('users');
		if($query->num_rows() == 1){
			return TRUE;
		}else{
			return FALSE;
		}
	} //Ends Signin Yes Function
	
	public function username_good(){
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