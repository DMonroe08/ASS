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
	
	public function users(){
		$query = $this->db->get('data');
		return $query->result();
	} //Ends Users Function
	
	public function update_info(){
		    $this->db->where('password', md5($password));        
		    $query = $this->db->get('users'); //data table
			$password = 'new_pw';
			 $this->db->update('user',array('password'=>$password,'pass_encryption'=>MD5($password)));
		    return $query->num_rows(); 
	} //Ends update info function
	
	public function delete_user(){
		$this->db->where('username', $this->input->post('username'));
		$username = ($_POST['username']);  
 		$this->db->from('users');
		$this->db->delete('users', array('username' => $username));
		
		return TRUE;
		
	} //Ends Delete User Function
		
} //Ends Users Function
?>