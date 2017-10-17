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


        if ($this->session->userdata('user') == NULL) {
            $data = array('user' => NULL);
        } else {
            redirect('index.php/Aplikacja/index');
        }
        if ($this->session->userdata('login') == NULL) {
            $data['login'] = NULL;
            $data['login_text'] = NULL;
            $data['login_link'] = NULL;
        } else if ($this->session->userdata('login') == 0) {
            $data['login'] = 0;
            $data['login_text'] = "Panel administracyjny";
            $data['login_link'] = base_url('index.php/Admin/index');
        } else if ($this->session->userdata('login') == 1) {
            $data['login'] = 1;
            $data['login_text'] = "Panel osobisty obsługi";
            $data['login_link'] = base_url('index.php/AdminUser/index');
        } else if ($this->session->userdata('login') == 2) {
            $data['login'] = 1;
            $data['login_text'] = "Twój portfel ";
            $data['login_link'] = base_url('index.php/PanelUser/index');
        }
        $this->load->view('headerAplikacja', $data);
        $this->load->view('login');
        $this->load->view('footerAplikacja');
    }

    public function loginUser() {

        $this->load->model('addUser_model');
        $login = new AddUser_model();


        if ($login->user($this->input->post('part_1'), md5($this->input->post('part_2')))['wynik'] == TRUE) {
            $this->session->set_userdata('user', $this->input->post('part_1'));
            if ($login->login($this->input->post('part_1')) == 'Administrator') {
                $this->session->set_userdata('login', 1);
            }
            if ($login->login($this->input->post('part_1')) == 'Obsługa') {
                $this->session->set_userdata('login', 2);
            }
            if ($login->login($this->input->post('part_1')) == 'Klient') {
                $this->session->set_userdata('login', 3);
            }

            redirect('index.php/Aplikacja/index');
        } else {
            redirect('index.php/Login/index');
        }
    }

    public function out() {
        if ($this->session->userdata('user') != NULL) {
            $this->load->helper('form');
            $this->session->set_userdata(array('user' => NULL, 'zalogowany' => NULL, 'login' => NULL));

            if ($this->session->userdata('user') == NULL) {
                $data = array('user' => NULL);
            } else {
                $data = array('user' => $this->session->userdata('user'));
            }
            if ($this->session->userdata('login') == NULL) {
                $data['login'] = NULL;
                $data['login_text'] = NULL;
                $data['login_link'] = NULL;
            } else if ($this->session->userdata('login') == 1) {
                $data['login'] = 0;
                $data['login_text'] = "Panel administracyjny";
                $data['login_link'] = base_url('index.php/Admin/index');
            } else if ($this->session->userdata('login') == 2) {
                $data['login'] = 1;
                $data['login_text'] = "Panel osobisty obsługi";
                $data['login_link'] = base_url('index.php/AdminUser/index');
            } else if ($this->session->userdata('login') == 3) {
                $data['login'] = 1;
                $data['login_text'] = "Twój portfel ";
                $data['login_link'] = base_url('index.php/PanelUser/index');
            }
            $this->load->view('headerAplikacja', $data);
            $this->load->view('loginOut');
            $this->load->view('footerAplikacja');
        } else {
            redirect('index.php/Aplikacja/index');
        }
    }

}
