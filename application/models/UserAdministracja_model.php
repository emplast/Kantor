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
    
    public function userAdmin(){
       $query= $this->db->query('SELECT * FROM pracownicyAdministracji');
       for($i=0;$i<$query->num_rows();$i++){
           $row['lista'.$i]=$query->row_array($i);
       }
        return $row;
    }
}
