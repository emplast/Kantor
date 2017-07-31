<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Table
 *
 * @author emplast
 */
class Table extends CI_Controller {

    public function index() {
        $this->load->helper('file');
        $this->load->helper('xml');

        $dom = '<?xml version="1.0" encoding="iso-8859-1"?>

    <document>
        <employee>
            <name>Mark</name>
            <age>27</age>
            <salary>$5000</salary>
        </employee>
        <employee>
            <name>Jack</name>
            <age>25</age>
            <salary>$4000</salary>
        </employee>
        <employee>
            <name>nav</name>
            <age>25</age>
            <salary>$4000</salary>
        </employee>
    </document>';


        $dom_1 = new DOMDocument;
        $dom_1->preserveWhiteSpace = False;
        $dom_1->load('https://pipser.pl/api/pro_demo_2017030692.php?type=xml');
        //$dom_1->loadXML($dom_1);
        $dom_1->save( 'xml/plik.xml');
        

        $dom = new DOMDocument();

        

        $employees = $dom->getElementsByTagName('employee');

        foreach ($employees as $employee) {
            $names = $employee->getElementsByTagName("name");
            $name = $names->item(0)->nodeValue;

            $ages = $employee->getElementsByTagName("age");
            $age = $ages->item(0)->nodeValue;

            $salaries = $employee->getElementsByTagName("salary");
            $salary = $salaries->item(0)->nodeValue;

            $tmp[] = array(
                'name' => $name,
                'age' => $age,
                'salary' => $salary
            );
            continue;
        }
        
        
        $employees = $dom_1->getElementsByTagName('pair');

        foreach ($employees as $employee) {
            $names = $employee->getElementsByTagName("name");
            $name = $names->item(0)->nodeValue;

            $bits = $employee->getElementsByTagName("bid");
            $bit = $bits->item(0)->nodeValue;

            $asks = $employee->getElementsByTagName("ask");
            $ask = $asks->item(0)->nodeValue;

            $times = $employee->getElementsByTagName("time");
            $time = $times->item(0)->nodeValue;

            $tmp_1[] = array(
                'name' => $name,
                'ask' => $ask,
                'bit' => $bit,
                'time' => $time
            );
            continue;
        }
        $params = array(
            'username' => 'emplast@wp.pl',
            'password' => md5('piotr123'),
            'to' => '794250440',
            'from' => 'Info',
            'message' => "Pozdrowienia z Milicza przesyla Piotr Majewski z Aplikacji Kantor ",
        );
        $dom_2 = new DOMDocument;
        $dom_2->preserveWhiteSpace = False;
        
        
        
        
           require_once('lib/nusoap.php');
           $client = new nusoap_client('https://www.emsoft.net.pl/wsdl.php/?wsdl');
           $result=$client->call('wiersz');
           
           $wiersz=$result;    
                        
          
              
       
        
        $dane = array('tmp_1' => $tmp_1,'token'=> mt_rand(100000, 999999));
        $this->load->view('table', $dane);
        //$this->sms_send($params);
        
        
    }
    function sms_send($params, $backup = false) {

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

        

        
    }


