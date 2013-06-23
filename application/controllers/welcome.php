<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends NiceController {

	public function index()
	{
    $this->load->library('session');
		$this->load->view('head');
    $this->output->append_output('<p>Hallo</p>');
		$this->load->view('foot');
	}
}
