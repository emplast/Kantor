<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/jquery.cookie.js"></script>

<style type="text/css">


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
   
    
    #img_sprzedaj_eur,
    #img_sprzedaj_usd,
    #img_sprzedaj_gbp,
    #img_sprzedaj_chf,
    #img_sprzedaj_rub,
    #img_sprzedaj_czk,
    #img_sprzedaj_1_eur,
    #img_sprzedaj_1_usd,
    #img_sprzedaj_1_gbp,
    #img_sprzedaj_1_chf,
    #img_sprzedaj_1_rub,
    #img_sprzedaj_1_czk{
        margin-top: -30px;
        margin-right: 15px;
    }

   
    #img_kup_eur,
    #img_kup_usd,
    #img_kup_gbp,    
    #img_kup_chf,
    #img_kup_rub,
    #img_kup_czk,
    #img_kup_1_eur,
    #img_kup_1_usd,
    #img_kup_1_gbp,
    #img_kup_1_chf,
    #img_kup_1_rub,
    #img_kup_1_czk{
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
    
    #img_sprzedaj_eur,
    #img_sprzedaj_usd,
    #img_sprzedaj_gbp,
    #img_sprzedaj_chf,
    #img_sprzedaj_rub,
    #img_sprzedaj_czk,
    #img_sprzedaj_1_eur,
    #img_sprzedaj_1_usd,
    #img_sprzedaj_1_gbp,
    #img_sprzedaj_1_chf,
    #img_sprzedaj_1_rub,
    #img_sprzedaj_1_czk{
        display: none;
    }
   
    #img_kup_eur,
    #img_kup_usd,
    #img_kup_gbp,
    #img_kup_chf,
    #img_kup_rub,
    #img_kup_czk,    
    #img_kup_1_eur,
    #img_kup_1_usd,
    #img_kup_1_gbp,
    #img_kup_1_chf,
    #img_kup_1_rub,
    #img_kup_1_czk{
        display: none;
    }

</style>
<script type="text/javascript">


    $(function () {

        function Round(n, k)
        {
            var factor = Math.pow(10, k + 1);
            n = Math.round(Math.round(n * factor) / 10);
            return n / (factor / 10);
        }


        window.setInterval(function () {


            $.ajax({

                type: 'GET',
                dataType: 'xml',
                timeout: 3000,
                url: '<?php echo base_url('xml/plik.xml') ?>',
                success: function (xml) {
                    $(xml).find('pair').each(function () {

                        if ($(this).find('name').text() == "EURPLN") {

                            if ($.cookie('eur') > $(this).find('bid').text()) {
                                $('#img_sprzedaj_eur').show();
                                $('#img_sprzedaj_1_eur').css('display', 'none');

                                $.removeCookie('eur');

                            } else if ($.cookie('eur') < $(this).find('bid').text()) {

                                $('#img_sprzedaj_eur').css('display', 'none');
                                $('#img_sprzedaj_1_eur').show();

                                $.removeCookie('eur');
                            }
                            if ($.cookie('eur_k') > $(this).find('ask').text()) {
                                $('#img_kup_eur').show();
                                $('#img_kup_1_eur').css('display', 'none');

                                $.removeCookie('eur_k');

                            } else if ($.cookie('eur_k') < $(this).find('ask').text()) {

                                $('#img_kup_eur').css('display', 'none');
                                $('#img_kup_1_eur').show();

                                $.removeCookie('eur_k');
                            }


                            $('#eur').html(Round($(this).find('bid').text(), 3));
                            $('#eur_k').html(Round($(this).find('ask').text(), 3));
                            $.cookie('eur', $(this).find('bid').text());
                            $.cookie('eur_k', $(this).find('ask').text());

                        }
                        if ($(this).find('name').text() == 'USDPLN') {
                            if ($.cookie('usd') > $(this).find('bid').text()) {
                                $('#img_sprzedaj_usd').show();
                                $('#img_sprzedaj_1_usd').css('display', 'none');

                                $.removeCookie('usd');

                            } else if ($.cookie('usd') < $(this).find('bid').text()) {

                                $('#img_sprzedaj_usd').css('display', 'none');
                                $('#img_sprzedaj_1_usd').show();

                                $.removeCookie('usd');
                            }
                            if ($.cookie('usd_k') > $(this).find('ask').text()) {
                                $('#img_kup_usd').show();
                                $('#img_kup_1_usd').css('display', 'none');

                                $.removeCookie('usd_k');

                            } else if ($.cookie('usd_k') < $(this).find('ask').text()) {

                                $('#img_kup_usd').css('display', 'none');
                                $('#img_kup_1_usd').show();

                                $.removeCookie('usd_k');
                            }
                            $('#usd').html(Round($(this).find('bid').text(), 3));
                            $('#usd_k').html(Round($(this).find('ask').text(), 3));
                            $.cookie('usd', $(this).find('bid').text());
                            $.cookie('usd_k', $(this).find('ask').text());
                        }

                        if ($(this).find('name').text() == 'GBPPLN') {
                            if ($.cookie('gbp') > $(this).find('bid').text()) {
                                $('#img_sprzedaj_gbp').show();
                                $('#img_sprzedaj_1_gbp').css('display', 'none');

                                $.removeCookie('gbp');

                            } else if ($.cookie('gbp') < $(this).find('bid').text()) {

                                $('#img_sprzedaj_gbp').css('display', 'none');
                                $('#img_sprzedaj_1_gbp').show();

                                $.removeCookie('gbp');
                            }
                            if ($.cookie('gbp_k') > $(this).find('ask').text()) {
                                $('#img_kup_gbp').show();
                                $('#img_kup_1_gbp').css('display', 'none');

                                $.removeCookie('gbp_k');

                            } else if ($.cookie('gbp_k') < $(this).find('ask').text()) {

                                $('#img_kup_gbp').css('display', 'none');
                                $('#img_kup_1_gbp').show();

                                $.removeCookie('gbp_k');
                            }
                            $('#gbp').html(Round($(this).find('bid').text(), 3));
                            $('#gbp_k').html(Round($(this).find('ask').text(), 3));
                            $.cookie('gbp', $(this).find('bid').text());
                            $.cookie('gbp_k', $(this).find('ask').text());
                        }
                        
                         if ($(this).find('name').text() == 'CHFPLN') {
                            if ($.cookie('chf') > $(this).find('bid').text()) {
                                $('#img_sprzedaj_chf').show();
                                $('#img_sprzedaj_1_chf').css('display', 'none');

                                $.removeCookie('chf');

                            } else if ($.cookie('chf') < $(this).find('bid').text()) {

                                $('#img_sprzedaj_chf').css('display', 'none');
                                $('#img_sprzedaj_1_chf').show();

                                $.removeCookie('chf');
                            }
                            if ($.cookie('chf_k') > $(this).find('ask').text()) {
                                $('#img_kup_chf').show();
                                $('#img_kup_1_chf').css('display', 'none');

                                $.removeCookie('chf_k');

                            } else if ($.cookie('chf_k') < $(this).find('ask').text()) {

                                $('#img_kup_chf').css('display', 'none');
                                $('#img_kup_1_chf').show();

                                $.removeCookie('chf_k');
                            }
                            $('#chf').html(Round($(this).find('bid').text(), 3));
                            $('#chf_k').html(Round($(this).find('ask').text(), 3));
                            $.cookie('chf', $(this).find('bid').text());
                            $.cookie('chf_k', $(this).find('ask').text());
                        }
                        
                        
                         if ($(this).find('name').text() == 'RUBPLN') {
                            if ($.cookie('rub') > $(this).find('bid').text()) {
                                $('#img_sprzedaj_rub').show();
                                $('#img_sprzedaj_1_rub').css('display', 'none');

                                $.removeCookie('rub');

                            } else if ($.cookie('rub') < $(this).find('bid').text()) {

                                $('#img_sprzedaj_rub').css('display', 'none');
                                $('#img_sprzedaj_1_rub').show();

                                $.removeCookie('rub');
                            }
                            if ($.cookie('rub_k') > $(this).find('ask').text()) {
                                $('#img_kup_rub').show();
                                $('#img_kup_1_rub').css('display', 'none');

                                $.removeCookie('rub_k');

                            } else if ($.cookie('rub_k') < $(this).find('ask').text()) {

                                $('#img_kup_rub').css('display', 'none');
                                $('#img_kup_1_rub').show();

                                $.removeCookie('rub_k');
                            }
                            $('#rub').html(Round($(this).find('bid').text(), 4));
                            $('#rub_k').html(Round($(this).find('ask').text(), 4));
                            $.cookie('rub', $(this).find('bid').text());
                            $.cookie('rub_k', $(this).find('ask').text());
                        }
                        
                        
                        
                        if ($(this).find('name').text() == 'CZKPLN') {
                            if ($.cookie('czk') > $(this).find('bid').text()) {
                                $('#img_sprzedaj_czk').show();
                                $('#img_sprzedaj_1_czk').css('display', 'none');

                                $.removeCookie('czk');

                            } else if ($.cookie('czk') < $(this).find('bid').text()) {

                                $('#img_sprzedaj_czk').css('display', 'none');
                                $('#img_sprzedaj_1_czk').show();

                                $.removeCookie('czk');
                            }
                            if ($.cookie('czk_k') > $(this).find('ask').text()) {
                                $('#img_kup_czk').show();
                                $('#img_kup_1_czk').css('display', 'none');

                                $.removeCookie('czk_k');

                            } else if ($.cookie('czk_k') < $(this).find('ask').text()) {

                                $('#img_kup_czk').css('display', 'none');
                                $('#img_kup_1_czk').show();

                                $.removeCookie('czk_k');
                            }
                            $('#czk').html(Round($(this).find('bid').text(), 4));
                            $('#czk_k').html(Round($(this).find('ask').text(), 4));
                            $.cookie('czk', $(this).find('bid').text());
                            $.cookie('czk_k', $(this).find('ask').text());
                        }
                    });



                },
                /* error: function (event, xhr, ajaxOptions, thrownError, string) {
                 alert('Event: ' + event + "jqXHR: " + xhr + 'ajaxOptions ' + ajaxOptions + 'thrownError: ' + thrownError + 'String :' + string);
                 
                 },*/

            });


        }, 6000);
    });

</script>


<div class="img-responsive"style="max-width:100%; height:100%;">
    <img  id="img_01"src="<?php echo base_url('jpg/04.frond_1300_1500.jpg'); ?> "width="100%" height="100%" />

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
                <div  id="sprzedaj"class="div_hover"style=" width: 149px; height: 65px;position: absolute;display: inline">
                    <a href="#" id="a_sprzedaj">

                        <h5 id="h_sprzedaj">&nbsp;Sprzedaj</h5><h4 id="eur">&nbsp;&nbsp;<?php echo $eur ?></h4>
                        <img class="pull-right" id="img_sprzedaj_eur" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_r.png'); ?>">
                        <img class="pull-right" id="img_sprzedaj_1_eur" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_g.png'); ?>"></a>
                </div>
                <div id="kup" class="div_hover" style="width: 149px; height: 65px;position: absolute;; display: inline">
                    <a href="#" id="a_kup">
                        <h5 id="h_kup">&nbsp;Kup</h5><h4 id="eur_k">&nbsp;<?php echo $eur_k ?></h4>
                        <img class="pull-right" id="img_kup_eur" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_g.png'); ?>">
                        <img class="pull-right" id="img_kup_1_eur" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_r.png'); ?>"></a>
                </div>
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
                <div  id="sprzedaj"class="div_hover"style=" width: 149px; height: 65px;position: absolute;display: inline">
                    <a href="#" id="a_sprzedaj">
                        <h5>&nbsp;Sprzedaj</h5><h4 id="usd">&nbsp;<?php echo $usd ?></h4>
                        <img class="pull-right" id="img_sprzedaj_usd" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_r.png'); ?>">
                        <img class="pull-right" id="img_sprzedaj_1_usd" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_g.png'); ?>"></a>
                </div>
                <div id="kup" class="div_hover" style="width: 149px; height: 65px;position: absolute; display: inline">
                    <a href="#" id="a_kup">
                        <h5 id="h_kup">&nbsp;Kup</h5><h4 id="usd_k">&nbsp;<?php echo $usd_k ?></h4>
                        <img class="pull-right" id="img_kup_usd" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_g.png'); ?>">
                        <img class="pull-right" id="img_kup_1_usd" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_r.png'); ?>"></a>
                </div>
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
                        <h5>&nbsp;Sprzedaj</h5><h4 id="gbp">&nbsp;<?php echo $gbp ?></h4>
                        <img class="pull-right" id="img_sprzedaj_gbp" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_r.png'); ?>">
                        <img class="pull-right" id="img_sprzedaj_1_gbp" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_g.png'); ?>"></a>
                </div>
                <div id="kup" class="div_hover" style="width: 149px; height: 65px;position: absolute; display: inline">
                    <a href="#" id="a_kup">
                        <h5 id="h_kup">&nbsp;Kup</h5><h4 id="gbp_k">&nbsp;<?php echo $gbp_k ?></h4>
                        <img class="pull-right" id="img_kup_gbp" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_g.png'); ?>">
                        <img class="pull-right" id="img_kup_1_gbp" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_r.png'); ?>"></a>
                </div>
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
                        <h5>&nbsp;Sprzedaj</h5><h4 id="chf">&nbsp;<?php echo $chf?></h4>
                        <img class="pull-right" id="img_sprzedaj_chf" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_r.png'); ?>">
                        <img class="pull-right" id="img_sprzedaj_1_chf" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_g.png'); ?>"></a>
                </div>
                <div id="kup" class="div_hover" style="width: 149px; height: 65px;position: absolute; display: inline">
                    <a href="#" id="a_kup">
                        <h5 id="h_kup">&nbsp;Kup</h5><h4 id="chf_k">&nbsp;<?php echo $chf_k?></h4>
                        <img class="pull-right" id="img_kup_chf" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_g.png'); ?>">
                        <img class="pull-right" id="img_kup_1_chf" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_r.png'); ?>"></a>
                </div>
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
                        <h5>&nbsp;Sprzedaj</h5><h4 id="rub">&nbsp;<?php echo $rub?></h4>
                        <img class="pull-right" id="img_sprzedaj_rub" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_r.png'); ?>">
                        <img class="pull-right" id="img_sprzedaj_1_rub" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_g.png'); ?>"></a>
                </div>
                <div id="kup" class="div_hover" style="width: 149px; height: 65px;position: absolute; display: inline">
                    <a href="#" id="a_kup">
                        <h5 id="h_kup">&nbsp;Kup</h5><h4 id="rub_k">&nbsp;<?php echo $rub_k?></h4>
                        <img class="pull-right" id="img_kup_rub" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_g.png'); ?>">
                        <img class="pull-right" id="img_kup_1_rub" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_r.png'); ?>"></a>
                </div>
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
                        <h5>&nbsp;Sprzedaj</h5><h4 id="czk">&nbsp;<?php echo $czk?></h4>
                        <img class="pull-right" id="img_sprzedaj_czk" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_r.png'); ?>">
                        <img class="pull-right" id="img_sprzedaj_1_czk" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_g.png'); ?>"></a>
                </div>
                <div id="kup" class="div_hover" style="width: 149px; height: 65px;position: absolute; display: inline">
                    <a href="#" id="a_kup">
                        <h5 id="h_kup">&nbsp;Kup</h5><h4 id="czk_k">&nbsp;<?php echo $czk_k?></h4>
                        <img class="pull-right" id="img_kup_czk" src="<?php echo base_url('jpg/flags/arrow/arrow-down_24_24_g.png'); ?>">
                        <img class="pull-right" id="img_kup_1_czk" src="<?php echo base_url('jpg/flags/arrow/arrow-up_24_24_r.png'); ?>"></a>
                </div>
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
<div class="container-fluid" style="float: top;margin-top: 25%; height: 100px;background-color: transparent;position: relative;">
</div>