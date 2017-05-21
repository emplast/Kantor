<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author emplast
 */
class Admin extends CI_Controller {

    public function index() {
        if (!empty($this->session->userdata('adminUser'))) {

            $this->load->view('admin');
            $this->load->view('footer');
        } else {
            redirect('index.php/Aplikacja/index');
        }
    }

}
