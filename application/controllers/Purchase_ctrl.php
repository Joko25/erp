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

	public function save_po(){
		// kategori
		$isi_data = json_decode(stripslashes($_POST['data']));
		$no_faktur = trim($_POST['no_faktur']);
		$kode_supplier = trim($_POST['kode_supplier']);
		$ket_po = trim($_POST['ket_po']);
		$po_subtotal = trim($_POST['po_subtotal']);
		$po_disc = trim($_POST['po_disc']);
		$po_discnominal = trim($_POST['po_discnominal']);
		$po_dp = trim($_POST['po_dp']);
		$po_ppn = trim($_POST['po_ppn']);
		$po_grandtotal = trim($_POST['po_grandtotal']);

		// echo $nama_kategori.' '.$ket_kategori;

		$data = array(
			'data' => $isi_data,
			'no_faktur' => $no_faktur,
			'kode_supplier' => $kode_supplier,
			'ket_po' => $ket_po,
			'po_subtotal' => $po_subtotal,
			'po_disc' => $po_disc,
			'po_discnominal' => $po_discnominal,
			'po_dp' => $po_dp,
			'po_ppn' => $po_ppn,
			'po_grandtotal' => $po_grandtotal,
			'last_update' => date('Y-m-d'),
			'user_entry' => $this->session->userdata('nama')
		);

		// $result = $this->m_purchase->save($data);
		echo count($isi_data);
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