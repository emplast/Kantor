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
         <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
        <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    </head>
    <body>
        <div class="container text-center">
            <br/>
            <br/>
            <h1>Przepraszamy trwają prace remontowe na witrynie</h1>
            <h2>Za wszelkie trudności przepraszamy</h2>
            <img src="<?php echo base_url('jpg/remont.jpg')?>">
            <br/>
            <br/>
            <br/>
             <a href="<?php echo base_url('index.php/Aplikacja/index')?>" class="btn btn-primary">Frond</a>
             <a href="<?php echo base_url('index.php/Aplikacja/login')?>" class="btn btn-primary">Back</a>
             
            <hr>
            <p>© <?php echo date('Y');?> by Fundacja Głos Młodych</p>
            
        </div>
    </body>
</html>
