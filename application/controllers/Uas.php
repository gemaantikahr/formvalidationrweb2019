<?php
class Uas extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_matakuliah');
        $this->load->library('form_validation');
    }
    
    public function index(){

    }

    public function tampilarray1(){
        $data['array'] = array('merah','kuning','hijau');
        $this->load->view('uas/array1',$data);
    }
    public function tampilarray2(){
        $data['array'] = array(
            'warna' => array('Merah','Kuning','Hijau'),
            'bentuk' => array('kotak','bulat','lonjong'),
            'kualitas' => array('sangat bagus','bagus','cukup'),
        );
        $this->load->view('uas/array2',$data);
    }

    
}