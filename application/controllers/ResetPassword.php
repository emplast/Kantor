<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ResetPassword
 *
 * @author emplast
 */
class ResetPassword extends CI_Controller {

    public function index() {
        $this->load->helper('form');
        $this->load->model('addUser_model');

        $email = new AddUser_model();

        if (date('Y-m-d H:m:s', strtotime("+24 hours", strtotime(base64_decode($this->uri->segment(4))))) < date('Y-m-d H:m:s')) {
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
            $this->load->view('linkOut');
            $this->load->view('footerAplikacja');
            $this->session->userdata('token', NULL);
        } else {

            if ($email->emailUser(base64_decode($this->uri->segment(3)))['wynik'] == TRUE & base64_decode($this->session->userdata('token')) == base64_decode($this->uri->segment(5))) {
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
                $this->load->view('newPasswordUser', array('imie' => $email->emailUser(base64_decode($this->uri->segment(3)))['name']));
                $this->load->view('footerAplikacja');
                //$token = mt_rand(1000, 9999);
                //$this->session->set_userdata('token', $token);
                $this->session->set_userdata('email', base64_decode($this->uri->segment(3)));

                $params = array(
                    'username' => 'kontakt@swifter.pl',
                    'password' => md5('45Dcd3068j'),
                    'to' => $email->emailUser(base64_decode($this->uri->segment(3)))['tel'],
                    'from' => 'Info',
                    'message' => 'Witaj  ' . $email->emailUser(base64_decode($this->uri->segment(3)))['name'] . '. Token do zmiany hasła w kantorze Swifter.pl  ' . base64_decode($this->uri->segment(5))
                );
                $this->sms_send($params);
            } else {
                redirect('index.php/Aplikacja/index');
            }
        }
    }

    public function sms_send($params, $backup = false) {

        static $content;

        if ($backup == true) {
            $url = 'https://api2.smsapi.pl/sms.do';
        } else {
            $url = 'https://api.smsapi.pl/sms.do';
        }

        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $url);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $params);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

        $content = curl_exec($c);
        $http_status = curl_getinfo($c, CURLINFO_HTTP_CODE);

        if ($http_status != 200 && $backup == false) {
            $backup = true;
            sms_send($params, $backup);
        }

        curl_close($c);
        return $content;
    }

    public function zmiana() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('addUser_model');

        $email = new AddUser_model();

        $this->form_validation->set_rules('part_1', 'Hasło', 'required|min_length[5]');
        $this->form_validation->set_rules('part_2', 'Powtórka hasła', 'required|matches[part_1]');
        $this->form_validation->set_rules('part_3', 'Token', 'required|callback_token');

        $this->form_validation->set_message('required', 'Polenie może być puste !!!');
        $this->form_validation->set_message('min_length', 'Pole musi zawierać przynajmniej 5 znaków !!!');
        $this->form_validation->set_message('matches', 'Podane hasła nie są takie same !!!');
        $this->form_validation->set_message('token', 'Podane dane nie są zgodne z wysłanym tokenem !!!');

        if ($this->form_validation->run() == FALSE) {
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
                $data['login_link'] = base_url('index.php/Admin/index');
            } else if ($this->session->userdata('login') == 3) {
                $data['login'] = 2;
                $data['login_text'] = "Twój portfel";
                $data['login_link'] = base_url('index.php/PanelUser/index');
            }
            $this->load->view('headerAplikacja', $data);
            $this->load->view('newPasswordUser', array('imie' => $email->emailUser($this->session->userdata('email'))['name']));
            $this->load->view('footerAplikacja');
        } else {
            $email->newPassword($this->session->userdata('email'));
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
                $data['login_link'] = base_url('index.php/Admin/index');
            } else if ($this->session->userdata('login') == 3) {
                $data['login'] = 2;
                $data['login_text'] = "Twój portfel";
                $data['login_link'] = base_url('index.php/PanelUser/index');
            }
            $this->load->view('headerAplikacja', $data);
            $this->load->view('newPasswordOk');
            $this->load->view('footerAplikacja');
        }
    }

    public function token() {
        if (base64_decode($this->session->userdata('token')) == $this->input->post('part_3')) {
            $this->session->set_userdata('token', NULL);
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
