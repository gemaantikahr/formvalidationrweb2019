<?php
class Nlp extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_jadwaldosen');
        $this->load->model('m_matakuliah');
        $this->load->library('form_validation');
        }
        
        function index(){
                $this->load->view("nlp/v_input");
        }

        function proses(){
                $data['wordword'] = $this->input->post('xword');
                $data['katadasar'] = $this->m_jadwaldosen->kata_dasar();
                $this->load->view("nlp/v_nlp", $data);
        }

}

?>