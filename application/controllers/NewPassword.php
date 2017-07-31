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

        $this->load->helper('form');
        if ($this->session->userdata('user') == NULL) {
            $data = array('user' => NULL);
        } else {
            $data = array('user' => $this->session->userdata('user'));
        }
        $this->load->view('headerAplikacja', $data);
        $this->load->view('newPassword');
        $this->load->view('footerAplikacja');
    }

    public function email() {
        $this->load->helper('form');
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
            $this->email->from('admin@swifter.pl', 'Zespoł Swifter.pl');
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
        $this->load->view('headerAplikacja', $data);
        $this->load->view('link');
        $this->load->view('footerAplikacja');
    }

}
