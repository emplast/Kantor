<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewUserAdd
 *
 * @author emplast
 */
class NewUserAdd extends CI_Controller {

    public function index() {
        $this->load->helper('form');
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
            $data['login_text'] = "Twój portfel";
            $data['login_link'] = base_url('index.php/PanelUser/index');
        }
        $this->load->view('headerAplikacja', $data);
        $this->load->view('newUserAdd');
        $this->load->view('footerAplikacja');
    }

    public function addUser() {

        $this->load->library('form_validation');
        $this->load->helper('form');

        $this->form_validation->set_rules('part_1', 'Login', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('part_2', 'Hasło', 'required', 'required');
        $this->form_validation->set_rules('part_3', 'Imie', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('part_4', 'Nazwisko', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('part_5', 'Email', 'required|min_length[3]|max_length[100]|valid_email');
        $this->form_validation->set_rules('part_6', 'TelKomorkowy', 'required|max_length[100]');
        $this->form_validation->set_rules('defaultReal', 'Captcha', 'required|callback_hash');
        $this->form_validation->set_rules('part_8', 'osoba_fizyczna', 'callback_checkbox');
        $this->form_validation->set_rules('part_9', 'instytucja_firma', 'callback_checkbox');
        $this->form_validation->set_rules('part_10', 'kantor', 'callback_checkbox');


        $this->form_validation->set_message('required', 'Pole {field} nie może być puste !!!');
        $this->form_validation->set_message('min_length', 'Pole %s musi zawierać minimum 5 zanaków !!!');
        $this->form_validation->set_message('max_length', 'Pole %s może zawierać maximum 100 zanaków !!!');
        $this->form_validation->set_message('valid_email', 'Podałeś nieprawidłowy adres e-mail !!! ');
        $this->form_validation->set_message('hash', 'Podałeś złe dane !!!');
        $this->form_validation->set_message('checkbox', 'Zaznacz rodzaj klienta');

        if ($this->form_validation->run() == FALSE) {

            $this->load->helper('form');
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
                $data['login'] = 2;
                $data['login_text'] = "Twój portfel";
                $data['login_link'] = base_url('index.php/PanelUser/index');
            }
            $this->load->view('headerAplikacja', $data);
            $this->load->view('newUserAdd');
            $this->load->view('footerAplikacja');
        } else {

            $this->sprawdzenie();
            redirect('index.php/Login/index');
        }
    }

    public function sprawdzenie() {
        $this->load->model('addUser_model');
        $login = new AddUser_model();
        if ($login->addUser() < 0 || $login->addUser() == null) {
            $login->saveUser();
        } else {
            redirect('index.php/Login/index');
        }
    }

    function rpHash($value) {
        $hash = 5381;
        $value = strtoupper($value);
        for ($i = 0; $i < strlen($value); $i++) {
            $hash = ($this->leftShift32($hash, 5) + $hash) + ord(substr($value, $i));
        }
        return $hash;
    }

    function leftShift32($number, $steps) {
        $binary = decbin($number);
        $binary = str_pad($binary, 32, "0", STR_PAD_LEFT);
        $binary = $binary . str_repeat("0", $steps);
        $binary = substr($binary, strlen($binary) - 32);
        return ($binary{0} == "0" ? bindec($binary) :
                -(pow(2, 31) - bindec(substr($binary, 1))));
    }

    function hash() {
        if ($this->rpHash($this->input->post('defaultReal')) == $this->input->post('realHash')) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function checkbox() {
        if ($this->input->post('part_8') != TRUE & $this->input->post('part_8') == NULL & $this->input->post('part_9') != TRUE & $this->input->post('part_9') == NULL & $this->input->post('part_10') == NULL & $this->input->post('part_10') != TRUE) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
