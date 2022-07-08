<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    
   public function __construct()
   {
    parent::__construct();
    $this->load->model("users_model");
    
   }
    
    public function index()
	{
        $data['title'] = "Data users";
        $data['users'] = $this->users_model->get_data('users')->result();
		$this->load->view('template/head', $data);
		// $this->load->view('template/side', $data);
        $this->load->view('users', $data);
        $this->load->view('template/foot');
    }

    public function tambah()
    {
        $data['title'] = "Tambah users";
       
		$this->load->view('template/head', $data);
		// $this->load->view('template/side', $data);
        $this->load->view('tambah_users');
        $this->load->view('template/foot');
    }
    public function tambah_aksi()
    {
$data = array(
    'username' => $this->input->post('usersname'),
    'password' => $this->input->post('pass'),
    'email' => $this->input->post('email'),
    'created_at' => $this->input->post('crt_at'),
    'last_login' => $this->input->post('lst_lgn'),
    'status' => $this->input->post('stat'),
    'role' => $this->input->post('role'),
);
$this->users_model->insert_data($data, 'users');
redirect('users');
}
public function edit($id)
{
    $data = array(
        'id' => $id,
        'usersname' => $this->input->post('usersname'),
        'password' => $this->input->post('pass'),
        'email' => $this->input->post('email'),
        'created_at' => $this->input->post('crt_at'),
        'last_login' => $this->input->post('lst_lgn'),
        'status' => $this->input->post('stat'),
        'role' => $this->input->post('role'),
    );
    $this->user_model->update_data($data, 'users');
    redirect('users');
}
public function delete($id)
{
$where = array('id' => $id);
$this->user_model->delete_data($where, 'users');
redirect('users');
}
}