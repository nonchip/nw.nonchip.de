<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration extends CI_Controller {

  public function index()
  {
    $this->load->library('migration');

    if ( ! $this->migration->current())
    {
      show_error($this->migration->error_string());
    }
  }
}
