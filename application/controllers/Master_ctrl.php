<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_ctrl extends CI_Controller {
	public function __construct(){
		# code...
		parent::__construct();
		// $this->load->helper('url');
		$this->load->model('m_master');
	}

	public function index(){

	}

	// GET
	public function get_kat(){
		header('Content-Type: application/json');
    	echo $this->m_master->getkat();
	}

	public function get_sat(){
		header('Content-Type: application/json');
    	echo $this->m_master->getsat();
	}

	public function get_product(){
		header('Content-Type: application/json');
    	echo $this->m_master->getproduct();
	}

	public function get_supplier(){
		header('Content-Type: application/json');
    	echo $this->m_master->getsupplier();
	}

	// EDIT

	public function edit(){
		// KATEGORI
		$kode_kategori = trim($_POST['kode_kategori']);
		$nama_kategori = trim($_POST['nama_kategori']);
		$ket_kategori = trim($_POST['ket_kategori']);

		$data = array(
			'kode_kategori' => $kode_kategori,
			'nama_kategori' => $nama_kategori,
			'ket_kategori' => $ket_kategori,
			'last_update' => date('Y-m-d'),
			'user_entry' => $this->session->userdata('nama')
		);

		$result = $this->m_master->update_kat($data);
		echo json_encode($result);
	}

	public function edit_satuan(){
		$kode_satuan = trim($_POST['kode_satuan']);
		$nama_satuan = trim($_POST['nama_satuan']);

		$data = array(
			'kode_satuan' => $kode_satuan,
			'nama_satuan' => $nama_satuan,
			'last_update' => date('Y-m-d'),
			'user_entry' => $this->session->userdata('nama')
		);

		$result = $this->m_master->update_sat($data);
		echo json_encode($result);
	}

	public function edit_supplier(){

		$kode_supplier = trim($_POST['kode_supplier']);
		$nama_supplier = trim($_POST['nama_supplier']);
		$alamat_supplier = trim($_POST['alamat_supplier']);
		$telp_supplier = trim($_POST['telp_supplier']);
		$ket_supplier = trim($_POST['ket_supplier']);

		$data = array(
			'kode_supplier' => $kode_supplier,
			'nama_supplier' => $nama_supplier,
			'alamat_supplier' => $alamat_supplier,
			'telp_supplier' => $telp_supplier,
			'ket_supplier' => $ket_supplier,
			'last_update' => date('Y-m-d'),
			'user_entry' => $this->session->userdata('nama')
		);

		$result = $this->m_master->update_supplier($data);
		echo json_encode($result);
	}

	public function edit_product()	{
	    $status = "";
	    $msg = "";
	    $gambar = 'gambar';
	    $kode_barang = trim($_POST['kode_barang']);
		$nama_barang = trim($_POST['nama_barang']);
		$kode_kategori = trim($_POST['kode_kategori']);
		$kode_satuan = trim($_POST['kode_satuan']);
		$harga_beli = trim($_POST['harga_beli']);
		$harga_jual = trim($_POST['harga_jual']);
		$spek = trim($_POST['spek']);
	    
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|doc|txt';
        $config['max_size'] = 1024 * 8;
        $config['encrypt_name'] = FALSE;
        // $new_name = time().$_FILES["userfiles"]['name'];
		$config['file_name'] = $kode_barang;
 
        $this->load->library('upload', $config);
        $this->upload->do_upload($gambar);
        $sts_upload = $this->upload->display_errors('', '');
 		
        $data = $this->upload->data();
 		if ($sts_upload == 'You did not select a file to upload.') {
 			# code...
 			$img = "";
 		}else{
 			$img = $data['file_name'];
 		}
        $data_prod = array(
			'kode_barang'=>$kode_barang,
			'nama_barang'=>$nama_barang,
			'kode_kategori'=>$kode_kategori,
			'kode_satuan'=>$kode_satuan,
			'harga_beli'=>$harga_beli,
			'harga_jual'=>$harga_jual,
			'gambar'=>$img,
			'spesifikasi'=>$spek,
			'last_update' => date('Y-m-d'),
			'user_entry' => $this->session->userdata('nama')
		);
        $result = $this->m_master->update_product($data_prod);
           
        
	    echo $result;
	}

	// SAVE CONTROLLERS

	public function save(){
		// kategori
		$nama_kategori = trim($_POST['nama_kategori']);
		$ket_kategori = trim($_POST['ket_kategori']);

		// echo $nama_kategori.' '.$ket_kategori;

		$data = array(
			'nama_kategori' => $nama_kategori,
			'ket_kategori' => $ket_kategori,
			'last_update' => date('Y-m-d'),
			'user_entry' => $this->session->userdata('nama')
		);

		$result = $this->m_master->save_kat($data);
		echo json_encode($result);
	}

	public function save_satuan(){
		// satuan
		$nama_satuan = trim($_POST['nama_satuan']);

		$data = array(
			'nama_satuan' => $nama_satuan,
			'last_update' => date('Y-m-d'),
			'user_entry' => $this->session->userdata('nama')
		);

		$result = $this->m_master->save_sat($data);
		echo json_encode($result);
	}

	public function save_supplier(){
		// supplier
		// $nama_satuan = trim($_POST['nama_satuan']);
		$kode_supplier = trim($_POST['kode_supplier']);
		$nama_supplier = trim($_POST['nama_supplier']);
		$alamat_supplier = trim($_POST['alamat_supplier']);
		$telp_supplier = trim($_POST['telp_supplier']);
		$ket_supplier = trim($_POST['ket_supplier']);

		$data = array(
			'nama_supplier' => $nama_supplier,
			'alamat_supplier' => $alamat_supplier,
			'telp_supplier' => $telp_supplier,
			'ket_supplier' => $ket_supplier,
			'last_update' => date('Y-m-d'),
			'user_entry' => $this->session->userdata('nama')
		);

		$result = $this->m_master->save_supplier($data);
		echo json_encode($result);
	}

	public function save_product()	{
	    $status = "";
	    $msg = "";
	    $gambar = 'gambar';
	    $kode_barang = trim($_POST['kode_barang']);
		$nama_barang = trim($_POST['nama_barang']);
		$kode_kategori = trim($_POST['kode_kategori']);
		$kode_satuan = trim($_POST['kode_satuan']);
		$harga_beli = trim($_POST['harga_beli']);
		$harga_jual = trim($_POST['harga_jual']);
		$spek = trim($_POST['spek']);
	    
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|doc|txt';
        $config['max_size'] = 1024 * 8;
        $config['encrypt_name'] = FALSE;
        // $new_name = time().$_FILES["userfiles"]['name'];
		$config['file_name'] = $kode_barang;
 
        $this->load->library('upload', $config);
        $this->upload->do_upload($gambar);
        $sts_upload = $this->upload->display_errors('', '');
 		
        $data = $this->upload->data();
 		if ($sts_upload == 'You did not select a file to upload.') {
 			# code...
 			$img = "noimages.png";
 		}else{
 			$img = $data['file_name'];
 		}
        $data_prod = array(
			'kode_barang'=>$kode_barang,
			'nama_barang'=>$nama_barang,
			'kode_kategori'=>$kode_kategori,
			'kode_satuan'=>$kode_satuan,
			'harga_beli'=>$harga_beli,
			'harga_jual'=>$harga_jual,
			'gambar'=>$img,
			'spesifikasi'=>$spek,
			'last_update' => date('Y-m-d'),
			'user_entry' => $this->session->userdata('nama')
		);
        $result = $this->m_master->save_product($data_prod);
           
        
	    echo $result;
	}

	// DELETE

	public function delete(){
		$kode_kategori = trim($_POST['kode_kategori']);

		$result = $this->m_master->delete_kat($kode_kategori);
		echo json_encode($result);
	}

	public function delete_satuan(){
		$kode_satuan = trim($_POST['kode_satuan']);

		$result = $this->m_master->delete_sat($kode_satuan);
		echo json_encode($result);
	}

	public function delete_supplier(){
		$kode_supplier = trim($_POST['kode_supplier']);

		$result = $this->m_master->delete_supplier($kode_supplier);
		echo json_encode($result);
	}

	public function delete_product(){
		$kode_barang = trim($_POST['kode_barang']);

		$result = $this->m_master->delete_product($kode_barang);
		echo json_encode($result);
	}

	public function pdf(){
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