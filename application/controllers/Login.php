<?php
class Login extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('M_login');
        $this->load->library('form_validation');
	}
	function index(){
        $this->load->view("login/v_login");
    }
    
    function masuk(){
        $this->form_validation->set_rules('xnim', 'Nim', 'trim|required|numeric',array('numeric'=>'Masukkan Nim yang valid', 'required'=>'Disisi Please'));
		$this->form_validation->set_rules('xpassword', 'Password', 'trim|required|min_length[10]|max_length[12]');
        $pas= $this->input->post('xpassword');
        echo "hehe";
        if($this->form_validation->run() != false){
            $login_pengguna=array(
                'email_pengguna'=>$this->input->post('xnim'),
                'pass_pengguna'=>$this->input->post('xpassword')
                );
            $datanya=$this->M_login->pengguna_masuk($login_pengguna['email_pengguna'],$login_pengguna['pass_pengguna']);
            if($datanya)
                {
                    redirect('Responsi/krs');
                    
                }
                else{
                    redirect('login');
                }
        }else{
            $this->load->view('login/v_login');
        }
    }
}