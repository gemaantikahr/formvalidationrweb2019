<?php
class Dashboard extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('m_jadwaldosen');
        $this->load->model('m_matakuliah');
        $this->load->library('form_validation');
        $this->load->library('parser');
	}
	function index(){
        $data = array(
            'nama'=>'herman',
            'niy'=>'123',
            'content' => 'prak5/v_dosen_layout'
        );
        $this->parser->parse('prak5/v_template', $data);
    }

    public function dosen(){
        $data=array(
            'datadosen' => $this->m_jadwaldosen->lihat_dosen(),
            'dosen'=> array('herman','fiftin'),
            'content'=> 'prak5/v_dosen_layout2',
        );
        $this->parser->parse('prak5/v_template',$data);
    }

    public function matkul(){
        $data=array(
            'matkul'=> $this->m_matakuliah->tampil_matkul(),
            
            'content'=> 'prak5/v_matkul',
        );
        $this->parser->parse('prak5/v_template',$data);
    }

    public function jadwaldosen(){
        $data=array(
            'datadosen' => $this->m_jadwaldosen->lihat_dosen(),
            'matkul'=> $this->m_matakuliah->tampil_matkul(),
            'dosenmatkul' => $this->m_jadwaldosen->dosen_matkul(),
            'content'=> 'prak5/v_jadwaldosen',
        );
        $this->parser->parse('prak5/v_template',$data);
    }

}