<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		if(isset($this->session->userdata['logged_in']))
		{
			redirect(site_url('dashboard/index'), 'refresh');
		}
		else
		{
			$this->load->view('/admin/login');
		}
	}

	public function validasi(){
		$this->load->library('form_validation');

		$validasi = array(
			array(
				'field' => 'username',
				'label'	=> 'Username',
				'rules'	=> 'required'
				),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules'	=> 'required'
				)
			);

		$this->form_validation->set_rules($validasi);
		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('notif', 'username or password cannot empty !!!');
			redirect(site_url('login/index'), 'refresh');
		}
		else
		{
			$data['username']	= $this->input->post('username');
			$password 			= $this->input->post('password');
			$data['password']	= md5("@r6hya!".$password."@.a");
			$result 			= $this->Login_model->cek_user($data);
			// print_r($data);
			// die();
			if($result == FALSE)
			{
				$this->session->set_flashdata('notif', 'username and password not match !!!');
				redirect(site_url('login/index'), 'refresh');
			} 
			else
			{
				$id_user	= $result[0]->id_user;
				$aktive 	= $this->Login_model->cek_aktive($id_user);
				if($aktive == TRUE)
				{
					$name	= $aktive[0]->name;
					$photo	= $aktive[0]->photo;
					$role	= $aktive[0]->id_role;
					$logged_in = array
					(
						'id_user'	=> $id_user,
						'name' 		=> $name,
						'photo'		=> $photo,
						'role'		=> $role 
					);
					$this->session->set_userdata('logged_in', $logged_in);
					redirect(site_url('dashboard/index'), 'refresh');
				}
				else
				{
					$this->session->set_flashdata('notif', 'username not active anymore !!!');
					redirect(site_url('Login/index'), 'refresh');
				}
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect(site_url('login/index'), 'refresh');
	}
}
