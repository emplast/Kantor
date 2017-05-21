<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aplikacja
 *
 * @author emplast
 */
class Aplikacja extends CI_Controller{
    
    

    public function index(){
        //$this->force_ssl();
        $this->load->view('aplikacja');
        
    }
    public function login(){
        $this->session->set_userdata(array('adminUser'=>'+)(+'));
        redirect('index.php/Admin/index');
    }
   
}
