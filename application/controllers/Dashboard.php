<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

	public function index()
	{
		if(isset($this->session->userdata['logged_in']))
		{
			$data['active']	= "dashboard";
			$this->load->view('/admin/header', $data);
			$this->load->view('/admin/footer');
		}
		else
		{
			redirect(site_url('login/index'), 'refresh');
		}
		
	}
}
