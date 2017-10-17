<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserProfile
 *
 * @author emplast
 */
class UserProfile extends CI_Controller{
   
    public function index(){
        $this->load->model('userAdministracja_model');
        $user = new UserAdministracja_model();
        $dane['lista'] = $user->userAdmin();
        $dane['haslo'] = 0;
        if ($this->session->userdata('user') == NULL) {
            $data = array('user' => NULL);
            redirect('index.php/Aplikacja/index');
        } else {
            $data = array('user' => $this->session->userdata('user'));
        }
        $data['photo'] = $user->photoAdminUser($this->session->userdata('user'));
        $this->load->view('admin', $data);

        $this->load->view('userProfile', $dane);
        $this->load->view('footer');
    }
}
