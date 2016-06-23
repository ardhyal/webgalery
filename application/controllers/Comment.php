<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Comment_model');
	}

	public function index()
	{
		if(isset($this->session->userdata['logged_in']))
		{
			$data['active']		= "comment";
			$data['comment']	= $this->Comment_model->get_comment();
			$this->load->view('/admin/header', $data);
			$this->load->view('/admin/comment', $data);
			$this->load->view('/admin/footer');
		}
		else
		{
			redirect(site_url('login/index'), 'refresh');
		}
	}

	public function approve($id)
	{
		if(isset($this->session->userdata['logged_in']))
		{
			$this->Comment_model->approve($id);
			redirect(site_url('comment/index'), 'refresh');
		}
		else
		{
			redirect(site_url('login/index'), 'refresh');
		}
	}

	public function reject($id)
	{
		if(isset($this->session->userdata['logged_in']))
		{
			$this->Comment_model->reject($id);
			redirect(site_url('comment/index'), 'refresh');
		}
		else
		{
			redirect(site_url('login/index'), 'refresh');
		}
	}
}
