<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_ctrl extends CI_Controller {
	public function __construct(){
		# code...
		parent::__construct();
		// $this->load->helper('url');
		$this->load->model('m_master');
	}

	public function index(){

	}
	public function save_product()	{
	    $status = "";
	    $msg = "";
	    $gambar = 'gambar';
	    $kode_barang = trim($_POST['kode_barang']);
		$nama_barang = trim($_POST['nama_barang']);
		$kode_kategori = trim($_POST['kode_kategori']);
		$kode_satuan = trim($_POST['kode_satuan']);
		$spek = trim($_POST['spek']);
	     
	    if ($status != "error")
	    {
	        $config['upload_path'] = './assets/uploads/';
	        $config['allowed_types'] = 'gif|jpg|png|doc|txt';
	        $config['max_size'] = 1024 * 8;
	        $config['encrypt_name'] = TRUE;
	 
	        $this->load->library('upload', $config);
	 
	        if (!$this->upload->do_upload($gambar))
	        {
	            $status = 'error';
	            $msg = $this->upload->display_errors('', '');
	        }
	        else
	        {
	            $data = $this->upload->data();
	            $data_prod = array(
					'gambar'=>$data['file_name'],
					'kode_barang'=>$kode_barang,
					'nama_barang'=>$nama_barang,
					'kode_kategori'=>$kode_kategori,
					'kode_satuan'=>$kode_satuan,
					'spek'=>$spek
				);
	            $file_id = $this->m_master->save_product($data_prod);
	           
	        }
	    }
	    echo json_encode($file_id);
	}
	
}