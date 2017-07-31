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
class Aplikacja extends CI_Controller {

    public function index() {
        
        $dom = new DOMDocument;
        $dom->preserveWhiteSpace = False;
        $dom->load(base_url('xml/plik.xml'));
        $sprzedaj = $dom->getElementsByTagName("bid");
        $kup = $dom->getElementsByTagName('ask');
        $_POST['eur'] = $sprzedaj->item(2)->nodeValue;
        $_POST['eur_k'] = $kup->item(2)->nodeValue;
        $_POST['usd']=$sprzedaj->item(4)->nodeValue;
        $_POST['usd_k']=$kup->item(4)->nodeValue;
        $_POST['gbp']=$sprzedaj->item(3)->nodeValue;
        $_POST['gbp_k']=$kup->item(3)->nodeValue;
        $_POST['chf']=$sprzedaj->item(5)->nodeValue;
        $_POST['chf_k']=$kup->item(5)->nodeValue;
        $_POST['rub']=$sprzedaj->item(57)->nodeValue;
        $_POST['rub_k']=$kup->item(57)->nodeValue;
        $_POST['czk']=$sprzedaj->item(53)->nodeValue;
        $_POST['czk_k']=$kup->item(53)->nodeValue;
        $dane = array('eur' => round($_POST['eur'],3),
            'eur_k' =>round($_POST['eur_k'],3),
            'usd'=> round($_POST['usd'],3),
            'usd_k'=> round($_POST['usd_k'],3),
            'gbp'=> round($_POST['gbp'],3),
            'gbp_k'=> round($_POST['gbp_k'],3),
            'chf'=> round($_POST['chf'],3),
            'chf_k'=> round($_POST['chf_k'],3),
            'rub'=> round($_POST['rub'],4),
            'rub_k'=> round($_POST['rub_k'],4),
            'czk'=> round($_POST['czk'],4),
            'czk_k'=> round($_POST['czk_k'],4));
        if ($this->session->userdata('user') == NULL) {
            $data = array('user' => NULL);
        } else {
            $data = array('user' => $this->session->userdata('user'));
        }
        $this->load->view('headerAplikacja', $data);
        $this->load->view('aplikacja', $dane);
        $this->load->view('footerAplikacja');
    }

    public function login() {
        $this->session->set_userdata(array('adminUser' => '+)(+'));
        redirect('index.php/Admin/index');
    }

    function saveXML() {


        $this->load->helper('xml');

        $dom = new DOMDocument;
        $dom->preserveWhiteSpace = False;
        $dom->load('https://pipser.pl/api/pro_demo_2017030692.php?type=xml');
        $dom->save('xml/plik.xml');

        $sprzedaj = $dom->getElementsByTagName("bid");
        $kup = $dom->getElementsByTagName('ask');
        $_POST['eur'] = $sprzedaj->item(2)->nodeValue;
        $_POST['eur_k'] = $kup->item(2)->nodeValue;
        // $_POST['eur']=4.00;
        //$_POST['eur_k']=4.20;
    }

}
