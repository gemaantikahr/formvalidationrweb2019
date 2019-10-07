<?php
class M_mahasiswa extends CI_Model{

    function lihat_profile(){
        $query = $this->db->query("SELECT *FROM tbl_mahasiswa WHERE nim ='1600018095'");
        return $query->result();
    }
    function update_biodata($nim,$nama,$sks,$semester,$nomer){
        $query = $this->db->query("UPDATE tbl_mahasiswa SET nama='$nama', sks='$sks', semester='$semester', nomer='$nomer' WHERE nim='$nim'");
        return $query;
    }

}