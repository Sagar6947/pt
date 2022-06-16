<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $get['title'] = "Admin Login";
        $get['favicon'] = "assets/images/logo.png";
        if ($this->session->userdata('admin_id')) {
            redirect(base_url('admin_Dashboard'));
        } else {
            $this->load->view('admin/login', $get);
        }
    }

    public function adminlogin()
    {
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
        if ($this->form_validation->run()) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $data =  $this->CommonModal->getRowById('tbl_admin', 'username', $username);
            if ($data) {

                $id = $data[0]['admin_id'];
                $f_username = $data[0]['username'];
                $f_password = $data[0]['password'];

                if ($password != $f_password) {
                    flashData('login_error', 'Enter a valid Password.');
                } else {
                    $this->session->set_userdata(array('admin_id' => $id, 'username' => $username));
                    redirect('Admin_Dashboard/blogs');
                }
            } else {
                flashData('login_error', 'Enter a valid Username ');
            }
        }
        $this->load->view('admin/login');
    }

    public function logout()
    {
        $this->load->library('session');
        $this->session->unset_userdata('admin_login');
        redirect(base_url('admin'));
    }
}
