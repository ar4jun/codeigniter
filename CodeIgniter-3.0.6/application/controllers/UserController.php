<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends MY_Controller {

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
	public function home()
	{
		
		$this->load->view('home');
	}
	public function insert()
	{
		if($this->input->post('username')){
			$name=$this->input->post("username", TRUE);
			$pass=$this->input->post("password", TRUE);
			$this->load->model('userModel');
	      	$this->userModel->insert($name,$pass);
	      	$this->session->set_flashdata('insert', TRUE); //For Displaying Notification in next HTTP Request
	      	redirect('userController/insert');

		}
		else
		{
		$this->load->view('userInsert');
	}
	}
	public function view()
	{

		

		$this->load->model('userModel');

		$data['users'] = $this->userModel->userView(FALSE, FALSE);
	      // $data['users'] =$this->userModel->userView();
		$this->load->view('view',$data);
	}
	public function delete($id)
	{
		$this->load->model('userModel');
	    $this->userModel->delete($id);
	    $this->session->set_flashdata('delete', TRUE); //For Displaying Notification in next HTTP Request
		redirect('userController/view');

	}
	public function update($id)
	{
		if($this->input->post('username')){
			$name=$this->input->post("username", TRUE);
			$pass=$this->input->post("password", TRUE);
			
			$this->load->model('userModel');

	      	$this->userModel->updated($id,$name,$pass);
	      	$this->session->set_flashdata('check', TRUE); //For Displaying Notification in next HTTP Request
	      	redirect('userController/view');

		}
		else
		{
			
		$this->load->model('userModel');
		$data['users'] = $this->userModel->userView(FALSE, array('id' => $id ));
	    // $data['users']=$this->userModel->update($id);
	    // print_r($data['users']);
		$this->load->view('update',$data);
	}

	}
	}

