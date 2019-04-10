
<?php
class M_jadwaldosen extends CI_Model{

    public function lihat_dosen(){
        $query = $this->db->query("SELECT *FROM tbl_dosen");
        return $query->result();
    }

    public function lihat_matkul(){
        $query = $this->db->query("SELECT *FROM tbl_matakuliah");
        return $query->result();
    }

    public function dosen_matkul(){
        $query = $this->db->query("SELECT *FROM tbl_matkuldosen, tbl_dosen, tbl_matakuliah
        WHERE tbl_matkuldosen.id_matkul = tbl_matakuliah.id_matkul AND tbl_matkuldosen.id_dosen = tbl_dosen.id_dosen");
        return $query->result();

    }


}