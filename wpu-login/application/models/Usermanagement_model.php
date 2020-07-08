<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usermanagement_model extends CI_Model
{
	public function getSubMenuById($id)
	{
		return $this->db->get_where('user', ['id' => $id])->row_array();
	}

	public function changeDataUser()
	{
		$data = [
			"role_id" => $this->input->post('role_id', true),
			"is_active" => $this->input->post('is_active', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user', $data);
	}
}