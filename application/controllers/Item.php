<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

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
		// $this->load->view('itemlist');
		// $data['items']=$this->db->get('items')->result();
		// $this->load->view('itemlist',$data);
		// echo('Hello ci');
			 $this->load->database();  
             //load the model  
             $this->load->model('select');  
             //load the method of model  
             $data['h']=$this->select->select();  
             //return the data in view  
             $this->load->view('itemlist', $data);
	}
}
