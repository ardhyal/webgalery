<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sites extends CI_Controller {

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
		$this->load->model('Site_model');
	}

	public function index()
	{
		if(isset($this->session->userdata['logged_in']))
		{
			$data['active']		= "comment";
			$data['comment']	= $this->Comment_model->get_comment();
			$this->load->view('/admin/header', $data);
			$this->load->view('/test/v_poles');
			$this->load->view('/admin/footer');
		}
		else
		{
			redirect(site_url('login/index'), 'refresh');
		}
	}
        
        public function detail($id)
	{
		if(isset($this->session->userdata['logged_in']))
		{
                        $this->session->set_userdata('id', $id);
                        $data['active']	= "comment";
			$data['tower']	= $this->Site_model->get_tower($id);
			$data['nomer']	= $this->Site_model->get_no_tower($id);
//                        echo "<pre>";
//                        print_r($data);
//                        echo "</pre>";
//                        die();
			$this->load->view('/admin/header', $data);
			$this->load->view('/test/v_poles', $data);
			$this->load->view('/admin/footer');
		}
		else
		{
			redirect(site_url('login/index'), 'refresh');
		}
	}
        
        public function add_tower(){
                $data['TowerNumber']        = $this->input->post('pole');
                $data['SiteID']             = $this->session->userdata('id');
                $data['BtsGroup']           = $this->input->post('btsgroup');
                $data['TowerHeight']        = $this->input->post('poleheight');
                $data['TowerBaseHeight']    = $this->input->post('polebase');
                $data['TowerType']          = $this->input->post('poletype');
//                print_r($data);
//                die();  
                $this->Site_model->save_tower($data);
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>Successfully!!</div></div>");
                redirect(site_url('sites/detail/'.$this->session->userdata('id')), 'refresh');
        }

	
}
