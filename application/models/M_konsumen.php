<?php
class M_konsumen extends CI_Model{
    public function tampil_konsumen(){
        $query = $this->db->query("SELECT *FROM tbl_konsumen");
        return $query->result();
    }

    public function simpan_barang($nama, $harga, $jumlah){
        $query = $this->db->query("INSERT INTO tbl_konsumen(nama_barang,harga_satuan,jumlah)
        VALUES('$nama','$harga','$jumlah')");
        return $query;
    }

    public function edit_barang($idbarang){
        $query = $this->db->query("SELECT *FROM tbl_konsumen WHERE id_konsumen='$idbarang'");
        return $query->result();
    }

    public function update_barang($nama, $harga, $jumlah, $id){
        $query = $this->db->query("UPDATE tbl_konsumen SET nama_barang='$nama', harga_satuan='$harga', jumlah='$jumlah'
        WHERE id_konsumen='$id'");
        return $query;
    }

    public function hapus_barang($id){
        $query = $this->db->query("DELETE FROM tbl_konsumen WHERE id_konsumen='$id'");
        return $query;
    }

}