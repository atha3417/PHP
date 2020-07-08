<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data = array(
			'chat' => $this->db->order_by('id', 'ASC')->get('chat')->result(),
		);
		$this->load->view('chat', $data);
	}

	public function store()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'message' => $this->input->post('message')
		);
		$options = array(
		    'cluster' => 'ap1',
		    'useTLS' => true
		  );
		$pusher = new Pusher\Pusher(
			'25257dfdc17294e6a1f8',
			'f179d90538759dc17eb4',
			'1015208',
			$options
		);
		if ($this->db->insert('chat', $data)) {
			$push = $this->db->order_by('id', 'ASC');
			$push = $this->db->get('chat')->result();
			foreach($push as $key) {
				$data_pusher[] = $key;
			}
		  	$pusher->trigger('my-channel', 'my-event', $data_pusher);
		}
	}
}
