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