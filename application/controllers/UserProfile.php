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
        $this->load->view('admin');
        $user=new UserAdministracja_model();
        $result['users']=$user->userAdmin();
        $this->load->view('userProfile',$result);
        $this->load->view('footer');
    }
}
