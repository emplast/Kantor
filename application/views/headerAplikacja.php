<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kantor Swifter</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>



    </head>
    <body>
        <script type="text/javascript">
            $(function () {
                $('#a_lang').on('click', function () {

                    $('#text_1').css('display', 'none');
                    $('#text_2').css('display', 'inline');
                    $('#text_2').slideDown();


                });
                $('#a_rang').on('click', function () {
                    $('#text_2').css('display', 'none');
                    $('#text_1').slideDown();
                });
            });

           
        </script>
        <style type="text/css">
            #count_1{

                background-image:url( <?php echo base_url('jpg/04.frond_1500_200.png') ?>);
                background-color:#003333 transparent;
                width: 100%;
                height: 200px;
                color: #F5F5F5;
                margin-top: -30px;
                position: relative;
                background-size:100%;



            }
            #h_logo{
                color:#999999;
            }
            #lang{
                font-size:900%;
                display: inline;
                color: #999999;
                text-decoration:none;

            }
            #lang:hover{
                color: white;
            }
            #rang{
                font-size:900%;
                display: inline;
                color: #999999;
                text-decoration:none;

            }
            #rang:hover{
                color:white;  
            }
            #text_1{
                display: inline;
                color: #999999;

            }
            #text_1:hover{
                color:whitesmoke;
            }

            #text_2{
                display: none;
                color: #999999;
            }
            #text_2:hover{
                color: whitesmoke;
            }
            #a_rang{
                text-decoration: none;
            }
            #a_lang{
                text-decoration: none;
            }
            
        </style>



        <header>
            <nav id="nav_bar" class="navbar navbar-inverse fixed-top" role="navigation"style="background-color: #003333">
                <h5> <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav pull-left">   
                            <li><a href="#">
                                    <img src="<?php echo base_url('jpg/frond-end/logo-paypol.png'); ?>" width="95px" height="32px" class="pull-left" >
                                    Internetowa Platforma Płatnicza
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li class="pull-left"><a href="<?php echo base_url('index.php/Aplikacja/index') ?>">Strona główna</a> </li>
                            <li class="pull-left"><a href="#">Jak to działa?</a> </li>
                            <li class="pull-left"><a href="#">Kalkulator korzyści</a></li>
                            <li class="pull-left"><a href="#">Cennik</a></li>
                            <li class="pull-left"><a href="#">Pomoc</a></li>
                            <li class="pull-left"><a href="#">O NAS</a></li>
                            <li class="pull-left"><a href="#">KONTAKT</a> </li>
                        </ul>
                        </br>
                        </br>
                        </br>
                        </br>
                        <ul class="nav navbar-nav pull-left ">
                            <li class="pull-left"><a href="#">Masz pytania? Zadzwoń +48 000 000</a> </li>
                            <li class="pull-left"><a id="li_1" href="<?php echo $login_link ?>"><?php echo $login_text; ?></a></li>
                        </ul>
                        </br>
                        <ul class="nav navbar-nav pull-right ">
                            <li class="pull-left"><a href="<?php echo base_url('index.php/NewUserAdd/index') ?>">Nowy użytkownik</a> </li>
                            <li class="pull-left"><a href="<?php echo base_url('index.php/Login/index') ?>">Zaloguj</a> </li>
                            <li class="pull-left"><a href="<?php echo base_url('index.php/Login/out') ?>" >Wyloguj</a></li>
                            <li class="pull-left"><a href="#">Zalogowany:</a></li>
                            <li class="pull-left"><a href="#"><?php echo $user ?></a></li>
                        </ul>
                    </div>
                </h5>
            </nav>
        </header>


        <div id="count_1" class=" container text-center">
            <a id="a_lang"> <p id="lang">&lang;</p></a>
            <sup>
                <h3 id="text_1">Spłacasz kredyt w walucie obcej sprawdz co przygotowaliśmy !!!</h3>
                <h3 id="text_2">Wymiana waluty już od <b>100 PLN</b></h3>
            </sup>
            <a id="a_rang"><p id="rang">&rang;</p></a>
        </div>