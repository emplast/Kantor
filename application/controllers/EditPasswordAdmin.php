<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EditPasswordAdmin
 *
 * @author emplast
 */
class EditPasswordAdmin extends CI_Controller {

    public function index() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('part_1b', 'Password', 'required|matches[part_2b]');
        $this->form_validation->set_rules('part_2b', 'Password', 'required|matches[part_1b]');

        $this->form_validation->set_message('matches', 'Podane hasła są różne !!! ');
        $this->form_validation->set_message('required', 'Pole nie może być puste !!! ');
        if ($this->form_validation->run() == FALSE) {
            $this->load->model('userAdministracja_model');
            $user = new UserAdministracja_model();
            $dane['lista'] = $user->userAdmin();
            $dane['haslo'] = 1;
            if ($this->session->userdata('user') == NULL) {
                $data = array('user' => NULL);
                redirect('index.php/Aplikacja/index');
            } else {
                $data = array('user' => $this->session->userdata('user'));
            }
            $data['photo'] = $model->photoAdminUser($this->session->userdata('user'));
            $this->load->view('admin', $data);

            $this->load->view('userProfile', $dane);
            $this->load->view('footer');
        } else {
            $this->load->model('userAdministracja_model');
            $haslo = new UserAdministracja_model();
            $haslo->editPasswordAdmin($this->input->post('part_3b'));
            redirect('index.php/UserProfile/index');
        }
    }

    public function editUserPassword() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('part_1b', 'Password', 'required|matches[part_2b]');
        $this->form_validation->set_rules('part_2b', 'Password', 'required|matches[part_1b]');

        $this->form_validation->set_message('matches', 'Podane hasła są różne !!! ');
        $this->form_validation->set_message('required', 'Pole nie może być puste !!! ');

        if ($this->session->userdata('user') == NULL) {
            $data = array('user' => NULL);
            redirect('index.php/Aplikacja/index');
        } else {
            $data = array('user' => $this->session->userdata('user'));
        }

        if ($this->form_validation->run() == FALSE) {
            $this->load->model('userAdministracja_model');
            $model = new UserAdministracja_model();
            $dane['haslo'] = 1;
            $data['load'] = $model->dataUserAdmin($this->session->userdata('user'));
            $data['photo'] = $model->photoAdminUser($this->session->userdata('user'));
            $this->load->view('adminUser', $data);

            $this->load->view('adminUserProfile', $dane);
            $this->load->view('footer');
        } else {
            $this->load->model('userAdministracja_model');
            $haslo = new UserAdministracja_model();
            $haslo->editPasswordAdminUser($this->session->userdata('user'));
            redirect('index.php/AdminUserProfile/index');
        }
    }

    public function editAdminPassword() {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('part_1b', 'Password', 'required|matches[part_2b]');
        $this->form_validation->set_rules('part_2b', 'Password', 'required|matches[part_1b]');

        $this->form_validation->set_message('matches', 'Podane hasła są różne !!! ');
        $this->form_validation->set_message('required', 'Pole nie może być puste !!! ');

        if ($this->session->userdata('user') == NULL) {
            $data = array('user' => NULL);
            redirect('index.php/Aplikacja/index');
        } else {
            $data = array('user' => $this->session->userdata('user'));
        }

        if ($this->form_validation->run() == FALSE) {
            $this->load->model('userAdministracja_model');
            $model = new UserAdministracja_model();
            
            $data['load'] = $model->dataUserAdmin($this->session->userdata('user'));
            $data['photo'] = $model->photoAdminUser($this->session->userdata('user'));
            $this->load->view('admin', $data);

            
            $dane['haslo'] = 1;
            if ($this->input->cookie('plik') != NULL) {
                $dane['plik'] = $this->input->cookie('plik');
            } else {
                $dane['plik'] = 'Nie wybrano zdjęcia';
            }
            $this->load->view('daneKantoru', $dane);
            $this->load->view('footer');
        } else {
            $this->load->model('userAdministracja_model');
            $haslo = new UserAdministracja_model();
            $haslo->editPasswordAdminUser($this->session->userdata('user'));
            redirect('index.php/DaneKantoru/index');
        }
    }

}
