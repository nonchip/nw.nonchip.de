<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NiceController extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
    $this->load->helper('text');
    $this->load->helper('inflector');
    $this->config->load('site', FALSE, TRUE);
    $this->load->vars(array('site'=>$this->config->item('site')));
    $this->load->vars(array('page'=>array(
      'cclass'=>$this->router->fetch_class(),
      'cmethod'=>$this->router->fetch_method(),
      'title'=>humanize(character_limiter($this->router->fetch_class(),10)).'/'.humanize(character_limiter($this->router->fetch_method(),10)),
      'heading'=>humanize(character_limiter($this->router->fetch_class(),10)).'/'.humanize(character_limiter($this->router->fetch_method(),10)),
    )));
	}
  protected function page($k,$v){
    $a=$this->load->get_var('page');
    $a[$k]=$v;
    $this->load->vars(array('page'=>$a));
  }
}
