<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			//Check for Session 
	    if(!$this->session->userdata('username')){
	      redirect('welcome/login');
	    
		}
	}
}

