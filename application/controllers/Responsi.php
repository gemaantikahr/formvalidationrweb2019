<?php
class Responsi extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_matakuliah');
        $this->load->model('m_konsumen');
        $this->load->model('m_mahasiswa');
        $this->load->library('form_validation');
    }
    
    function index(){
        $this->load->view("mahasiswa/v_tampil_krs");
    }

    function biodata(){
        $data['biodata'] = $this->m_mahasiswa->lihat_profile();
        $this->load->view("mahasiswa/v_biodata", $data);
    }
    function edit_biodata($nim){
        $data['biodata'] = $this->m_mahasiswa->lihat_profile();
        $this->load->view("mahasiswa/v_edit_biodata", $data);
    }
    function update_biodata(){
        $nim = $this->input->post('xnim');
        $nama = $this->input->post('xnama');
        $sks = $this->input->post('xsks');
        $semester = $this->input->post('xsemester');
        $nomer = $this->input->post('xnomer');
        $this->m_mahasiswa->update_biodata($nim,$nama,$sks,$semester,$nomer);
        redirect('responsi/biodata');
    }

    function ambil_matkul(){
        $data['matkul'] = $this->m_matakuliah->tampil_matkul();
        $this->load->view("mahasiswa/v_ambil_matkul", $data);
    }
    function simpan_matkul(){
        $idmatkul = $this->input->post('xidmatkul');
        $this->m_matakuliah->simpan_matkul($idmatkul);
        redirect('responsi/krs');
    }

    function krs(){
        $data['krs'] = $this->m_matakuliah->tampil_krs();
        $this->load->view('mahasiswa/v_tampil_krs', $data);
    }
    
}