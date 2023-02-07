<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AllObject extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
       
        if(!$this->session->has_userdata('mail'))
		{
			redirect('welcome/index');  
		}
		$this->load->model('Model');
    }
    public function index1()
	{
		$data = array();
		$data['listeObjet'] = $this->Model->listeObjet();
		$data['mail'] = $this->session->userdata('mail');
        $data['content'] = 'page/home';
		$this->load->view('accueil',$data);
	}
}
