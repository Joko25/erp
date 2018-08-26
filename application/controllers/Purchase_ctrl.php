<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_ctrl extends CI_Controller {
	public function __construct(){
		# code...
		parent::__construct();
		// $this->load->helper('url');
		$this->load->model('m_purchase');
	}

	public function index(){

	}

	public function getpo(){
		// echo "TEST";
		// header('Content-Type: application/json');
    	// echo $this->m_purchase->getfaktur();
    	$get = $this->m_purchase->getfaktur();
    	$this->output->set_content_type('application/json')
                 ->set_output(json_encode($get));
	}
	public function deletepo(){
		// echo "TEST";
		// header('Content-Type: application/json');
    	// echo $this->m_purchase->getfaktur();
    	$get = $this->m_purchase->deletepo();
    	$this->output->set_content_type('application/json')
                 ->set_output(json_encode($get));
	}
}