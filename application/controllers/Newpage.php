<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newpage extends CI_Controller {


	   public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->model('newpage_model');
         
    }
	public function index()

	{
		$data['newpage']=$this->newpage_model->view_fn();
		$this->load->view('newform',$data);
	}

	public function save()
	{
		
		$this->newpage_model->save_fn();
	}
}
