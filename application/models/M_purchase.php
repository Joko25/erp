<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_purchase extends CI_Model{
	public function getfaktur(){
		$bln = date('m');
		$thn = date('Y');
		$this->db->select("concat(coalesce(lpad(cast(cast(substr(max(no_faktur), 1, 4) as UNSIGNED)+1 as CHAR(4)), 4, '0'),  '0001'), '/PO/$bln/$thn') as kode ");
		$query = $this->db->get('po_master');
	    // echo $query;

	    if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	        return array("kode"=>'0001/PO/$bln/$thn');
	    }
	}

	public function save($data){
		$isidata = $data['data'];
		$no_faktur = $data['no_faktur'];
		$kode_supplier = $data['kode_supplier'];
		$ket_po = $data['ket_po'];
		$po_subtotal = $data['po_subtotal'];
		$po_disc = $data['po_disc'];
		$po_discnominal = $data['po_discnominal'];
		$po_dp = $data['po_dp'];
		$po_ppn = $data['po_ppn'];
		$po_grandtotal = $data['po_grandtotal'];
		$last_update = $data['last_update'];
		$user_entry = $data['user_entry'];

		return $data;
	}

	public function deletepo(){
		$this->db->where('kode_po', '1');
		$query = $this->db->delete('po_master');
		if ($query) {
			# code...
			return json_encode('success');
		}else{
			return json_encode(array('errorMsg'=>'Dupplicate Name'));
		}
	}
}