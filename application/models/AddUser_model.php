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

    public function __construct() {
        parent::__construct();
    }

    public function createDatabase() {
        $query = $this->db->query('CREATE TABLE IF NOT EXISTS user (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, '
                . 'login VARCHAR(100),'
                . 'haslo VARCHAR (100),'
                . 'imie VARCHAR (100),'
                . 'nazwisko VARCHAR (100),'
                . 'email VARCHAR (100),'
                . 'telefon VARCHAR (100),'
                . 'uprawnienia VARCHAR(100),'
                . 'rodzaj_klienta VARCHAR(100),'
                . 'kraj VARCHAR(100),'
                . 'wojewodztwo VARCHAR(100),'
                . 'miejscowosc VARCHAR(100),'
                . 'kod VARCHAR(100),'
                . 'ulica VARCHAR(100),'
                . 'nr_lokalu VARCHAR(100),'
                . 'stanowisko VARCHAR(100),'
                . 'nr_licencji VARCHAR (100),'
                . 'firma VARCHAR(100),'
                . 'pesel VARCHAR (100),'
                . 'nip VARCHAR (100),'
                . 'pln_pln VARCHAR(100),'
                . 'pln_eur VARCHAR(100),'
                . 'pln_usd VARCHAR (100),'
                . 'pln_gbp VARCHAR (100),'
                . 'pln_chf VARCHAR(100),'
                . 'pln_czk VARCHAR(100),'
                . 'pln_rub VARCHAR (100),'
                . 'zag_pln VARCHAR (100),'
                . 'zag_pln_1 VARCHAR (100),'
                . 'zag_eur VARCHAR (100),'
                . 'zag_eur_1 VARCHAR(100),'
                . 'zag_usd VARCHAR(100),'
                . 'zag_usd_1 VARCHAR(100),'
                . 'zag_chf VARCHAR (100),'
                . 'zag_chf_1 VARCHAR (100),'
                . 'edukacja VARCHAR (1000),'
                . 'lokalizacja VARCHAR (500),'
                . 'zainteresowania VARCHAR(1000),'
                . 'notatki VARCHAR(1000),'
                . 'zdjecie VARCHAR(100))');
    }

    public function addUser() {

        $this->createDatabase();
        $data = $this->db->query('SELECT * FROM user');

        if ($data->num_rows() == 0) {
            $dane = array('login' => 'admin',
                'haslo' => md5('admin:)(:'),
                'imie' => 'Administrator',
                'nazwisko' => 'User',
                'email' => 'admin@piotr-majewski.net.pl',
                'telefon' => '00000000000',
                'uprawnienia' => 'Administrator',
                'rodzaj_klienta' => 'Administrator',
                'zdjecie' => 'photo.jpg');
            $this->db->insert('user', $dane);
        }

        $query=$this->db->query('SELECT * FROM user WHERE login="'.$this->input->post('part_1').'"');
        return $query->num_rows();
        
    }
    public function saveUser() {


        $data= array('login'=>$this->input->post('part_1'),
            'haslo'=> md5($this->input->post('part_2')),
            'imie'=>$this->input->post('part_3'),
            'nazwisko'=>$this->input->post('part_4'),
            'email'=>$this->input->post('part_5'),
            'telefon' => $this->input->post('part_6'),
            'uprawnienia' => 'Klient',
            'rodzaj_klienta' => $this->rodzajKlienta(),
            'zdjecie' => 'photo.jpg');
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
    public function user($login, $haslo) {

        $query = $this->db->query('SELECT * FROM user WHERE login="' . $login . '"AND haslo="' . $haslo . '"');
        if ($query->num_rows() > 0 && $query->num_rows() != NULL) {
            $row=$query->row();
            return array('wynik' => TRUE, 'login' => $row->login,);
        } else {
           return array('wynik'=>FALSE,'login' => NULL); 
        }
    }

    public function login($login) {
        $query = $this->db->query('SELECT uprawnienia FROM user WHERE login="' . $login . '"');
        $row = $query->row();
        return $row->uprawnienia;
    }

    public function rodzajKlienta() {
        if ($this->input->post('part_8') == TRUE) {
            $user = 'Osoba fizyczna';
            return $user;
        } else if ($this->input->post('part_9') == TRUE) {
            $user = 'Instytucja/Firma';
            return $user;
        } else if ($this->input->post('part_10') == TRUE) {
            $user = 'Kantor';
            return $user;
        }
    }

}
