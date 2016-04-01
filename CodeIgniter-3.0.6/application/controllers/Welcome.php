<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function login()
	{
		
		if($this->input->post('username')){
			$name=$this->input->post("username", TRUE);
			$pass=$this->input->post("password", TRUE);

			// echo $name;
			// echo $pass;
			// ecjkl
			
	      	$this->load->model('userModel');
	      	$user = $this->userModel->login($name,$pass);
	      	print_r($user);
	      	
	      	if($user!=false)
	      	{
	      		
		      	$this->session->set_userdata('username',$user->username);
		      	echo $this->session->userdata('username');
		      	redirect('/userController/home', 'refresh');
	      	}
	      	else
	      	{
	      		$this->load->view('login');
	      	}
	      }
	      
	      else{
	      	$this->load->view('login');
	      }

      	
		
	}
	 public function logout() {

        try {
            $this->session->sess_destroy();        
            redirect('welcome/login');
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }
	
}
