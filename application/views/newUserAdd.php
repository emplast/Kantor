<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script type="text/javascript" src="<?php echo base_url('bootstrap/js/jquery.plugin.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('bootstrap/js/jquery.realperson.js'); ?>"></script>
<style type="text/css">
    #login,
    #haslo,
    #imie,
    #nazwisko,
    #email,
    #telKomorkowy
    {
        width: 250px;
        margin-left: 130px;

    }
    #defaultReal{
        width: 150px;
        margin-left: 230px;
        margin-top: -45px;
    }
    #button_1:hover{
        background-color: white;
        color: black;
    }
    #button_1{
        background-color:#003333;
        color:#D5D4D3;
    }
    .realperson-challenge {
        display: block;
        color: #000;
    }
    .realperson-text {
        font-family: "Courier New",monospace !important;
        font-size: 6px;
        font-weight: bold;
        letter-spacing: -1px;
        line-height: 3px;
    }
    .realperson-regen {
        padding-top: 4px;
        font-size: 12px;
        text-align: center;
        cursor: pointer;
    }
    .realperson-disabled {
        opacity: 0.5;
        filter: Alpha(Opacity=50);
    }
    .realperson-disabled .realperson-regen {
        cursor: default;
    }
    #part_8{
        margin-left: 50px;
    }
    #part_9{
        margin-left: 48px;
    }
    #part_10{
        margin-left: 105px;
    }
</style>
<script type="text/javascript">
    $(function () {
        $('#defaultReal').realperson();
        $('#defaultReal').realperson('option', {length: 4, includeNumbers: false, hashName: 'realHash', regenerate: 'Niewyrażnie'});

    });

    $(function () {
        $('#part_8').click(function () {
            $('#part_9').prop('checked', false);
            $('#part_10').prop('checked', false);

        });
        $('#part_9').click(function () {
            $('#part_8').prop('checked', false);
            $('#part_10').prop('checked', false);

        });
        $('#part_10').click(function () {
            $('#part_8').prop('checked', false);
            $('#part_9').prop('checked', false);

        });
    });

</script>

<div class="container">
    <?php echo form_open('index.php/NewUserAdd/addUser', array('id' => 'form_1')) ?>
    <div class="col-lg-4 col-lg-offset-4" style="margin-top:5%">
        </br>

        </br>
        <ul class="nav">
            <label>Rodzaj klienta</label>
            <li><p>Osoba fizyczna&nbsp;&nbsp;<?php echo form_checkbox(array('id' => 'part_8', 'name' => 'part_8', 'value' => TRUE)); ?></p></li>
            <li><p>Instytucja/Firma&nbsp;&nbsp;<?php echo form_checkbox(array('id' => 'part_9', 'name' => 'part_9', 'value' => TRUE)); ?></p></li>
            <li><p>Kantor&nbsp;&nbsp;<?php echo form_checkbox(array('id' => 'part_10', 'name' => 'part_10', 'value' => TRUE)); ?></p></li><?php echo form_error('part_10', '<div style="color:red">', '</div>'); ?>
            </br>
            <label>Dane klienta</label>
            </br><li><p class="pull-left">Login:</p><?php echo form_input(array('name' => 'part_1', 'id' => 'login', 'type' => 'text', 'class' => 'form-control ', 'placeholder' => 'Login')) ?></li><?php echo form_error('part_1', '<div style="color:red">', '</div>'); ?>
            </br><li><p class="pull-left">Hasło:</p><?php echo form_password(array('name' => 'part_2', 'id' => 'haslo', 'type' => 'text', 'class' => 'form-control ', 'placeholder' => 'Hasło')) ?></li><?php echo form_error('part_2', '<div style="color:red">', '</div>'); ?>
            </br><li><p class="pull-left">Imie:</p><?php echo form_input(array('name' => 'part_3', 'id' => 'imie', 'type' => 'text', 'class' => 'form-control ', 'placeholder' => 'Imie')) ?></li><?php echo form_error('part_3', '<div style="color:red">', '</div>'); ?>
            </br><li><p class="pull-left">Nazwisko:</p><?php echo form_input(array('name' => 'part_4', 'id' => 'nazwisko', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Nazwisko')) ?></li><?php echo form_error('part_4', '<div style="color:red">', '</div>'); ?>
            </br><li><p class="pull-left">E-mail:</p><?php echo form_input(array('name' => 'part_5', 'id' => 'email', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'E-mail')) ?></li><?php echo form_error('part_5', '<div style="color:red">', '</div>'); ?>
            </br><li><p class="pull-left">Tel komórkowy:</p><?php echo form_input(array('name' => 'part_6', 'id' => 'telKomorkowy', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Tel Komórkowy')) ?></li><?php echo form_error('part_6', '<div style="color:red">', '</div>'); ?>
            <br/><li><?php echo form_input(array('name' => 'defaultReal', 'id' => 'defaultReal', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Nie jestem robotem')) ?></li><?php echo form_error('defaultReal', '<div style="color:red">', '</div>'); ?>


        </ul>
        </br>
        </br>
        <?php echo form_input(array('name' => 'part_7', 'id' => 'button_1', 'type' => 'submit', 'class' => 'btn btn-default', 'value' => 'Zapisz')); ?>

    </div>

</div></br></br></br>


