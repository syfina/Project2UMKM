<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller {
    public function index()
	{
        $data['title'] = 'Dashbord';
		$this->load->view('template/head', $data);
		// $this->load->view('template/side', $data);
        $this->load->view('dashbord', $data);
        $this->load->view('template/foot');
    }
}