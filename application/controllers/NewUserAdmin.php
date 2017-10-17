<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewUserAdmin
 *
 * @author emplast
 */
class NewUserAdmin extends CI_Controller {

    public function index() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('part_1', 'Nazwisko', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('part_2', 'Imie', 'required', 'required');
        $this->form_validation->set_rules('part_3', 'Login', 'required|min_length[5]|max_length[100]|callback_login');
        $this->form_validation->set_rules('part_4', 'Hasło', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('part_5', 'Email', 'required|min_length[3]|max_length[100]|valid_email|callback_login');
        $this->form_validation->set_rules('part_6', 'Telefon', 'required|max_length[100]');
        $this->form_validation->set_rules('part_8', 'Obsługi', 'callback_checkbox');
        $this->form_validation->set_rules('part_9', 'Klienta', 'callback_checkbox');

        $this->form_validation->set_message('required', 'Pole {field} nie może być puste !!!');
        $this->form_validation->set_message('min_length', 'Pole %s musi zawierać minimum 5 zanaków !!!');
        $this->form_validation->set_message('max_length', 'Pole %s może zawierać maximum 100 zanaków !!!');
        $this->form_validation->set_message('valid_email', 'Podałeś nieprawidłowy adres e-mail !!! ');
        $this->form_validation->set_message('checkbox', 'Zaznacz pole wyboru uprawnień!!!');
        $this->form_validation->set_message('login', 'Podany login bądz e-mail istnieje!!! ');


        $this->load->model('userAdministracja_model');
        $model = new UserAdministracja_model();
        if ($this->session->userdata('user') == NULL) {
            $data = array('user' => NULL);
            redirect('index.php/Aplikacja/index');
        } else {
            $data = array('user' => $this->session->userdata('user'));
        }
        $data['photo'] = $model->photoAdminUser($this->session->userdata('user'));


        if ($this->form_validation->run() == FALSE) {

            $this->load->view('admin', $data);
            $this->load->view('newUser');
            $this->load->view('footer');
        } else {

            $model->addUserAdmin();
            redirect('index.php/Admin/index');
        }
    }

    public function addUserService() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('part_1', 'Nazwisko', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('part_2', 'Imie', 'required', 'required');
        $this->form_validation->set_rules('part_3', 'Login', 'required|min_length[5]|max_length[100]|callback_login');
        $this->form_validation->set_rules('part_4', 'Hasło', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('part_5', 'Email', 'required|min_length[3]|max_length[100]|valid_email|callback_login');
        $this->form_validation->set_rules('part_6', 'Telefon', 'required|max_length[100]');
        $this->form_validation->set_rules('part_8', 'Obsługi', 'callback_checkbox');
        $this->form_validation->set_rules('part_9', 'Klienta', 'callback_checkbox');

        $this->form_validation->set_message('required', 'Pole {field} nie może być puste !!!');
        $this->form_validation->set_message('min_length', 'Pole %s musi zawierać minimum 5 zanaków !!!');
        $this->form_validation->set_message('max_length', 'Pole %s może zawierać maximum 100 zanaków !!!');
        $this->form_validation->set_message('valid_email', 'Podałeś nieprawidłowy adres e-mail !!! ');
        $this->form_validation->set_message('checkbox', 'Zaznacz pole wyboru uprawnień!!!');
        $this->form_validation->set_message('login', 'Podany login bądz e-mail istnieje!!! ');


        $this->load->model('userAdministracja_model');
        $model = new UserAdministracja_model();
        if ($this->session->userdata('user') == NULL) {
            $data = array('user' => NULL);
            redirect('index.php/Aplikacja/index');
        } else {
            $data = array('user' => $this->session->userdata('user'));
        }
        $data['photo'] = $model->photoAdminUser($this->session->userdata('user'));


        if ($this->form_validation->run() == FALSE) {

            $this->load->view('adminUser', $data);
            $this->load->view('newUserService');
            $this->load->view('footer');
        } else {

            $model->addUserAdmin();
            redirect('index.php/AdminUser/index');
        }
    }

    public function addUser() {

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
        $this->load->view('newUserService');
        $this->load->view('footer');
    }

    

    function checkbox() {
        if ($this->input->post('part_8') != TRUE & $this->input->post('part_8') == NULL & $this->input->post('part_9') != TRUE & $this->input->post('part_9') == NULL) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function login() {
        $this->load->model('userAdministracja_model');
        $model = new UserAdministracja_model();
        $login = $this->input->post('part_3');
        $email = $this->input->post('part_5');
        if ($model->sprawdzenie($login, $email) == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
