<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

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
		$this->load->model('Article_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		if(isset($this->session->userdata['logged_in']))
		{
			$data['active']	= "article";
			$data['news']	= $this->Article_model->get_news();
			$this->load->view('/admin/header', $data);
			$this->load->view('/admin/article', $data);
			$this->load->view('/admin/footer');
		}
		else
		{
			redirect(site_url('login/index'), 'refresh');
		}
	}

	// fungsi insert data to database
	public function create()
	{
		if(isset($this->session->userdata['logged_in']))
		{
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('content', 'Article', 'required');
			$this->form_validation->set_rules('publish_date', 'Publish Date', 'required');
			if($this->form_validation->run() === FALSE)
			{

				redirect(site_url('article/index'), 'refresh');
			}
			else
			{
				$id_user 	= $this->session->userdata("logged_in")['id_user'];
				$news		= htmlspecialchars_decode($this->input->post('news'));
				$data 		= array
				(
					// 'title' 		=> set_value('title'),
					// 'content'			=> $content,
					// 'publish_date'	=> set_value('publish_date'),
					// 'post_by'		=> $id_user
					'title' 		=> 'tesitng',
					'content'			=> 'deskripsi data',
					'publish_date'	=> '2010-06-23',
					'post_by'		=> $id_user
				);
				// print_r($data);
				// die();

				if($this->Article_model->insert($data) === TRUE)
				{
					$this->session->set_flashdata('notif', 'Save Success !!!');
					redirect(site_url('article/index'), 'refresh');
				}
				else
				{
					$this->session->set_flashdata('notif', 'Error Input !!!');
					redirect(site_url('article/index'), 'refresh');
				}
			}
		}
		else
		{
			redirect(site_url('login/index'), 'refresh');
		}
	}
}
