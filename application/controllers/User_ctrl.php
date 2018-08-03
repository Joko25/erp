<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_ctrl extends CI_Controller {
	public function __construct(){
		# code...
		parent::__construct();
		// $this->load->helper('url');
		$this->load->model('m_master');
	}

	public function index(){
		// header('Content-Type: application/json');
    	echo $this->m_master->getuser();
	}

	public function get_user(){
		header('Content-Type: application/json');
    	echo $this->m_master->getuser();
	}

	public function edit(){
		$id = trim($_POST['id']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$fullname = trim($_POST['fullname']);
		$email = trim($_POST['email']);
		$status = trim($_POST['status']);
		$img = trim($_POST['img']);

		$data = array(
			'id' => $id,
			'username' => $username,
			'password' => $password,
			'full_name' => $fullname,
			'email' => $email,
			'status' => $status,
			'img' => $img
		);

		$result = $this->m_master->update_usr($data);
		echo json_encode($result);
	}

	public function get_edit(){
		// $this->m_master->get_edit($id);
		// echo json_encode($id);
		// $this->load->model("model_faq");
		$id = $_POST['id'];
		$where =  array(
			'id'=> $id
		);
	    // $title = $_POST['title'];
	    $data['result'] = $this->m_master->get_editusr($where);
	    echo json_encode($data['result']);
	}

	public function save(){

		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$fullname = trim($_POST['fullname']);
		$email = trim($_POST['email']);
		$status = trim($_POST['status']);
		$img = trim($_POST['img']);

		$data = array(
			'username' => $username,
			'password' => md5($password),
			'full_name' => $fullname,
			'email' => $email,
			'status' => $status,
			'img' => $img
		);

		$result = $this->m_master->save_usr($data);
		echo json_encode($result);
	}

	public function delete(){
		$id = trim($_POST['id']);

		$result = $this->m_master->delete_usr($id);
		echo json_encode($result);
	}

	public function pdf(){
		//Load the library
	    // $this->load->library('html2pdf');

	    // //Set folder to save PDF to
	    // $this->html2pdf->folder('./assets/pdfs/');
	    
	    // //Set the filename to save/download as
	    // $this->html2pdf->filename('Mater User.pdf');
	    
	    // //Set the paper defaults
	    // $this->html2pdf->paper('a4', 'portrait');
	    
	    // $data = array(
	    // 	'title' => 'PDF Created',
	    // 	'message' => 'Hello World!'
	    // );
	    
	    // //Load html view
	    // $this->html2pdf->html($this->load->view('pages/mst_user_pdf', $data, true));
	    
	    // if($this->html2pdf->create('save')) {
	    // 	//PDF was successfully saved or downloaded
	    // 	echo 'PDF saved';
	    // }

	    ob_start();
	    $data['admin'] = $this->m_master->print_user();
	    $this->load->view('pages/mst_user_pdf', $data);
	    $html = ob_get_contents();
	    ob_clean();

	    require_once('./assets/class/html2pdf/html2pdf.class.php');
	    $pdf = new HTML2PDF('P','A4','en');
	    $pdf->WriteHTML($html);
	    $pdf->Output('Master_User.pdf');
	    // , 'D' ->untuk langsung download
	}
}