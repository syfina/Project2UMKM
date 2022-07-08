<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {

        $this->load->view('login');
    }

    public function masuk()
    {

        $this->load->model("login_model", "user");
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $row = $this->user->login($_username, $_password);
        if (isset($row)) {
            redirect('dashbord');
        } else {
            redirect('login');
        }
    }
}