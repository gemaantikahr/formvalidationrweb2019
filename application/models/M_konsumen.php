<?php
class M_konsumen extends CI_Model{
    public function tampil_konsumen(){
        $query = $this->db->query("SELECT *FROM tbl_konsumen");
        return $query->result();
    }
    public function simpan_barang($nama, $harga, $jumlah){
        $tanggal = date('y-m-d');
        $totalharga = $harga*$jumlah;
        $diskon = $totalharga*0.2;
        $hargadiskon = $totalharga-$diskon;
        $query = $this->db->query("INSERT INTO tbl_konsumen(nama_barang,harga_satuan,jumlah,total_harga,harga_diskon, tanggal)
        VALUES('$nama','$harga','$jumlah','$totalharga','$hargadiskon','$tanggal')");
        return $query;
    }
    public function edit_barang($idbarang){
        $query = $this->db->query("SELECT *FROM tbl_konsumen WHERE id_konsumen='$idbarang'");
        return $query->result();
    }
    public function update_barang($nama, $harga, $jumlah, $id){
        $totalharga = $harga*$jumlah;
        $diskon = $totalharga*0.2;
        $hargadiskon = $totalharga-$diskon;
        $query = $this->db->query("UPDATE tbl_konsumen SET nama_barang='$nama', harga_satuan='$harga', jumlah='$jumlah', total_harga='$totalharga', harga_diskon='$hargadiskon'
        WHERE id_konsumen='$id'");
        return $query;
    }
    public function hapus_barang($id){
        $query = $this->db->query("DELETE FROM tbl_konsumen WHERE id_konsumen='$id'");
        return $query;
    }

}