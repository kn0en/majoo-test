<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['heading'] = 'Admin | Login';

        if($this->session->userdata('username')){
            redirect('admin');
        }

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tbl_admin', ['username' => $username])->row_array();

        if ($user) {

            if (password_verify($password, $user['password'])) {

                $data = [
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);
                redirect('Admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Wrong password!</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Username is not registered!</div>');
            redirect('Auth');
        }
    }

    public function registration()
    {
        $data['heading'] = 'Admin | Registration';
        
        if($this->session->userdata('username')){
            redirect('admin');
        }
        
        $this->form_validation->set_rules('fullname', 'Fullname', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tbl_admin.username]', [
            'is_unique' => 'Username already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password not match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
        
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $this->Admin_model->insertDataAdmin();
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Registration success! Please Login.</div>');
            redirect('Auth');
        }
    }

    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Logout success!</div>');
        redirect('Auth');
    }
}
