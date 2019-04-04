
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_matakuliah extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function insert($data){
        $this->db->insert('tbl_matkul', $data);
        if($this->db->affected_rows()=='1'){
            return TRUE;
        }
        return FALSE;
    }

    function tampil_matkul(){
        return $this->db->get('tbl_matkul')->result();
    }

    function get_data(){
        $data=array();
        $q = $this->db->get('tbl_matkul');
        if($q->num_rows()>0){
            foreach($q->result_array() as $row){
                $data[] = $row;
            }
        }
        $q->free_result();
        return $data;
    }
    
    function getmkid($idmk){
        $data=array();
        $this->db->where('id_matkul', $idmk);
        $q = $this->db->get('tbl_matkul');
        if($q->num_rows()>0){
            foreach($q->result_array() as $row){
                $data[] = $row;
            }
        }
        $q->free_result();
        return $data;
    }

    function getmksemester($mk){
        $data=array();
        $this->db->select('*');
        $this->db->like('semester',$mk);
        $q = $this->db->get('tbl_matkul');
        if($q->num_rows()>0){
            foreach($q->result_array() as $row){
                $data[] = $row;
            }
        }
        $q->free_result();
        return $data;
    }

    function simpanmatkul($nama, $semester){
        $query = $this->db->query("INSERT INTO tbl_matkul(nama_matkul, semester) VALUES('$nama','$semester')");
        return $query;
    }

    function hapusmatkul($id_matkul){
        $query = $this->db->query("DELETE FROM tbl_matkul WHERE id_matkul='$id_matkul'");
        return $query;
    }

    function editmatkul($id_matkul){
        $query = $this->db->query("SELECT *FROM tbl_matkul WHERE id_matkul='$id_matkul'");
        return $query->result();
    }

    function updatematkul($id,$nama, $semester){
        $query = $this->db->query("UPDATE tbl_matkul set nama_matkul='$nama', semester='$semester' WHERE id_matkul='$id'");
        return $query;
    }
}