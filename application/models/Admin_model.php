<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function insert_data_debitur(){
        $data = array(
            "id_debitur"    =>$this->input->post("iddebitur"),
            "username"      =>$this->input->post("username"),
            "password"      =>$this->input->post("notelp"),
            "nama"          =>$this->input->post("nama"),
            "nama_barang"   =>$this->input->post("nama_barang"),
            "alamat"        =>$this->input->post("alamat"),
            "harga_barang"  =>$this->input->post("harga_barang"),
            "nik"           =>$this->input->post("nik"),
            "jatuh_tempo"   =>$this->input->post("jatuh_tempo"),
            "no_telp"       =>$this->input->post("notelp"),
            "cicilan_min"   =>$this->input->post("cicilan_min"),
            "email"         =>$this->input->post("email"),
            "pekerjaan"     =>$this->input->post("pekerjaan")
            );
        $this->db->insert("debitur",$data);
    }

    public function fetch_data_debitur(){
        $this->db->select("*");
        $this->db->from("debitur");
        $query=$this->db->get();
        return $query;
    }

    public function getkodedebitur($table) { 
            $this->db->select("RIGHT(debitur.id_debitur,3) AS kode ");
            $this->db->order_by('id_debitur', 'DESC');
            $this->db->limit(1);
            $query = $this->db->get('debitur');
            if($query->num_rows()>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
            $kodejadi  = "DB".$kodemax;
            return $kodejadi;
   } 

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */