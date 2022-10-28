<?php 


class Secure_model extends CI_Model {

	

	public function __constructor (){

		 parent::__construct();
		$this->load->database();

	}


	public function check_password($data)
	{
		$this->load->database();
		$userName = $data['userName'];
		$password = $data['password'];
		$sql = "SELECT * FROM usuarios_internos WHERE usuario = '".$userName."' AND clave = '".$password."' LIMIT 1";
		$query = $this->db->query($sql);
		$result = $query->row_array();
		if (!empty($result))
		{
			return $result;
		}else{
			return false;
		}

	}

	public function access($sector="")
	{
		if (!empty($sector))
		{
			$puesto = $this->session->userdata('puesto');
			$sql = "SELECT acceso FROM `accesos` WHERE puesto =  '".$puesto."' AND sector = '".$sector."' LIMIT 1";
			$query = $this->db->query($sql);
			$result = $query->row_array();
			
			if ($result <> NULL){
				$access = $result['acceso'];
				return ((int) $access);
			}else
			{	return 1000;
			}			

		}else
		{return 1000;}

	}

}
