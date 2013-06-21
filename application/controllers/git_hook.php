<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Git_hook extends CI_Controller {

  public function index()
  {
  	passthru('git pull');
  }
}
