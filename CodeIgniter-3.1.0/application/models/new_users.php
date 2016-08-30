<?php
class New_users extends  CI_Model{

	function __construct(){
		parent::__construct();
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
	
	
} // Ends New_users Function
?>