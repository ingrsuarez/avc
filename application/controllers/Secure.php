<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secure extends CI_Controller {



	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url_helper');


    }


    public function login($page="login"){
    	 $data['title'] = $page;
    	 
        if ($this->session->has_userdata('usuario'))
        {
            redirect('/home/index');
        }else {
            $this->load->view('templates/head', $data);
            $this->load->view('secure/login');
            $this->load->view('templates/footer', $data);

            
        }
    }

    public function logout()
    {
    	
    	session_destroy();
    	
    	redirect('/secure/login', 'refresh');
    }


}