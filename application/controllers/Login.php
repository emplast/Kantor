<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author emplast
 */
class Login extends CI_Controller {

    public function index() {
        $this->load->helper('form');

        if ($this->session->userdata('user') == NULL) {
            $data = array('user' => NULL);
        } else {
            redirect('index.php/Aplikacja/index');
        }
        $this->load->view('headerAplikacja', $data);
        $this->load->view('login');
        $this->load->view('footerAplikacja');
    }

    public function loginUser() {
        $this->load->helper('form');
        $this->load->model('addUser_model');

        $login = new AddUser_model();

        if ($login->user($this->input->post('part_1'))['wynik'] == TRUE) {
            $this->session->set_userdata('user', $this->input->post('part_1'));
            redirect('index.php/Aplikacja/index');
        } else {
            redirect('index.php/Login/index');
        }
    }

    public function out() {
        if ($this->session->userdata('user') != NULL) {
            $this->load->helper('form');
            $this->session->set_userdata(array('user' => NULL, 'zalogowany' => NULL));
            if ($this->session->userdata('user') == NULL) {
                $data = array('user' => NULL);
            } else {
                $data = array('user' => $this->session->userdata('user'));
            }
            $this->load->view('headerAplikacja', $data);
            $this->load->view('loginOut');
            $this->load->view('footerAplikacja');
        } else {
            redirect('index.php/Aplikacja/index');  
        }
    }

}
