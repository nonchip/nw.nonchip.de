<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NiceController extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
    $this->load->helper('text');
    $this->load->helper('inflector');
    $this->config->load('site',TRUE,TRUE);
    $this->load->vars($this->config->config);
    $this->load->vars(array('page'=>array(
      'cdir'=>$this->router->directory,
      'cclass'=>$this->router->fetch_class(),
      'cmethod'=>$this->router->fetch_method(),
      'title'=>humanize(character_limiter($this->router->fetch_class(),10)).'/'.humanize(character_limiter($this->router->fetch_method(),10)),
      'heading'=>humanize(character_limiter($this->router->fetch_class(),10)).'/'.humanize(character_limiter($this->router->fetch_method(),10)),
    )));
	}
  protected function page($k,$v){
    $this->avar_add(array($k=>$v));
  }
  protected function avar_add($d,$a){
    $v=$this->load->get_var($a);
    if(!is_array($v))$v=array();
    $v=array_merge($v,$d);
    $this->load->vars(array($a=>$v));
  }
}

}
