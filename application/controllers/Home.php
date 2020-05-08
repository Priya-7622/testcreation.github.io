<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{  
	public function index(){
		$data = array();
		$this->load->view('theme/header',$data);    
		$this->load->view('home',$data);  
		$this->load->view('theme/footer',$data);  
	}
	public function homold(){
		$data = array();
		$this->load->view('theme/header',$data);    
		$this->load->view('home-old',$data);  
		$this->load->view('theme/footer',$data);  
	}
}