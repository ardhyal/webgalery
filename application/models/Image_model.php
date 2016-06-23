<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image_model extends CI_Model {

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

// fungsi tampilkan semua komentar
public function get_comment()
{
	$query = $this->db->query('
							select news.title, news_comment.id_comment, news_comment.comment_name, news_comment.comment_email, news_comment.comment, news_comment.comment_status, news_comment.time
							from news_comment join news on news.id_news = news_comment.id_news
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

public function approve($id)
	{
		$this->db->where('id_comment', $id);
		$this->db->set('comment_status', '1');
		$this->db->update('news_comment');
	}

public function reject($id)
	{
		$this->db->where('id_comment', $id);
		$this->db->set('comment_status', '2');
		$this->db->update('news_comment');
	}
}