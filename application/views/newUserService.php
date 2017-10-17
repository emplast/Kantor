<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script src="<?php echo base_url(); ?>bootstrap/js/jquery-3.2.1.min.js"></script>

<style type="text/css">
    #form_1{
        margin-left: 40%;
        margin-top: -60%;
    }
</style>

<script type="text/javascript">
    $(function () {

        $('#part_8').click(function () {
            $('#part_7').prop('checked', false);
            $('#part_9').prop('checked', false);

        });
        $('#part_9').click(function () {
            $('#part_7').prop('checked', false);
            $('#part_8').prop('checked', false);

        });
    });
</script>


<?php echo form_open('index.php/NewUserAdmin/addUserService', array('class' => 'col-xs-8', 'id' => 'form_1')); ?>
<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Dodawanie nowego użytkownika obsługi/klienta kantoru</h3>
    </div><!-- /.box-header -->
    <!-- form start -->

    <div class="box-body">
        <div class="form-group">
            <label  class="col-sm-2 control-label">Nazwisko</label>
            <div class="col-sm-10">
                <?php echo form_input(array('id' => 'part_1', 'name' => 'part_1', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Nazwisko')) ?>
                <?php echo form_error('part_1', '<div style="color:red">', '</div>'); ?>
            </div>
        </div>
        </br>
        <div class="form-group">
            <label  class="col-sm-2 control-label">Imie</label>
            <div class="col-sm-10">
                <?php echo form_input(array('id' => 'part_2', 'name' => 'part_2', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Imie')) ?>
                <?php echo form_error('part_2', '<div style="color:red">', '</div>'); ?>
            </div>
        </div>
        </br>
        <div class="form-group">
            <label class="col-sm-2 control-label">Login</label>
            <div class="col-sm-10">
                <?php echo form_input(array('id' => 'part_3', 'name' => 'part_3', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Login')) ?>
                <?php echo form_error('part_3', '<div style="color:red">', '</div>'); ?>
            </div>
        </div>
        </br>
        <div class="form-group">
            <label class="col-sm-2 control-label">Hasło</label>
            <div class="col-sm-10">
                <?php echo form_input(array('id' => 'part_4', 'name' => 'part_4', 'type' => 'password', 'class' => 'form-control', 'placeholder' => 'Hasło')) ?>
                <?php echo form_error('part_4', '<div style="color:red">', '</div>'); ?>
            </div>
        </div>
        </br>
        <div class="form-group">
            <label class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-10">
                <?php echo form_input(array('id' => 'part_5', 'name' => 'part_5', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'E-mail')) ?>
                <?php echo form_error('part_5', '<div style="color:red">', '</div>'); ?>
            </div>
        </div>
        </br>
        <div class="form-group">
            <label class="col-sm-2 control-label">Telefon</label>
            <div class="col-sm-10">
                <?php echo form_input(array('id' => 'part_6', 'name' => 'part_6', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Telefon')) ?>
                <?php echo form_error('part_6', '<div style="color:red">', '</div>'); ?>
            </div>
        </div>
        </br>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                </br>
                <hr>
                <label>Uprawnienia</label>

                <div class="checkbox">
                    <label>
                        <?php echo form_checkbox(array('id' => 'part_8', 'name' => 'part_8', 'checked' => 'checked', 'value' => TRUE)) ?>Obsługi
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <?php echo form_checkbox(array('id' => 'part_9', 'name' => 'part_9', 'value' => TRUE)) ?>Klienta
                    </label>
                    <?php echo form_error('part_9', '<div style="color:red">', '</div>'); ?>
                </div>
                <hr>
            </div>
        </div>
    </div><!-- /.box-body -->
    <div class="box-footer">

        <button type="submit" class="btn btn-info pull-right">Zapisz</button>
    </div><!-- /.box-footer -->
</div><!-- /.box -->
<?php echo form_close(); ?>