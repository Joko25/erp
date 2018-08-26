<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
	
	public function __construct()
	{
		# code...
		parent::__construct();
		// $this->load->helper('url');
		$this->load->model('m_master');
	}

	public function view($page = 'home'){
		
	    $username = $this->session->userdata('nama');
		$status = $this->session->userdata('status');
		$email = $this->session->userdata('email');
		$img = $this->session->userdata('img');
		$full_name = $this->session->userdata('full_name');
		$as = $this->session->userdata('as');
	    
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['username'] = $username ;
        $data['log'] = $status ;
        $data['email'] = $email ;
        $data['img'] = $img ;
        $data['full_name'] = $full_name ;
        $data['as'] = $as ;

        if ($status=='login') {
        	# code...
	        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
				// show_404();
				$this->load->view('templates/header', $data);
		        $this->load->view('templates/aside', $data);
		        $this->load->view('pages/404', $data);
		        $this->load->view('templates/footer');
	        }else{

		        $this->load->view('templates/header', $data);
		        $this->load->view('templates/aside', $data);
		        $this->load->view('pages/'.$page, $data);
		        $this->load->view('templates/footer');
	        }
        }else{
        	redirect(base_url('login'));
        }

	}

	public function error404(){
		// echo "test";
		$this->load->view('pages/404');
	}

	public function dashboard(){
		$this->load->view('templates/header');
        $this->load->view('pages/login');
        $this->load->view('templates/footer');
	}

	public function getuser(){
		$get = $this->m_master->getuser();
		return $get;
	}
	public function getkat(){
		$get = $this->m_master->getkat();
		return $get;
	}
	public function getsat(){
		$get = $this->m_master->getsat();
		return $get;
	}
	public function getproduct(){
		$get = $this->m_master->getproduct();
		return $get;
	}

	public function jsonsupplier(){
		// $get = $this->m_master->jsonsupplier();
		// return $get;
		$get = $this->m_master->jsonsupplier();
		$this->output->set_content_type('application/json')
                 ->set_output(json_encode($get));
	}

	public function jsonkat(){
		$get = $this->m_master->jsonkat();
		$this->output->set_content_type('application/json')
                 ->set_output(json_encode($get));
		// return echo $get;
	}
	public function jsonsat(){
		$get = $this->m_master->jsonsat();
		$this->output->set_content_type('application/json')
                 ->set_output(json_encode($get));
		// return echo $get;
	}

	public function jsonproduct(){
		$get = $this->m_master->jsonproduct();
		$this->output->set_content_type('application/json')
                 ->set_output(json_encode($get));
		// return echo $get;
	}

	public function getBarangdtl(){
		$kode_barang = $_POST['kode_barang'];
		$where =  array(
			'kode_barang'=> $kode_barang
		);
		$get = $this->m_master->jsonproductdtl($where);
		$this->output->set_content_type('application/json')
                 ->set_output(json_encode($get));
		// return echo $get;
	}
}