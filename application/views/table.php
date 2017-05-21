<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="<?php echo base_url() ?>media/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>media/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>media/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>media/css/dataTables.bootstrap.min.css">

    </head>
    <body>
        <script>
            
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
        </br>
        </br>
        <div class="container">
        <table id="example" class="table table-striped table-bordered " cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Symbol</th>
                    <th>Sprzedaż</th>
                    <th>Zakup</th>
                    <th>Czas</th>
                    
                </tr>
            </thead>
            <tbody>
        <?php foreach ($tmp_1 as $staff): ?>
        <tr>
            <td><?php echo $staff['name']; ?></td>
            <td><?php echo $staff['ask']; ?></td>
            <td><?php echo $staff['bit']; ?></td>
            <td style="color: red;"><?php echo $staff['time']; ?></td>
           
        </tr>
    <?php endforeach; ?>
            </tbody>
        </table>
        </div>
        </br>
    <h3 style="color: red;">&nbsp;&nbsp;<?php echo $token?></h3>
   
   
</body>
</html>
