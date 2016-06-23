<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model {

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

public $post_by;
public $post_date;
public $publis_date;
public $title;
Public $content;

public function __construct()
	{
		parent::__construct();
		$this->load->database();
  	}

// fungsi tampilkan semua berita
public function get_news()
{
	$query = $this->db->query('
							select news.id_news, news.post_date, news.publish_date, news.title, news.content, user.name
							from news join user on news.post_by = user.id_user
							');
	return $query->result();
}

// fungsi simpan data ke database
public function insert($data)
	{
		$this->db->insert('news', $data);
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
  	}
}