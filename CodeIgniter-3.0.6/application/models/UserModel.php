<?php

/**
 * Author         : Toobler
 * Company        : Toobler Technologies
 * Project        : SelfiePleasure
 * Description    : Model to Manage Devices
 * Created        : 22-01-16
 */

class UserModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function login($user,$pass)
	{
		$query = $this->db->get_where('login', array('username' => $user, 'password'=>$pass));
		$result=$query->row();
		if($result)
		{
			return $result;
		}
		else
		{
			return false;
		}



	}
	public function insert($user,$pass)
	{
		$data = array(
			'username' => $user,
			'password' => $pass ,

			);

		$this->db->insert('login', $data); 

	}

	public function delete($id)
	{
		$this->db->where('id', $id);
        $this->db->delete('login'); 


	
}

public function updated($id,$user,$pass)
	{

$data = array(
               'username' => $user,
               'password' => $pass,
               
            );

$this->db->where('id', $id);
$this->db->update('login', $data); 

	
}

 public function userView($fields = FALSE, $conditions = FALSE)
    {
        if($fields != FALSE){
            $this->db->select($fields);
        }
        $this->db->from('login');

        if ($conditions != FALSE) {
            $this->db->where($conditions);
        }

        $this->db->order_by('id', 'desc');

        $query = $this->db->get();
        return  $query->result();
    }

}

     