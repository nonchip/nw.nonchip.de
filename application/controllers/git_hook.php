<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Git_hook extends CI_Controller {

  public function index()
  {
    if($this->input->post('payload')){
      $doit=false;
      $mig=false;
      foreach(json_decode($this->input->post('payload'))->commits as $c){
        if(strpos($c->message,'#publish') !== false){
          $doit=true;
          if(in_array('application/config/migration.php',$c->modified))
            $mig=true;
        }
      }
      if($doit)
        system('git pull');
      if($mig)
        redirect('migration');
    }
  }
}
