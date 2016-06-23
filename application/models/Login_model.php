<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	/*
	 * ***************************************************************
	 * Script :
	 * Version :
	 * Date :
	 * Author : ardhyal
	 * Email : ardialhadi@gmail.com
	 * Description :
	 * ***************************************************************
	 */

	/**
	 * Description of Dashboard
	 *
	 * @author ardhyal
	 */
protected $username;
protected $password;

public function __construct()
	{
		parent::__construct();
		$this->load->database();
  	}

public function cek_user($data)
	{
	  	$datalogin = array
	  	(
	  		'username' 	=> $data['username'], 
	  		'password' 	=> $data['password']
	  	);
	    $this->db->where($datalogin);
	    $this->db->select('id_user');
	    $this->db->from('user');
	    $this->db->limit(1);
	    
	    $query = $this->db->get();
	    If($query->num_rows() == 1)
	    {
	    	return $query->result();
	    }
	    else
	    {
	    	return FALSE;
	    }
  	}

public function cek_aktive($id)
	{
	$datauser = array
	(
		'id_user' 	=> $id,
		'status'	=>	'1'
	);
		$this->db->where($datauser);
		$this->db->select('name, photo, id_role');
		$this->db->from('user');
		$this->db->limit(1);

		$query = $this->db->get();
		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}
}