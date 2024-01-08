<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori extends CI_Model
{
	public function komputer()
	{
		return $this->db->get_where('product', array('kategori' => 'Komputer'));
	}

	public function ponsel()
	{
		return $this->db->get_where('product', array('kategori' => 'Ponsel'));
	}

	public function audio()
	{
		return $this->db->get_where('product', array('kategori' => 'Audio'));
	}
}
