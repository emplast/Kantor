<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<script src="<?php echo base_url(); ?>bootstrap/js/jquery-3.2.1.min.js"></script>
<style type="text/css">
    #section_1{
        margin-left: 20%;
        margin-top: -60%;
        width:56%;
    }
    #section_2{
        float: top;
        width: 56%;
        margin-left: 78%;
        margin-top: -75%;
    }
    #myfile{
        display: none;
    }
    #part_0,
    #part_1,
    #part_2,
    #part_3,
    #part_4,
    #part_4z,
    #part_5,
    #part_6,
    #part_7,
    #part_8,
    #part_9,
    #part_10,
    #part_11,
    #part_12,
    #part_13,
    #part_14,
    #part_15,
    #part_16,
    #part_17,
    #part_18,
    #part_19,
    #part_20,
    #part_21,
    #part_22,
    #part_23,
    #part_24,
    #part_25,
    #part_26,
    #part_27,
    #part_28,
    #part_29{
        border:none;
        text-align: right;
        width: 300px;
    }

    #part_32,
    #part_33,
    #part_34,
    #part_35{
        border: none;
    }

</style>

<script type="text/javascript">
    
     $(function () {

        $('#new_button').on('click', function () {
            $('#myfile').click();
        });

    });
    $(function () {
        $('#myfile').change(function () {
            var plik = $('#myfile').val().replace(/.*(\/|\\)/, '');
            $('#p_file').html(plik);
            $('#part_36').attr('value', plik);
            $('#form_1').trigger('submit');

        });
    });
    $(function () {

        $('#h3_user_name').html($('#part_1').val() + ' ' + $('#part_2').val());
        $('#p_stanowisko').html($('#part_0').val());
        var value = $('#box_1').height();
        $('#box_2').height(value);
        

    });
    $(function(){
        $('#part_31').on('click',function(){
            $('#myModal').show();
        });
        $('#part_0b').on('click',function(){
            $('#myModal').hide();
        });
    });
    $(function () {
        if (<?php echo $haslo ?> == 1) {
            $('#myModal').show();

        }

    });
</script>
<div class="container">
    <?php echo form_open('index.php/EditDataKantor/index', array('id' => 'form_2')); ?>
    <section class="content" id="section_1">



        <!-- Profile Image -->
        <div class="box box-primary  pull-left" id="box_1">
            <div class="box-body box-profile">

                <img class="profile-user-img img-responsive img-circle" src="/jpg/adminUser/<?php echo $photo ?>" alt="User profile picture">
                <h3 class="profile-username text-center" id="h3_user_name"></h3>
                <p class="text-muted text-center"id="p_stanowisko"></p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Nazwa firmy</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_0', 'name' => 'part_0', 'type' => 'text', 'value' => $load['firma'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Imie</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_1', 'name' => 'part_1', 'type' => 'text', 'value' => $load['imie'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Nazwisko</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_2', 'name' => 'part_2', 'type' => 'text', 'value' => $load['nazwisko'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Login</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_3', 'name' => 'part_3', 'type' => 'text', 'value' => $load['login'], 'readonly' => FALSE)); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Stanowisko</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_4', 'name' => 'part_4', 'type' => 'text', 'value' => $load['stanowisko'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Nr Licencji</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_4z', 'name' => 'part_4z', 'type' => 'text', 'value' => $load['nr_licencji'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Kraj</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_5', 'name' => 'part_5', 'type' => 'text', 'value' => $load['kraj'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Województwo</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_6', 'name' => 'part_6', 'type' => 'text', 'value' => $load['wojewodztwo'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Miejscowość</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_7', 'name' => 'part_7', 'type' => 'text', 'value' => $load['miejscowosc'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Kod pocztowy</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_8', 'name' => 'part_8', 'type' => 'text', 'value' => $load['kod'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Ulica</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_9', 'name' => 'part_9', 'type' => 'text', 'value' => $load['ulica'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Nr lokalu</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_10', 'name' => 'part_10', 'type' => 'text', 'value' => $load['nr_lokalu'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Pesel</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_11', 'name' => 'part_11', 'type' => 'text', 'value' => $load['pesel'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>NIP</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_12', 'name' => 'part_12', 'type' => 'text', 'value' => $load['nip'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Telefon</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_13', 'name' => 'part_13', 'type' => 'text', 'value' => $load['telefon'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>E-mail</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_14', 'name' => 'part_14', 'type' => 'text', 'value' => $load['email'])); ?></a>
                    </li>
                    </br>
                    <label class="text-center">Numery kont w polskich Bankach</label>
                    <li class="list-group-item">
                        <b>Numer konta PLN</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_15', 'name' => 'part_15', 'type' => 'text', 'value' => $load['pln_pln'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Numer konta USD</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_16', 'name' => 'part_16', 'type' => 'text', 'value' => $load['pln_usd'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Numer konta EUR</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_17', 'name' => 'part_17', 'type' => 'text', 'value' => $load['pln_eur'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Numer konta GBP</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_18', 'name' => 'part_18', 'type' => 'text', 'value' => $load['pln_gbp'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Numer konta CHF</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_19', 'name' => 'part_19', 'type' => 'text', 'value' => $load['pln_chf'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Numer konta CZK</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_20', 'name' => 'part_20', 'type' => 'text', 'value' => $load['pln_czk'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Numer konta RUB</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_21', 'name' => 'part_21', 'type' => 'text', 'value' => $load['pln_rub'])); ?></a>
                    </li>
                    </br>
                    <label class="text-center">Numery kont w zagranicznych Bankach</label>
                    <li class="list-group-item">
                        <b>Numer konta PLN</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_22', 'name' => 'part_22', 'type' => 'text', 'value' => $load['zag_pln'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Numer konta PLN</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_23', 'name' => 'part_23', 'type' => 'text', 'value' => $load['zag_pln_1'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Numer konta EUR</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_24', 'name' => 'part_24', 'type' => 'text', 'value' => $load['zag_eur'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Numer konta EUR</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_25', 'name' => 'part_25', 'type' => 'text', 'value' => $load['zag_eur_1'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Numer konta USD</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_26', 'name' => 'part_26', 'type' => 'text', 'value' => $load['zag_usd'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Numer konta USD</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_27', 'name' => 'part_27', 'type' => 'text', 'value' => $load['zag_usd_1'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Numer konta CHF</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_28', 'name' => 'part_28', 'type' => 'text', 'value' => $load['zag_chf'])); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Numer konta CHF</b> <a class="pull-right"><?php echo form_input(array('id' => 'part_29', 'name' => 'part_29', 'type' => 'text', 'value' => $load['zag_chf_1'])); ?></a>
                    </li>
                </ul>
                <?php echo form_input(array('id' => 'part_30', 'name' => 'part_30', 'class' => 'btn btn-danger', 'type' => 'submit', 'value' => 'Edytuj')); ?>
                <a href="#" class="btn btn-primary" id="part_31"><b>Zmień hasło</b></a>



            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section>
    <section class="content" id="section_2">
        <!-- About Me Box -->
        <div class="box box-primary pull-right" id="box_2">
            <div class="box-header with-border">
                <h3 class="box-title">O mnie</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <strong><i class="fa fa-book margin-r-5"></i>  Edukacja</strong>
                <?php echo form_textarea(array('id' => 'part_32', 'name' => 'part_32', 'rows' => 5, 'cols' => 90), $load['edukacja']); ?>
                <hr>
                <strong><i class="fa fa-map-marker margin-r-5"></i> Lokalizacja</strong>
                <?php echo form_textarea(array('id' => 'part_33', 'name' => 'part_33', 'rows' => 5, 'cols' => 90, 'value' => $load['lokalizacja'])); ?>
                <hr>
                <strong><i class="fa fa-pencil margin-r-5"></i> Zainteresowania</strong>
                <?php echo form_textarea(array('id' => 'part_34', 'name' => 'part_34', 'rows' => 5, 'cols' => 90, 'value' => $load['zainteresowania'])); ?>
                <hr>
                <strong><i class="fa fa-file-text-o margin-r-5"></i> Notatki</strong>

                <?php echo form_textarea(array('id' => 'part_35', 'name' => 'part_35', 'rows' => 41, 'cols' => 90, 'value' => $load['notatki'])); ?>
                <?php echo form_close() ?>

                <a class="btn btn-default pull-left " id="new_button"><b>Dodaj zdjęcie</b></a>


                <p class="pull-right" id="p_file" style="margin-right: 60%"><?php echo $plik ?></p>
                <?php echo form_open_multipart('index.php/AddPhotoAdminUser/index', array('id' => 'form_1')); ?>
                <?php echo form_input(array('type' => 'file', 'name' => 'userfile', 'id' => 'myfile', 'class' => 'inputfile')); ?>
                <?php echo form_input(array('id' => 'part_36', 'name' => 'part_36', 'type' => 'hidden')) ?>
                <?php echo form_close(); ?>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section>
</div>
<?php echo form_open('index.php/EditPasswordAdmin/editAdminPassword'); ?>
<div class="modal" id="myModal" data-backdrop="static">
    <div class="modal-dialog" style="margin-top:10%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="part_0b">×</button>
                <h4 class="modal-title">Zmiana hasła: <?php echo $user; ?></h4>
            </div>
            <div class="modal-body">

                <p>Hasło&nbsp;&nbsp;&nbsp;<?php echo form_input(array('id' => 'part_1b', 'name' => 'part_1b', 'class' => 'form-control', 'type' => 'password', 'placeholder' => 'Hasło')) ?></p><?php echo form_error('part_2b', '<div style="color:red">', '</div>'); ?>
                <p>Powtórz hasło&nbsp;&nbsp;&nbsp;<?php echo form_input(array('id' => 'part_2b', 'name' => 'part_2b', 'class' => 'form-control', 'type' => 'password', 'placeholder' => 'Powtórz hasło')) ?></p>


                </br>
                <?php echo form_hidden('part_3b'); ?>
            </div>
            <div class="modal-footer">
                <?php echo form_button(array('id' => 'part_4b', 'type' => 'submit', 'class' => 'btn btn-danger', 'content' => 'Edytuj')) ?>
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
