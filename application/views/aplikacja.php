<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kantor www.swifter.pl</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
        <script src="<?php echo base_url(); ?>bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>

    </head>
    <style type="text/css">

        #count_1{
            
            background-image:url( <?php echo base_url('jpg/04.frond_1500_200.png')?>);
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
            font-size:1000%;
            display: inline;
            color: #999999;

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


        #img_01{
            float: top;
            margin-top: -5px;
        }
        #kursy{



            width: 1010px;
            height: 500px;
            padding: 10px;
            position: relative;
            float:top;
            margin-top:-100%;
            background-color:whitesmoke;

        }
        #text_waluta{
            width: 990px;
            height: 70px;
            background-color: white;
            position: relative;

        }
        #waluta{
            border: 1px solid #D5D4D3;

            width: 300px;
            height: 180px;
            float:left;
            margin-top: 15px;
            margin-left: 15px;
            margin-right: 15px;
            margin-bottom: 15px;

        }
        #img_euro{
            display: inline;
        }
        #h_euro{
            display: inline;
        }
        #border_euro{
            display: inline;
        }
        #a_sprzedaj{
            text-decoration:none;
            color:#D5D4D3;
        }

        #a_kup{
            text-decoration:none;
            color: #D5D4D3;
        }
        #kup{
            background-color:#003333; 
        }
        #kup:hover{
            background-color:white;    
            cursor:pointer;

        }
        #sprzedaj{
            background-color:#003333;
            margin-left: -150px;
        }
        #sprzedaj:hover{
            background-color:white;    
            cursor:pointer;

        }
        #img_sprzedaj{
            margin-top: -30px;
            margin-right: 15px;
        }
        #img_sprzedaj_1{
            margin-top: -30px;
            margin-right: 15px;
        }
        #img_kup{
            margin-top: -30px;
            margin-right: 15px;
        }
        #img_kup_1{
            margin-top: -30px;
            margin-right: 15px;
        }
        #img_{
            margin-left: -100px;
        }
        #informacje{
            width:1010px;
            height: 270px;
            position: relative;
            margin-top:2%;
            padding:5px;
            background-color: white;
        }
        #logo{
            border:1px solid #D5D4D3;
            background-color: #F5F5F5;
            width: 23%;
            height: 230px;
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 10px;
            margin-right: 10px;
            float: left;
        }
        #aktualnosci{
            width: 1010px;
            height:150px;
            position:relative;
            margin-top: 2%;
            padding:5px;
            background-color: white;
        }
        #table{
            width: 550px;
        }
        #footer{
            width: 100%;
            height: 90px;
            float:top;
            position: relative;
            margin-top: 17%;
            background-color:whitesmoke;
        }

        .footer_2{
            width: 100%;
            height: 200px;
            background-color:#003333;
            float:top;
            position:relative;



        }

    </style>
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


        <header>
            <nav id="nav_bar" class="navbar navbar-inverse fixed-top" role="navigation"style="background-color: #003333">


                <h5> <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav pull-left">   
                            <li>
                                <a href="#">
                                    <img src="<?php echo base_url('jpg/frond-end/logo-paypol.png'); ?>" width="95px" height="32px" class="pull-left" >
                                    </br>Internetowa Platforma Płatnicza
                                </a></li>
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li class="pull-left"><a role="button">Strona główna</a> </li>
                            <li class="pull-left"><a >Jak to działa?</a> </li>
                            <li class="pull-left"><a >Kalkulator korzyści</a></li>
                            <li class="pull-left"><a >Cennik</a></li>
                            <li class="pull-left"><a >Pomoc</a></li>
                            <li class="pull-left"><a>O NAS</a></li>
                            <li class="pull-left"><a >KONTAKT</a> </li>
                        </ul>
                        <ul class="nav navbar-nav pull-left ">
                            <li class="pull-left"><a role="button">Masz pytania? Zadzwoń +48 000 000</a> </li>
                        </ul>
                        <ul class="nav navbar-nav pull-right ">
                            <li class="pull-left" id="login"><a >Zaloguj się</a> </li>
                            <li class="pull-left" id="konto"><a >Załóż konto</a></li>
                            <li class="pull-left" id="konto"><a >Wyloguj</a></li>
                            <li class="pull-left" id="konto"><a >Zalogowany:</a></li>
                            <li class="pull-left" id="konto"><a >Piotr Majewski</a></li>
                        </ul>
                    </div>
                </h5>

            </nav>
        </header>


        <div id="count_1" class=" container text-center">
           
            <a id="a_lang"> <h2 id="lang">&lang;</h2></a>
            <sup>
                <h3 id="text_1">Spłacasz kredyt w walucie obcej sprawdz co przygotowaliśmy !!!</h3>
                <h3 id="text_2">Wymiana waluty już od <b>100 PLN</b></h3>
            </sup>
            <a id="a_rang"><p id="rang">&rang;</p></a>
        </div>
        <div class="img-responsive"style="max-width:100%; height:auto;">
            <img  id="img_01"src="<?php echo base_url('jpg/04.frond_1300_1500.jpg'); ?> "width="100%" height="100%" >

            <div class="container text-center " id="kursy">
                <div class="caption" id="text_waluta">
                    <ul class=" nav pull-left">
                        <li class="pull-left"><h3>&nbsp;Kursy walut online</h3></li>
                    </ul>
                    <br/>
                    <ul class=" nav pull-right">
                        <li class="pull-right"><h5>&nbsp;Aby rozpocząć wymianę waluty naciśnij przycisk<b> sprzedaj lub kup</b></h5></li>
                    </ul>
                </div>
                <div class="caption" id="waluta">
                    </br>
                    &nbsp;&nbsp;<img  id="img_"src="<?php echo base_url('jpg/flags/eur.png'); ?>">
                    &nbsp;<sub><h2 id="h_euro">EUR</h2></sub>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div id="border_euro"style="width:50px;height:51px;position: absolute; border-left: 1px solid;">
                       
                        &nbsp;&nbsp;<h4 id="h_euro">Euro&nbsp;&nbsp;&euro;</h4>
                    </div>
                    <hr>
                    
                    <div class="caption" >
                        <div  id="sprzedaj"class="div_hover"style=" cursor: pointer;width: 149px; height: 65px;position: absolute;display: inline">
                            <a href="#" id="a_sprzedaj">
                                <h5>&nbsp;Sprzedaj</h5><h4>&nbsp;4.00</h4>
                                <img class="pull-right" id="img_sprzedaj" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_r.png'); ?>">
                                <img class="pull-right" id="img_sprzedaj_1" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_g.png'); ?>"></a></div>
                        <div id="kup" class="div_hover" style="width: 149px; height: 65px;position: absolute;; display: inline">
                            <a href="#" id="a_kup">
                                <h5 id="h_kup">&nbsp;Kup</h5><h4 id="h_kup">&nbsp;4,20</h4>
                                <img class="pull-right" id="img_kup" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_g.png'); ?>">
                                <img class="pull-right" id="img_kup_1" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_r.png'); ?>"></a></div>
                    </div>
                </div>
                <div class="caption" id="waluta">

                    </br>
                    &nbsp;&nbsp;<img id="img_"src="<?php echo base_url('jpg/flags/usd.png'); ?>">
                    &nbsp;<sub><h2 id="h_euro">USD</h2></sub>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div id="border_euro" class="caption"style="width:55px;height:51px;position: absolute; border-left: 1px solid;">
                       
                        &nbsp;<h4 id="h_euro">DOLAR&nbsp;&nbsp;$</h4>
                    </div>
                    <hr>
                   
                    <div class="caption" >
                        <div  id="sprzedaj"class="div_hover"style=" cursor: pointer;width: 149px; height: 65px;position: absolute;display: inline">
                            <a href="#" id="a_sprzedaj">
                                <h5>&nbsp;Sprzedaj</h5><h4>&nbsp;4.00</h4>
                                <img class="pull-right" id="img_sprzedaj" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_r.png'); ?>">
                                <img class="pull-right" id="img_sprzedaj_1" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_g.png'); ?>"></a></div>
                        <div id="kup" class="div_hover" style="width: 149px; height: 65px;position: absolute; display: inline">
                            <a href="#" id="a_kup">
                                <h5 id="h_kup">&nbsp;Kup</h5><h4 id="h_kup">&nbsp;4,20</h4>
                                <img class="pull-right" id="img_kup" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_g.png'); ?>">
                                <img class="pull-right" id="img_kup_1" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_r.png'); ?>"></a></div>
                    </div>
                </div>
                <div class="caption" id="waluta">
                    </br>
                    &nbsp;&nbsp;<img id="img_"src="<?php echo base_url('jpg/flags/gbp.png'); ?>">
                    &nbsp;<sub><h2 id="h_euro">GBP</h2></sub>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div id="border_euro" class="caption"style="width:55px;height:51px;position: absolute; border-left: 1px solid;">
                        
                        &nbsp;&nbsp;<h4 id="h_euro">FUNT&nbsp;&nbsp;&pound;</h4>
                    </div>
                    <hr>
                   
                    <div class="caption" >
                        <div  id="sprzedaj"class="div_hover"style=" cursor: pointer;width: 149px; height: 65px;position: absolute;display: inline">
                            <a href="#" id="a_sprzedaj">
                                <h5>&nbsp;Sprzedaj</h5><h4>&nbsp;4.00</h4>
                                <img class="pull-right" id="img_sprzedaj" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_r.png'); ?>">
                                <img class="pull-right" id="img_sprzedaj_1" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_g.png'); ?>"></a></div>
                        <div id="kup" class="div_hover" style="width: 149px; height: 65px;position: absolute; display: inline">
                            <a href="#" id="a_kup">
                                <h5 id="h_kup">&nbsp;Kup</h5><h4 id="h_kup">&nbsp;4,20</h4>
                                <img class="pull-right" id="img_kup" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_g.png'); ?>">
                                <img class="pull-right" id="img_kup_1" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_r.png'); ?>"></a></div>
                    </div>
                </div>
                <div class="caption" id="waluta">
                    </br>
                    &nbsp;&nbsp;<img id="img_"src="<?php echo base_url('jpg/flags/chf.png'); ?>">
                    &nbsp;<sub><h2 id="h_euro">CHF</h2></sub>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div id="border_euro" class="caption"style="width:55px;height:51px;position: absolute; border-left: 1px solid;">
                        
                        &nbsp;&nbsp;<h4 id="h_euro">Frank</h4>
                    </div>
                    <hr>
                    <div class="caption" >
                        <div  id="sprzedaj"class="div_hover"style=" cursor: pointer;width: 149px; height: 65px;position: absolute;display: inline">
                            <a href="#" id="a_sprzedaj">
                                <h5>&nbsp;Sprzedaj</h5><h4>&nbsp;4.00</h4>
                                <img class="pull-right" id="img_sprzedaj" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_r.png'); ?>">
                                <img class="pull-right" id="img_sprzedaj_1" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_g.png'); ?>"></a></div>
                        <div id="kup" class="div_hover" style="width: 149px; height: 65px;position: absolute; display: inline">
                            <a href="#" id="a_kup">
                                <h5 id="h_kup">&nbsp;Kup</h5><h4 id="h_kup">&nbsp;4,20</h4>
                                <img class="pull-right" id="img_kup" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_g.png'); ?>">
                                <img class="pull-right" id="img_kup_1" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_r.png'); ?>"></a></div>
                    </div>
                </div>
                <div class="caption" id="waluta">
                    </br>
                    &nbsp;&nbsp;<img id="img_"src="<?php echo base_url('jpg/flags/rub.png'); ?>">
                    &nbsp;<sub><h2 id="h_euro">RUB</h2></sub>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div id="border_euro" class="caption"style="width:55px;height:51px;position: absolute; border-left: 1px solid;">
                       
                        &nbsp;&nbsp;<h4 id="h_euro">Rubel</h4>
                    </div>
                    <hr>
                    
                    <div class="caption" >
                        <div  id="sprzedaj"class="div_hover"style=" cursor: pointer;width: 149px; height: 65px;position: absolute;display: inline">
                            <a href="#" id="a_sprzedaj">
                                <h5>&nbsp;Sprzedaj</h5><h4>&nbsp;4.00</h4>
                                <img class="pull-right" id="img_sprzedaj" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_r.png'); ?>">
                                <img class="pull-right" id="img_sprzedaj_1" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_g.png'); ?>"></a></div>
                        <div id="kup" class="div_hover" style="width: 149px; height: 65px;position: absolute; display: inline">
                            <a href="#" id="a_kup">
                                <h5 id="h_kup">&nbsp;Kup</h5><h4 id="h_kup">&nbsp;4,20</h4>
                                <img class="pull-right" id="img_kup" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_g.png'); ?>">
                                <img class="pull-right" id="img_kup_1" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_r.png'); ?>"></a></div>
                    </div>
                </div>
                <div class="caption" id="waluta">
                    </br>
                    &nbsp;&nbsp;<img id="img_"src="<?php echo base_url('jpg/flags/czk.png'); ?>">
                    &nbsp;<sub><h2 id="h_euro">CZK</h2></sub>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div id="border_euro" class="caption"style="width:55px;height:51px;position: absolute; border-left: 1px solid;">
                      
                        &nbsp;&nbsp;<h4 id="h_euro">Korona</h4>
                    </div>
                    <hr>
                   
                    <div class="caption" >
                        <div  id="sprzedaj"class="div_hover"style=" cursor: pointer;width: 149px; height: 65px;position: absolute;display: inline">
                            <a href="#" id="a_sprzedaj">
                                <h5>&nbsp;Sprzedaj</h5><h4>&nbsp;4.00</h4>
                                <img class="pull-right" id="img_sprzedaj" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_r.png'); ?>">
                                <img class="pull-right" id="img_sprzedaj_1" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_g.png'); ?>"></a></div>
                        <div id="kup" class="div_hover" style="width: 149px; height: 65px;position: absolute; display: inline">
                            <a href="#" id="a_kup">
                                <h5 id="h_kup">&nbsp;Kup</h5><h4 id="h_kup">&nbsp;4,20</h4>
                                <img class="pull-right" id="img_kup" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_g.png'); ?>">
                                <img class="pull-right" id="img_kup_1" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_r.png'); ?>"></a></div>
                    </div>
                </div>
            </div>
            <div class="container text-center " id="informacje">
                <div class="caption" id="logo">
                    </br>
                    </br>
                    <img src="<?php echo base_url('jpg/flags/icon/stats.png'); ?>">
                    <h4>Najlepsza oferta na rynku<br/>wymiany walut</h4>
                </div> 
                <div class="caption" id="logo">
                    </br>
                    </br>
                    <img src="<?php echo base_url('jpg/flags/icon/handshake.png'); ?>">
                    <h4>Wielotetnie doświadczenie<br/>w braży kantorów</h4>
                </div> 
                <div class="caption" id="logo">
                    </br>
                    </br>
                    <img src="<?php echo base_url('jpg/flags/icon/police-badge.png'); ?>">
                    <h4>Najwysze standarty<br/>bezpieczeństwa online</h4>
                </div>
                <div class="caption" id="logo">
                    </br>
                    </br>
                    <img src="<?php echo base_url('jpg/flags/icon/talking.png'); ?>">
                    <h4>Indywidualne podejście<br/>do klienta</h4>
                </div> 
            </div>
            <div class="container text-center " id="aktualnosci">
                </br>
                <h2 class="pull-left">&nbsp;Aktualności:</h2>
                <table class="table pull-right" id="table">
                    <tr>
                        <th>Cennik</th>
                        <th>Pobierz</th>
                    </tr>
                    <tr>
                        <td class="pull-left">z dnia&nbsp; <?php echo date('Y-m-d'); ?></td>
                        <td><a href="#">pobierz</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="footer">

            <div class="row">

                <h4 class="pull-right col-xs-12">&nbsp;&nbsp;Obsługujemy przelewy <b>do wszystkich banków</b></h4>
            </div>
            <div class="container pull-right">
                <img src="<?php echo base_url('jpg/banks/alior.png'); ?>" alt="banks">
                <img src="<?php echo base_url('jpg/banks/bgz.png'); ?>" alt="banks">
                <img src="<?php echo base_url('jpg/banks/bph.png'); ?>" alt="banks">
                <img src="<?php echo base_url('jpg/banks/mbank.png'); ?>" alt="banks">
                <img src="<?php echo base_url('jpg/banks/pekao.png'); ?>" alt="banks">
                <img src="<?php echo base_url('jpg/banks/pko.png'); ?>" alt="banks">
                <img src="<?php echo base_url('jpg/banks/raiffeisen.png'); ?>" alt="banks">
                <img src="<?php echo base_url('jpg/banks/millennium.png'); ?>" alt="banks">
                <img src="<?php echo base_url('jpg/banks/bzwbk.png'); ?>" alt="banks">
            </div>

        </div>
        <footer>
            <nav id="nav_bar" class="navbar navbar-inverse " style="height:  250px;;background-color: #003333">


                <h5> <div class="collapse navbar-collapse">




                        <ul class="nav navbar-nav pull-left">  
                            <li class="pull-left"><a href="#">Jak to działa?</a></li>
                            <li class="pull-left"><a href="#">Kalkulator korzyści</a></li>
                            <li class="pull-left"><a href="#">Aktualności</a></li>
                            <li class="pull-left"><a href="#">Pomoc</a></li>
                            <li class="pull-left"><a href="#">O NAS</a></li>
                            <li class="pull-left"><a href="#">KONTAKT</a></li>
                        </ul>
                        <ul class="nav navbar-nav pull-right">

                            <li><a href="#" class="fb" ><span>Facebook</span></a></li>
                            <li> <a href="#" class="tw" ><span>Twitter</span></a></li>
                        </ul> 

                <ul class="nav navbar-nav pull-left">
                    <li class="pull-left"><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;Masz pytania zadzwoń?? <b>tel +48 000 000</b></a></li>
                    </ul></h5> 
                </br>

                <div class="container text-center">
                    <hr>
                    <h5 style="color:#999999">© <?php echo date('Y'); ?>&nbsp;by Fundacja Głos Młodych</h5>
                </div>
                </div>    
            </nav>


        </footer>


    </body>
</html>
