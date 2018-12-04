<?php
class Newpage_model extends CI_Model {
 
    public function __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');
        $this->load->database();
    }

     
	

	public function save_fn(){
		$data=array(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
		);
		$this->db->insert('test',$data);
		redirect('newpage');

	}
	public function view_fn(){
		$query=$this->db->get('test');
		return $query->result_array();
	}

}