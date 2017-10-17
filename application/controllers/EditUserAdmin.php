<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EditUserAdmin
 *
 * @author emplast
 */
class EditUserAdmin extends CI_Controller {

    public function index() {
        $this->load->model('userAdministracja_model');
        $model = new UserAdministracja_model();
        $id = $this->input->post('part_7a');
        $model->editUserAdmin($id);
        redirect('index.php/UserProfile/index');
    }

    public function edit() {
        $this->load->model('userAdministracja_model');
        $model = new UserAdministracja_model();
        $model->editDataUserAdmin($this->session->userdata('user'));
        redirect('index.php/AdminUserProfile/index');
    }

}
