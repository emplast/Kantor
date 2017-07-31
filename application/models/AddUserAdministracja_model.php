<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddUserAdministracja_model
 *
 * @author emplast
 */
class AddUserAdministracja_model  extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    public function addUserAdmin(){
        $data= array('imie'=>$this->input->post('part_1'),
                     'nazwisko'=>$this->input->post('part_2'),
                     'miejscowosc'=>$this->input->post('part_3'),
                     'kod'=>$this->input->post('part_4'),
                     'ulica'=>$this->input->post('part_5'),
                     'nr_domu'=>$this->input->post('part_6'),
                     'login'=>$this->input->post('part_7'),
                     'haslo'=>$this->input->post('part_8'),
                     'zdjecie'=>$this->input->post('userfile'),
                     'edukacja'=>$this->input->post('part_10'),
                     'umiejetnosci'=>$this->input->post('part_11'),
                     'uwagi'=>$this->input->post('part_12'));
        $this->db->insert('pracownicyAdministracji',$data);
    }
    
}
