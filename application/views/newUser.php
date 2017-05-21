


<style>
    #profile{
        margin-left: 250px;
        margin-top: -600px;
        
    }
    
    #about{
        margin-top: -900px;
        margin-left: 950px;
         
    }
    #content_1{
        height: 500px;
       
    }
    #pobierz{
        margin-top: -25px;
    }
    #part_1,
    #part_2,
    #part_3,
    #part_4,
    #part_5,
    #part_6,
    #part_7,
    #part_8,
    #part_9,
    #part_10,
    #part_11,
    #part_12{
        border: none;
    }
    
</style>

<script>
  
</script>
<?php echo form_open('index.php/NewUser/add',array('id'=>'form_1'));?>
<div class="container" id="content_1">

    <!-- Main content -->
    <section class="content">

        <div class="container" id="profile">
            <div class="col-sm-6">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                        <h3 class="profile-username text-center">Nina Mcintire</h3>
                        <p class="text-muted text-center">Software Engineer</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Imie</b> <a class="pull-right"><?php echo form_input(array('name'=>'part_1','type'=>'text','placeholder'=>'Imie','id'=>'part_1'));?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Nazwisko</b> <a class="pull-right"><?php echo form_input(array('name'=>'part_2','type'=>'text','placeholder'=>'Nazwisko','id'=>'part_2'));?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Miejscowość</b> <a class="pull-right"><?php echo form_input(array('name'=>'part_3','type'=>'text','placeholder'=>'Miejscowość','id'=>'part_3'));?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Kod pocztowy</b> <a class="pull-right"><?php echo form_input(array('name'=>'part_4','type'=>'text','placeholder'=>'00-000','id'=>'part_4'));?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Ulica</b> <a class="pull-right"><?php echo form_input(array('name'=>'part_5','type'=>'text','placeholder'=>'Ulica','id'=>'part_5'));?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Nr domu</b> <a class="pull-right"><?php echo form_input(array('name'=>'part_6','type'=>'text','placeholder'=>'Nr domu','id'=>'part_6'));?></a>
                            </li>
                             <li class="list-group-item">
                                 <b>Login</b> <a class="pull-right"><?php echo form_input(array('name'=>'part_7','type'=>'text','placeholder'=>'Login','id'=>'part_7'));?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Hasło</b> <a class="pull-right"><?php echo form_input(array('name'=>'part_8','type'=>'password','placeholder'=>'Hasło','id'=>'part_8'));?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Zdjęcie</b><a class="pull-right"><?php echo form_input(array('name'=>'part_9','type'=>'password','placeholder'=>'Zdjęcie','id'=>'part_9'));?></a></br> </br><input type="file" name="userfile">
                            </li>
                        </ul>

                        <?php echo form_input(array('type'=>'submit','value'=>'Zapisz','class'=>'btn btn-primary'))?>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
            </section>
    <section>
        <div class="container" id="about">
            <div class="col-md-3">
                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Doświadczenie zawodowe</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i>Edukacja</strong>
                        <p class="text-muted">
                            <?php echo form_textarea(array('name'=>'part_10','rows'=>7,'placeholder'=>'Edukacja','id'=>'part_10'));?>
                        </p>

                        

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i>Umiejętności</strong>
                       <?php echo form_textarea(array('name'=>'part_11','rows'=>7,'placeholder'=>'Umiejętności','id'=>'part_11'));?>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i>Uwagi</strong>
                        <?php echo form_textarea(array('name'=>'part_12','rows'=>7,'placeholder'=>'Uwagi','id'=>'part_12'));?>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div>
    </section>
</div>
<?php echo form_close();?>
<div class="col-sm-12">
