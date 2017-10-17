<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewPassword
 *
 * @author emplast
 */
class NewPassword extends CI_Controller {

    public function index() {

        
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
        $this->load->view('newPassword');
        $this->load->view('footerAplikacja');
    }

    public function email() {
        
        $this->load->library('email');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('part_1', 'Email', 'required|valid_email');

        $this->form_validation->set_message('valid_email', 'Podałeś nieprawidłowy adres e-mail !!! ');
        $this->form_validation->set_message('required', 'Pole nie może być puste !!! ');
        if ($this->form_validation->run() == FALSE) {
            if ($this->session->userdata('user') == NULL) {
                $data = array('user' => NULL);
            } else {
                $data = array('user' => $this->session->userdata('user'));
            }
            $this->load->view('headerAplikacja', $data);
            $this->load->view('newPassword');
            $this->load->view('footerAplikacja');
        } else {

            $this->sprawdzenie();
        }
    }

    function sprawdzenie() {
        $this->load->model('addUser_model');
        $email = new AddUser_model();
        if ($email->emailUser($this->input->post('part_1'))['wynik'] != TRUE) {
            redirect('index.php/Aplikacja/index');
        } else {

            $qstring = base64_encode($this->input->post('part_1'));
            $token=mt_rand(1000, 9999);
            $this->session->set_userdata('token', base64_encode($token));
            $url = site_url() . 'index.php/ResetPassword/index/' . $qstring . '/' . base64_encode(date('Y-m-d H:m:s')).'/'.$this->session->userdata('token');
            $this->email->to($this->input->post('part_1'));
            $this->email->from('admin@piotr-majewski.net.pl', 'Zespoł Swifter.pl');
            $this->email->subject('Witaj  ' . $email->emailUser($this->input->post('part_1'))['name'] . '  czeka cię zmiana hasła w Kantorze Swifetr.pl');
            $this->email->message('Aby zresetować hasło kliknij na poniższy link.     ' . ''
                    . '                                                                         '
                    . '' . $url . ''
                    . '   Ta wiadomość została wygenerowana automatycznie nie odpowiadaj na nią.'
                    . '                                                                        '
                    . '______________________________________________________________________  '
                    . 'Zespoł Swifter.pl');
            $this->email->send();
            redirect('index.php/NewPassword/link');
        }
    }

    public function link() {
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
        $this->load->view('link');
        $this->load->view('footerAplikacja');
    }

}
