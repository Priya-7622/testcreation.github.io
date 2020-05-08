<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Aboutus extends CI_Controller
{  
	public function index(){
		$data = array();
		$this->load->view('theme/header',$data);    
		$this->load->view('aboutus',$data);  
		$this->load->view('theme/footer',$data);  
	}
}