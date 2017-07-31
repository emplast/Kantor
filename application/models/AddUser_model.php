<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddUser_model
 *
 * @author emplast
 */
class AddUser_model extends CI_Model {
   
    public function addUser(){
        $query=$this->db->query('SELECT * FROM user WHERE login="'.$this->input->post('part_1').'"');
        return $query->num_rows();
        
    }
    public function saveUser(){
        $data= array('login'=>$this->input->post('part_1'),
            'haslo'=> md5($this->input->post('part_2')),
            'imie'=>$this->input->post('part_3'),
            'nazwisko'=>$this->input->post('part_4'),
            'email'=>$this->input->post('part_5'),
            'telefon'=>$this->input->post('part_6'));
        $this->db->insert('user',$data);
    }
    public function emailUser($email){
       
        $query = $this->db->query('SELECT * FROM user WHERE email="' .$email . '"');
        if ($query->num_rows() > 0 & $query->num_rows()!=NULL) {
            $row=$query->row();
            return array('wynik' => TRUE, 'wartosc' => $row->email,'name'=>$row->imie,'tel'=>$row->telefon);
        } else {
           return array('wynik'=>FALSE,'wartosc' => NULL,'name'=>NULL,'tel'=>NULL); 
        }
    }
    public function newPassword($email){
        
        $this->db->where('email',$email);
        $this->db->update('user',array('haslo'=> md5($this->input->post('part_1'))));
        
    }
    public function user($login){
        
        $query = $this->db->query('SELECT * FROM user WHERE login="' .$login . '"');
        if ($query->num_rows() > 0 ) {
            $row=$query->row();
            return array('wynik' => TRUE, 'login' => $row->login,);
        } else {
           return array('wynik'=>FALSE,'login' => NULL); 
        }
    }
}
