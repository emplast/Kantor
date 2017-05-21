

<script src="<?php echo base_url() ?>media/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>media/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/dataTables.bootstrap.min.css">

<style>
    #content_1{
        margin-left: 350px;
        margin-top: -600px;
        height:  800px;

    }
    #example_1{
        margin-left: 450px;
        margin-top: -870px;
        font-size: 12px;
        width: auto;
    }
</style>

<script>
       $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<div class="container"id="content_1">

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-4">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                        <h3 class="profile-username text-center">Nina Mcintire</h3>
                        <p class="text-muted text-center">Software Engineer</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Imie</b> <a class="pull-right"><input type="text" style="border:none;text-align: right" value="Piotr"></a>
                            </li>
                            <li class="list-group-item">
                                <b>Nazwisko</b> <a class="pull-right"><input type="text" style="border:none;text-align: right" value="Majewski"></a>
                            </li>
                            <li class="list-group-item">
                                <b>Miejscowość</b> <a class="pull-right"><input type="text" style="border:none;text-align: right" value="Milicz"></a>
                            </li>
                            <li class="list-group-item">
                                <b>Adres</b> <a class="pull-right"><input type="text" style="border:none;text-align: right" value="Kościuszki 48"></a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-danger"><b>Zmień</b></a>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Me</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i>  Education</strong>
                        <p class="text-muted">
                            B.S. in Computer Science from the University of Tennessee at Knoxville
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                        <p class="text-muted">Malibu, California</p>

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
                        <p>
                            <span class="label label-danger">UI Design</span>
                            <span class="label label-success">Coding</span>
                            <span class="label label-info">Javascript</span>
                            <span class="label label-warning">PHP</span>
                            <span class="label label-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div>
    </section>

    <div class="col-sm-12" id="example_1">
        <table id="example" class="table" cellspacing="0" >
            <thead>
                <tr>
                    <th>Imie</th>
                    <th>Nazwisko</th>
                    <th>Miejscowość</th>
                    <th>Kod pocztowy</th>
                    <th>Ulica</th>
                    <th>Nr domu</th>
                    <th>Login</th>
                    <th>Hasło</th>
                    <th>Usuń</th>
                </tr>
            </thead>
            
            <tbody>
 <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['imie']; ?></td>
            <td><?php echo $user['nazwisko']; ?></td>
            <td><?php echo $user['miejscowosc']; ?></td>
            <td><?php echo $user['kod']; ?></td>
            <td><?php echo $user['ulica']; ?></td>
            <td><?php echo $user['nr_domu']; ?></td>
            <td><?php echo $user['login']; ?></td>
            <td><?php echo $user['haslo']; ?></td>
            <td style="color: red;"><a href="#">Usuń</a></td>
           
        </tr>
    <?php endforeach; ?>
            </tbody>
        </table>

        
    </div>
</div>
<div class="col-sm-12" >   