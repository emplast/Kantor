<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserAdministracja_model
 *
 * @author emplast
 */
class UserAdministracja_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function userAdmin(){
       $query = $this->db->query('SELECT * FROM user WHERE uprawnienia="Administrator" OR uprawnienia ="Obsługa"');
        for($i=0;$i<$query->num_rows();$i++){
           $rows['lista' . $i] = $query->row_array($i);
        }
        return $rows;
    }

    public function addUserAdmin() {
        $data = array('nazwisko' => $this->input->post('part_1'),
            'imie' => $this->input->post('part_2'),
            'login' => $this->input->post('part_3'),
            'haslo' => md5($this->input->post('part_4')),
            'email' => $this->input->post('part_5'),
            'telefon' => $this->input->post('part_6'),
            'uprawnienia' => $this->uprawnienia(),
            'rodzaj_klienta' => 'Osoba fizyczna',
            'zdjecie' => 'photo.jpg');

        $this->db->insert('user', $data);
    }

    public function editUserAdmin($id) {
        $data = array('nazwisko' => $this->input->post('part_1a'),
            'imie' => $this->input->post('part_2a'),
            'login' => $this->input->post('part_3a'),
            'uprawnienia' => $this->editUprawnienia());
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function editPasswordAdmin($id) {
        $data = array('haslo' => md5($this->input->post('part_1b')));
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function editPasswordAdminUser($user) {
        $data = array('haslo' => md5($this->input->post('part_1b')));
        $this->db->where('login', $user);
        $this->db->update('user', $data);
    }

    public function uprawnienia() {
         if ($this->input->post('part_8') == TRUE) {
            return 'Obsługa';
        } else if ($this->input->post('part_9') == TRUE) {
            return 'Klient';
        }
    }

    public function editUprawnienia() {
        if ($this->input->post('part_4a') == TRUE) {
            return 'Administrator';
        } else if ($this->input->post('part_5a') == TRUE) {
            return 'Obsługa';
        } else if ($this->input->post('part_6a') == TRUE) {
            return 'Klient';
        }
    }

    public function dataUserAdmin($user) {
        $result = $this->db->query('SELECT * FROM user WHERE login="' . $user . '"');
        $row = $result->row_array();
        return $row;
    }

    public function editDataUserAdmin($user) {
        $data = array('imie' => $this->input->post('part_1'),
            'nazwisko' => $this->input->post('part_2'),
            'login' => $this->input->post('part_3'),
            'stanowisko' => $this->input->post('part_4'),
            'nr_licencji' => $this->input->post('part_4z'),
            'kraj' => $this->input->post('part_5'),
            'wojewodztwo' => $this->input->post('part_6'),
            'miejscowosc' => $this->input->post('part_7'),
            'kod' => $this->input->post('part_8'),
            'ulica' => $this->input->post('part_9'),
            'nr_lokalu' => $this->input->post('part_10'),
            'pesel' => $this->input->post('part_11'),
            'nip' => $this->input->post('part_12'),
            'telefon' => $this->input->post('part_13'),
            'email' => $this->input->post('part_14'),
            'pln_pln' => $this->input->post('part_15'),
            'pln_usd' => $this->input->post('part_16'),
            'pln_eur' => $this->input->post('part_17'),
            'pln_gbp' => $this->input->post('part_18'),
            'pln_chf' => $this->input->post('part_19'),
            'pln_czk' => $this->input->post('part_20'),
            'pln_rub' => $this->input->post('part_21'),
            'zag_pln' => $this->input->post('part_22'),
            'zag_pln_1' => $this->input->post('part_23'),
            'zag_eur' => $this->input->post('part_24'),
            'zag_eur_1' => $this->input->post('part_25'),
            'zag_usd' => $this->input->post('part_26'),
            'zag_usd_1' => $this->input->post('part_27'),
            'zag_chf' => $this->input->post('part_28'),
            'zag_chf_1' => $this->input->post('part_29'),
            'edukacja' => $this->input->post('part_32'),
            'lokalizacja' => $this->input->post('part_33'),
            'zainteresowania' => $this->input->post('part_34'),
            'notatki' => $this->input->post('part_35'));
        $this->db->where('login', $user);
        $this->db->update('user', $data);
    }
    public function editDataAdmin($user) {

        $data = array('imie' => $this->input->post('part_1'),
            'nazwisko' => $this->input->post('part_2'),
            'login' => $this->input->post('part_3'),
            'stanowisko' => $this->input->post('part_4'),
            'nr_licencji' => $this->input->post('part_4z'),
            'firma' => $this->input->post('part_0'),
            'kraj' => $this->input->post('part_5'),
            'wojewodztwo' => $this->input->post('part_6'),
            'miejscowosc' => $this->input->post('part_7'),
            'kod' => $this->input->post('part_8'),
            'ulica' => $this->input->post('part_9'),
            'nr_lokalu' => $this->input->post('part_10'),
            'pesel' => $this->input->post('part_11'),
            'nip' => $this->input->post('part_12'),
            'telefon' => $this->input->post('part_13'),
            'email' => $this->input->post('part_14'),
            'pln_pln' => $this->input->post('part_15'),
            'pln_usd' => $this->input->post('part_16'),
            'pln_eur' => $this->input->post('part_17'),
            'pln_gbp' => $this->input->post('part_18'),
            'pln_chf' => $this->input->post('part_19'),
            'pln_czk' => $this->input->post('part_20'),
            'pln_rub' => $this->input->post('part_21'),
            'zag_pln' => $this->input->post('part_22'),
            'zag_pln_1' => $this->input->post('part_23'),
            'zag_eur' => $this->input->post('part_24'),
            'zag_eur_1' => $this->input->post('part_25'),
            'zag_usd' => $this->input->post('part_26'),
            'zag_usd_1' => $this->input->post('part_27'),
            'zag_chf' => $this->input->post('part_28'),
            'zag_chf_1' => $this->input->post('part_29'),
            'edukacja' => $this->input->post('part_32'),
            'lokalizacja' => $this->input->post('part_33'),
            'zainteresowania' => $this->input->post('part_34'),
            'notatki' => $this->input->post('part_35'));
        $this->db->where('login', $user);
        $this->db->update('user', $data);
    }

    public function editPhotoAdmin($user) {

        $data = array('zdjecie' => $this->input->post('part_36'));
        $this->db->where('login', $user);
        $this->db->update('user', $data);
    }

    public function photoAdminUser($user) {
        $photo = $this->db->query('SELECT * FROM user WHERE login="' . $user . '"');
        $row = $photo->row_array();
        return $row['zdjecie'];
    }

    public function sprawdzenie($login, $email) {
        $result = $this->db->query('SELECT * FROM user WHERE login="' . $login . '"OR email="' . $email . '"');

        if ($result->num_rows() > 0 & $result != NULL) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
