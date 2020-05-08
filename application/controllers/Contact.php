<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller
{  
	public function index(){
		$data = array();
		if ($this->input->post('sendmsg')) {
			$name = $this->input->post('name');
		 	$from = $this->input->post('email');
		 	$subject = $this->input->post('subjects');
		 	$htmlcontent = $this->input->post('message');
		 	$config = array(
                'protocol'  => 'smtp',
                'smtp_host' => 'tls://email-smtp.us-east-1.amazonaws.com',
                'smtp_port' => '465',
                'smtp_user' => 'AKIAYNWYP3XR6DWIJAB5',
                'smtp_pass' => 'BGr2PjU6PFlXF8ucTkNAj/nghxPsPg9fwM0FBTgSPMZR',
                'mailtype'  => 'html',
                'charset'   => 'utf-8',

                'newline' => '\r\n'
            );
            $this->email->initialize($config);
            $this->email->set_mailtype("html");
            $this->email->set_newline("\r\n");
            $this->email->to('priya.panchal923@gmail.com');
            $this->email->from($from,'Abstract Creation');
            $this->email->subject($subject);
            $this->email->message($htmlcontent);
            if($this->email->send()){
              return true;
            } else {
              return false;  
            }
            redirect(base_url('contact'));
		}
		$this->load->view('theme/header',$data);    
		$this->load->view('contact',$data);  
		$this->load->view('theme/footer',$data);  
	}
}