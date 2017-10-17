<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddPhotoAdminUser
 *
 * @author emplast
 */
class AddPhotoAdminUser extends CI_Controller {

    public function index() {
        $this->load->model('userAdministracja_model');
        $model = new UserAdministracja_model();
        $this->upload();
        $model->editPhotoAdmin($this->session->userdata('user'));
        redirect('index.php/AdminUserProfile/index');
    }
    public function upload() {

        $config['upload_path'] = './jpg/adminUser/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '350';
        $config['max_height'] = '300';
        $this->load->library('upload', $config);

        $this->upload->do_upload();
        $data = array('upload_data' => $this->upload->data());
        $this->input->set_cookie('plik', $this->upload->data()['file_name'], 36);
    }

}
