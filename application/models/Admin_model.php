<?php

class Admin_model extends CI_Model{

	function insert_data($data){
		$this->db->insert("debitur",$data);
	}

	function fetch_data(){
		$this->db->select("*");
		$this->db->from("debitur");
		$query=$this->db->get();
		return $query;
	}
	function kode_otomatis(){
            $this->db->select('Right(debting.id_debitur,2) as kode',false);
            $this->db->order_by('id_debitur', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('debting');
            if($query->num_rows()<>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,2,"0",STR_PAD_LEFT);
            $kodejadi  = "KD".$kodemax;
            return $kodejadi;

        }
}