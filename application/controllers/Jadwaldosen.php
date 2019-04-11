<?php
class Jadwaldosen extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_jadwaldosen');
        $this->load->model('m_matakuliah');
        $this->load->library('form_validation');
	}
	function index(){
        $data['datadosen'] = $this->m_jadwaldosen->lihat_dosen();
        $data['datamatkul'] = $this->m_matakuliah->tampil_matkul();
        $data['dosenmatkul'] = $this->m_jadwaldosen->dosen_matkul();
        $this->load->view("jadwaldosen/v_tampil_dosen", $data);
    }

}