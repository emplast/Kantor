<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminUser
 *
 * @author emplast
 */
class AdminUser extends CI_Controller {

    public function index() {
        $this->load->model('userAdministracja_model');
        $model = new UserAdministracja_model();
        if ($this->session->userdata('user') == NULL) {
            $data = array('user' => NULL);
            redirect('index.php/Aplikacja/index');
        } else {
            $data = array('user' => $this->session->userdata('user'));
        }
        $data['photo'] = $model->photoAdminUser($this->session->userdata('user'));
        $this->load->view('adminUser', $data);
        $this->load->view('footer');
    }

}
