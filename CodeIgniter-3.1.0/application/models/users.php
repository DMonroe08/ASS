<?php
class Users extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	} //Ends Contruct Funtion
		
	public function signin_yes(){
		//Gets Users
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('users');
		
		//Creates a session if user is TRUE
		if($query->num_rows() > 0){
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
		
} //Ends Users Function
?>