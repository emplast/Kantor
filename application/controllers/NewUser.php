<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewUser
 *
 * @author emplast
 */
class NewUser extends CI_Controller {
    
    public function index(){
        $this->load->helper('form');
        
        $this->load->view('admin');
        $this->load->view('newUser');
        $this->load->view('footer');
    }
    public function add() {
        if (!empty($this->session->userdata('adminUser'))) {
            $this->load->model('addUserAdministracja_model');
            $this->upload();
            $addUser=new AddUserAdministracja_model();
            $addUser->addUserAdmin();
            $this->load->view('admin');
            $this->load->view('footer');
            redirect('index.php/NewUser/index');
        }
    }
    public function upload(){
        
        $config['upload_path'] = './jpg/adminUser/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '350';
        $config['max_height'] = '300';
        $this->load->library('upload', $config);
        
        $this->upload->do_upload();
        $data = array('upload_data' => $this->upload->data());
        $this->input->set_cookie('zdjecie',$this->input->post('userfile'),36);
    }

  
}
