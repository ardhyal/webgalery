<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picture extends CI_Controller {

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
		$this->load->model('Image_model');
	}
	
	public function index()
	{
		if(isset($this->session->userdata['logged_in']))
		{
			$data['active'] 	= "picture";
			$this->load->view('/admin/header', $data);
			$this->load->view('/admin/image', $data);
			$this->load->view('/admin/footer');
		}
		else
		{
			redirect(site_url('login/index'), 'refresh');
		}
	}

	//fungsi upload gambar
	public function upload()
	{
		if(isset($this->session->userdata['logged_in']))
		{
			$config['upload_path']		= './assets/image/';
			// $config['filename']			= $name;
			 $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = '1000';
        $config['max_width']        = '1024';
        $config['max_height']       = '768';
			$this->load->library('upload', $config);
			
			if(! $this->upload->do_upload('photo'))
			{
				// var_dump($this->upload->do_upload('image'));
				// die();
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('notif', $error);
				redirect(site_url('picture/index'), 'refresh');
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$this->session->set_flashdata('notif', $data);
				redirect(site_url('picture/index', 'refresh'));
			}
		}
		else
		{
			redirect(site_url('login/index'), 'refresh');
		}
	}


	//fungsi update gambar
	//fungsi delete gambar
}
