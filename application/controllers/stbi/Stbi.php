<?php
class Stbi extends CI_Controller{
	function __construct(){
        parent::__construct();

	}
	function index(){
        $this->load->view('stbi/v_pertama');
    }

}