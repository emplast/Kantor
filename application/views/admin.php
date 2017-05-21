<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url();?>dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url();?>dist/css/skins/_all-skins.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url();?>plugins/iCheck/flat/blue.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="<?php echo base_url();?>plugins/morris/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo base_url();?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?php echo base_url();?>plugins/datepicker/datepicker3.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo base_url();?>plugins/daterangepicker/daterangepicker.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?php echo base_url();?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

       
        
       <script src="<?php echo base_url();?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>dist/js/demo.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/jquery-3.2.1.min.js"></script>
 <script src="<?php echo base_url();?>media/js/jquery.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/pagination.js"></script>
<!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url();?>plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url();?>plugins/morris/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url();?>plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url();?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url();?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url();?>plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="<?php echo base_url();?>Kantor/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url();?>plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url();?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="<?php echo base_url();?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url();?>plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url();?>dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url();?>dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url();?>dist/js/demo.js"></script>
        
        <style type="text/css">
            #count{
                height: 200px;
            }
        </style>
       

    </head>
    <body>
        
        
        <div class="skin-blue ">
            <header class="main-header">
                <a href="<?php echo base_url()?>index.php/Welcome" class="logo">
                    <!-- LOGO -->
                    Panel administracyjny
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                          <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div> 
          
        <div class="skin-black">
            <div class="main-sidebar">
                <!-- Inner sidebar -->
                <div class="sidebar">
                    <!-- user panel (Optional) -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Nazwa użytkownika</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div><!-- /.user-panel -->

                   
                   
                    <div class="wrapper">
                        <!-- Sidebar Menu -->
                        <ul class="sidebar-menu">
                            <li class="header">MENU</li>
                            <!-- Optionally, you can add icons to the links -->
                            <li class="active" ><a href="<?php echo base_url();?>index.php/Admin/index"><span>Administracja</span></a></li>
                            <li class="treeview">
                                <a href="<?php echo base_url();?>index.php/Admin/index">
                                    <i class="fa fa-share"></i> <span>Administracja</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Przekazanie środków</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Sprzedaż waluty</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/Table/index"><i class="fa fa-circle-o"></i>Zakup waluty</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/UserProfile/index"><i class="fa fa-circle-o"></i>Użytkownicy</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/NewUser/index"><i class="fa fa-circle-o"></i>Nowy Użytkownik</a></li>

                                </ul>
                            </li> 
                            <li class=""><a href="#"><span>Zestawienia</span></a></li>

                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-share"></i> <span>Obrót walutami</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Obrót dzienny</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Obrót miesięczny</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Obrót kwartalny</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Obrót roczny</a></li>
                                </ul>
                            </li>

                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-share"></i> <span>Ewidencje zakupów</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Zakup dzienny</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Zakup miesięczny</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Zakup kwartalny</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Zakup roczny</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-share"></i> <span>Ewidencje sprzedaży</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Sprzedaż dzienna</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Sprzedaż miesięczna</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Sprzedaż kwartalna</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Sprzedaż roczna</a></li>
                                </ul>
                            </li>
                            <li ><a href="#"><span>Raporty</span></a></li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-share"></i> <span>Raport</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Raport dzienny</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Raport miesięczny</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Raport kwartalny</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Raport roczny</a></li>
                                </ul>
                            </li>
                            <li ><a href="#"><span>Stany walut</span></a></li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-share"></i> <span>Stan</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Stan na dzisiejszy dzień</a></li>
                                </ul>
                            <li ><a href="#"><span>Kontrahenci</span></a></li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-share"></i> <span>Kontrahenci</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Osoby fizyczne</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Instytucje i firmy</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>Kantory</a></li>

                                </ul>
                            </li> 


                            </li>
                        </ul><!-- /.sidebar-menu -->
</div><!-- /.sidebar -->
</div><!-- /.main-sidebar -->
<div class="container" id="count">    
        