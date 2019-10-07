<?php
class Sms extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('m_jadwaldosen');
        $this->load->model('m_matakuliah');
        $this->load->library('form_validation');
        $this->load->library('parser');
	}
	function index(){
        $this->load->view("sms/v_input_sms");
    }

    function kirim_sms(){
        $no = $this->input->post('xno');
        $pesan = $this->input->post('xpesan');
        $kunci = "";
        $idpengirim = "";
        $route = "";
        $postdata = array(
            'authkey' => $kunci,
            'mobiles' => $no,
            'message' => $pesan,
            'sender' => $idpengirim,
            'route' => $route
        );
        $url = "http://api.";
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_POST => TRUE,
            CURLOPT_POSTFIELDS => $postdata
        ));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $output = curl_exec($ch);
        if(curl_errno($ch)){
            echo 'error'.curl($ch);
        }
        curl_close($ch);
        ?>
        <p><?php echo $postdata?></p>
        <?php

        
    }


}