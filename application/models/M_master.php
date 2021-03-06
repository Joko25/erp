<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Model{
	// GET MASTER
	public function getuser(){		
		$this->datatables->select('id, username, full_name, email, status, img');
        $this->datatables->add_column('poto', '<img src="'.base_url().'assets/img/$1" width=20> $1', 'img');
        $this->datatables->from('admin');
        return $this->datatables->generate();
	}

	public function getkat(){
		$this->datatables->select('kode_kategori, nama_kategori, ket_kategori, last_update, user_entry');
		$this->datatables->add_column('no', '0');
        $this->datatables->from('mst_kategori');

        return $this->datatables->generate();
	}

	public function getsat(){
		$this->datatables->select('kode_satuan, nama_satuan, last_update, user_entry');
		$this->datatables->add_column('no', '0');
        $this->datatables->from('mst_satuan');

        return $this->datatables->generate();
	}

	public function getsupplier(){
		$this->datatables->select('kode_supplier, nama_supplier, alamat_supplier, telp_supplier, ket_supplier');
		$this->datatables->add_column('no', '0');
        $this->datatables->from('mst_supplier');

        return $this->datatables->generate();
	}

	public function getcustomer(){
		$this->datatables->select('kode_customer, nama_customer, alamat_customer, telp_customer, ket_customer');
		$this->datatables->add_column('no', '0');
        $this->datatables->from('mst_customer');

        return $this->datatables->generate();
	}

	public function getproduct(){
		$this->datatables->select('mst_product.kode_barang, mst_product.nama_barang, mst_product.kode_kategori, mst_product.kode_satuan, mst_kategori.ket_kategori, mst_satuan.nama_satuan, mst_product.spesifikasi, mst_product.harga_beli, mst_product.harga_jual, mst_product.gambar,  mst_product.last_update, mst_product.user_entry');
		$this->datatables->add_column('no', '0');
		// $this->datatables->add_column('mst_product.gambar', '<img src="'.base_url().'assets/uploads/$1" width=20> $1', 'mst_product.gambar');
        $this->datatables->from('mst_product');
        $this->datatables->join('mst_kategori', 'mst_product.kode_kategori=mst_kategori.kode_kategori');
        $this->datatables->join('mst_satuan', 'mst_product.kode_satuan=mst_satuan.kode_satuan');

        return $this->datatables->generate();
	}

	public function get_editusr($where) {
	    $query = $this->db->get_where('admin', $where);

	    if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	        return false;
	    }
	}

	// JSON
	public function jsonkat() {
	    $query = $this->db->get('mst_kategori');
	    // echo $query;

	    if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	        return false;
	    }
	}

	public function jsonsupplier(){
		// $this->db->select('kode_supplier, nama_supplier, alamat_supplier');
        $query = $this->db->get('mst_supplier');

        if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	        return false;
	    }

	}

	public function jsonsat() {
	    $query = $this->db->get('mst_satuan');
	    // echo $query;

	    if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	        return false;
	    }
	}

	public function jsonproduct() {
	    $query = $this->db->get('mst_product');
	    // echo $query;

	    if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	        return false;
	    }
	}

	public function jsonproductdtl($where) {
		// $this->db->where();
	    $query = $this->db->get_where('mst_product', $where);
	    // echo $query;

	    if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	        return false;
	    }
	}

	// SAVE

	public function save_usr($data){
		$query = $this->db->insert('admin', $data);
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function save_kat($data){
		$query = $this->db->insert('mst_kategori', $data);
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function save_sat($data){
		$query = $this->db->insert('mst_satuan', $data);
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function save_supplier($data){
		$query = $this->db->insert('mst_supplier', $data);
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function save_customer($data){
		$query = $this->db->insert('mst_customer', $data);
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function save_product($data){
		$query = $this->db->insert('mst_product', $data);
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	// EDIT

	public function update_product($data){
		$kode_barang = $data['kode_barang'];
		$nama_barang = $data['nama_barang'];
		$kode_kategori = $data['kode_kategori'];
		$kode_satuan = $data['kode_satuan'];
		$harga_beli = $data['harga_beli'];
		$harga_jual = $data['harga_jual'];
		$gambar = $data['gambar'];
		$spesifikasi = $data['spesifikasi'];
		$last_update = $data['last_update'];
		$user_entry = $data['user_entry'];

		$this->db->set('nama_barang', $nama_barang);
		$this->db->set('kode_kategori', $kode_kategori);
		$this->db->set('kode_satuan', $kode_satuan);
		$this->db->set('harga_beli', $harga_beli);
		$this->db->set('harga_jual', $harga_jual);
		if ($gambar !='') {
			# code...
			$this->db->set('gambar', $gambar);
		}
		$this->db->set('spesifikasi', $spesifikasi);
		$this->db->set('last_update', $last_update);
		$this->db->set('user_entry', $user_entry);
		

		$this->db->where('kode_barang', $kode_barang);

		$query = $this->db->update('mst_product');
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function update_usr($data){
		$id = $data['id'];
		$username = $data['username'];
		$password = $data['password'];
		$full_name = $data['full_name'];
		$email = $data['email'];
		$status = $data['status'];
		$img = $data['img'];
		$this->db->set('username', $username);
		if ($password !='') {
			# code...
			$this->db->set('password', md5($password));
		}
		$this->db->set('full_name', $full_name);
		$this->db->set('email', $email);
		$this->db->set('status', $status);
		$this->db->set('img', $img);
		$this->db->where('id', $id);

		$query = $this->db->update('admin');
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function update_kat($data){
		$kode_kategori = $data['kode_kategori'];
		$nama_kategori = $data['nama_kategori'];
		$ket_kategori = $data['ket_kategori'];
		$last_update = $data['last_update'];
		$user_entry = $data['user_entry'];
		
		$this->db->set('nama_kategori', $nama_kategori);
		$this->db->set('ket_kategori', $ket_kategori);
		$this->db->set('last_update', $last_update);
		$this->db->set('user_entry', $user_entry);
		$this->db->where('kode_kategori', $kode_kategori);
		

		$query = $this->db->update('mst_kategori');
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function update_sat($data){
		$kode_satuan = $data['kode_satuan'];
		$nama_satuan = $data['nama_satuan'];
		$last_update = $data['last_update'];
		$user_entry = $data['user_entry'];
		
		$this->db->set('nama_satuan', $nama_satuan);
		$this->db->set('last_update', $last_update);
		$this->db->set('user_entry', $user_entry);
		$this->db->where('kode_satuan', $kode_satuan);
		

		$query = $this->db->update('mst_satuan');
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function update_supplier($data){

		$kode_supplier = $data['kode_supplier'];
		$nama_supplier = $data['nama_supplier'];
		$alamat_supplier = $data['alamat_supplier'];
		$telp_supplier = $data['telp_supplier'];
		$ket_supplier = $data['ket_supplier'];
		$last_update = $data['last_update'];
		$user_entry = $data['user_entry'];

		
		$this->db->set('nama_supplier', $nama_supplier);
		$this->db->set('alamat_supplier', $alamat_supplier);
		$this->db->set('telp_supplier', $telp_supplier);
		$this->db->set('ket_supplier', $ket_supplier);
		$this->db->set('last_update', $last_update);
		$this->db->set('user_entry', $user_entry);
		
		$this->db->where('kode_supplier', $kode_supplier);
		

		$query = $this->db->update('mst_supplier');
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function update_customer($data){

		$kode_customer = $data['kode_customer'];
		$nama_customer = $data['nama_customer'];
		$alamat_customer = $data['alamat_customer'];
		$telp_customer = $data['telp_customer'];
		$ket_customer = $data['ket_customer'];
		$last_update = $data['last_update'];
		$user_entry = $data['user_entry'];

		
		$this->db->set('nama_customer', $nama_customer);
		$this->db->set('alamat_customer', $alamat_customer);
		$this->db->set('telp_customer', $telp_customer);
		$this->db->set('ket_customer', $ket_customer);
		$this->db->set('last_update', $last_update);
		$this->db->set('user_entry', $user_entry);
		
		$this->db->where('kode_customer', $kode_customer);
		

		$query = $this->db->update('mst_customer');
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}


	// DELETE

	public function delete_usr($id){
		$this->db->where('id', $id);
		$query = $this->db->delete('admin');
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function delete_kat($kode){
		$this->db->where('kode_kategori', $kode);
		$query = $this->db->delete('mst_kategori');
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function delete_sat($kode){
		$this->db->where('kode_satuan', $kode);
		$query = $this->db->delete('mst_satuan');
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function delete_supplier($kode){
		$this->db->where('kode_supplier', $kode);
		$query = $this->db->delete('mst_supplier');
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function delete_customer($kode){
		$this->db->where('kode_customer', $kode);
		$query = $this->db->delete('mst_customer');
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function delete_product($kode){
		$this->db->where('kode_barang', $kode);
		$query = $this->db->delete('mst_product');
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}

	public function print_user(){
        return $this->db->get('admin')->result();
	}
}