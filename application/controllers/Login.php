<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}
	public function index()
	{
		$log = $this->session->userdata('status');
	    $username = $this->session->userdata('name');
	    if ($log == 'login') {
        	redirect(base_url('home'));
        		# code...
        }else{
        	$result['data'] = '';
			$this->load->view('login', $result);
        }
	}
	public function action_login(){
		// echo "string";
		// echo "string";
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where =  array(
			'username'=> $username,
			'password' => md5($password)
		);

		$cek = $this->m_login->cek_login("admin", $where)->num_rows();
		$da = $this->m_login->cek_login("admin", $where)->result_array();

		if ($cek > 0) {
			foreach ($da as $rows) {
				$data_session = array(
					'nama' => $username,
					'status' => 'login',
					'email' => $rows['email'],
					'img' => $rows['img'],
					'full_name' => $rows['full_name'],
					'as' => $rows['status']
				);
			}


			$this->session->set_userdata($data_session);
			// redirect(base_url('home'));
			echo json_encode('success');
		}else{
			// echo "Username atau Password salah";
			echo json_encode(array('errorMsg'=>'Username atau Password salah'));
			// redirect(base_url('login'));
			// $this->load->view('login', $result);
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
