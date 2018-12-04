<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
	  public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
         $this->load->library('session');
     //    $this->load->model('email_model');
         $this->load->library('email');
            $this->load->helper(array('form', 'url'));
    }

    public function index(){
    	$this->load->view('email');
    }
 /*   public function send(){
    	$this->email_model->sendMail();
    }*/

       public function send_mail() { 
         $from_email = "your@example.com"; 
         $to_email = $this->input->post('email'); 
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Your Name'); 
         $this->email->to($to_email);
         $this->email->subject('Email Test'); 
         $this->email->message('Testing the email class.'); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $this->load->view('email'); 
      } 
	
}


