<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model {

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

public $coment_name;
public $comment_email;
public $comment;

public function __construct()
	{
		parent::__construct();
		$this->load->database();
  	}

    //ambil data tower
    function get_tower($id) {
        $this->db->select(''
                . 'a.id, b.id as id_tower, b.TowerNumber, b.SiteID, b.BtsGroup, b.TowerHeight, '
                . 'b.TowerType, b.TowerBaseHeight');
        $this->db->from('site as a');
        $this->db->join('tower as b', 'a.id = b.SiteID');
        $this->db->where("b.SiteID",$id);
        $this->db->where("b.deleted_at", NULL);
        $query = $this->db->get();
        return $query->result();
    } 
    
    //ambil nomer tower
    function get_no_tower($id)
    {
        $this->db->select('b.TowerNumber');
        $this->db->from('site as a');
        $this->db->join('tower as b', 'a.id = b.SiteID');
        $this->db->where("b.SiteID",$id);
        $this->db->where("b.deleted_at", NULL);
        $this->db->order_by("TowerNumber", "ASC");
        $query = $this->db->get();
        return $query->result();
    }
    
    function save_tower($data){
        $this->db->insert('tower', $data);
    }
}