

<script src="<?php echo base_url(); ?>bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>media/js/jquery.dataTables.js"></script>

<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/jquery.dataTables.min.css">
<script type="text/javascript">

    $(document).ready(function () {
        $('#example').DataTable({
            "language": {
                "url": "<?php echo base_url('json/polish.lang.json'); ?>"
            }
        });

    });
    $(document).ready(function () {
        var table = $('#example').DataTable();

        $('#example tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }


        });


    });
    $(document).ready(function () {
        var table = $('#example').DataTable();

        $('#example tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            $('#myModal').show();
            $('#part_1a').attr('value', data[1]);
            $('#part_2a').attr('value', data[2]);
            $('#part_3a').attr('value', data[3]);
            if (data[4] == 'Administrator') {
                $('#part_4a').prop('checked', true);
            }
            if (data[4] == 'Obsługa') {
                $('#part_5a').prop('checked', true);
            }
            if (data[4] == 'Klient') {
                $('#part_6a').prop('checked', true);
            }
            $('input[name="part_7a"]').attr('value', data[0]);





        });
    });
    $(function () {
        $('#part_4a').click(function () {
            $('#part_5a').prop('checked', false);
            $('#part_6a').prop('checked', false);

        });
        $('#part_5a').click(function () {
            $('#part_4a').prop('checked', false);
            $('#part_6a').prop('checked', false);

        });
        $('#part_6a').click(function () {
            $('#part_4a').prop('checked', false);
            $('#part_5a').prop('checked', false);


        });
    });
    $(function () {
        $('#part_0a').on('click', function () {
            $('#myModal').hide();
            $('#part_4a').prop('checked', false);
            $('#part_5a').prop('checked', false);
            $('#part_6a').prop('checked', false);

        });
    });
    $(function () {
        $('#part_0b').on('click', function () {
            $('#myModal1').hide();
            $('#part_4a').prop('checked', false);
            $('#part_5a').prop('checked', false);
            $('#part_6a').prop('checked', false);

        });
    });
    $(function () {
        if (<?php echo $haslo ?> == 1) {
            $('#myModal').show();
            $('#myModal1').show();
        }

    });
    $(function () {
        $('#part_9a').on('click', function () {
            $('#myModal1').show();
            $('input[name="part_3b"]').attr('value', $('input[name="part_7a"]').val());
        });
    });

</script>
<style type="text/css">
    #count_1{
        margin-left: 20%;
        margin-top: -65%;
    }
    #part_4a{
        margin-left: 5px;
    }
    #part_5a{
        margin-left: 5px;
    }
    #part_6a{
        margin-left: 5px;
    }
    #part_4at,
    #part_5at,
    #part_6at{
        width: 150px;
        border:none;
        display: inline;
        background: white;
    }
</style>
</br>
</br>
<div class="container" id="count_1">

    <section class="content" id="section_1">
        <!-- About Me Box -->
        <div class="box box-primary pull-right" id="box_1">
            <div class="box-header with-border">
                <h3 class="box-title">Obsługa kantoru</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                </br>
                </br>
                <table id="example" class="table table-striped table-bordered " cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nazwisko</th>
                            <th>Imie</th>
                            <th>Login</th>
                            <th>Uprawnienia</th>

                        </tr>
                    </thead>

                    <?php foreach ($lista as $row): ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nazwisko'] ?></td>
                            <td><?php echo $row['imie'] ?></td>
                            <td><?php echo $row['login'] ?></td>
                            <td><?php echo $row['uprawnienia'] ?></td>
                        </tr>
                    <?php endforeach; ?>

                </table>
            </div>
        </div>
    </section>
</div>
<?php echo form_open('index.php/EditUserAdmin/index'); ?>
<div class="modal" id="myModal" data-backdrop="static">
    <div class="modal-dialog" style="margin-top:10%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="part_0a">×</button>
                <h4 class="modal-title">Edycja danych osobowych obsługi kantoru</h4>
            </div>
            <div class="modal-body">

                <p>Nazwisko&nbsp;&nbsp;&nbsp;<?php echo form_input(array('id' => 'part_1a', 'name' => 'part_1a', 'class' => 'form-control', 'type' => 'text')) ?></p>

                <p>Imie&nbsp;&nbsp;&nbsp;<?php echo form_input(array('id' => 'part_2a', 'name' => 'part_2a', 'class' => 'form-control', 'type' => 'text')) ?></p>
                <p>Login&nbsp;&nbsp;&nbsp;<?php echo form_input(array('id' => 'part_3a', 'name' => 'part_3a', 'class' => 'form-control', 'type' => 'text', 'readonly' => FALSE)) ?></p>

                <label>Uprawnienia:</label></br>
                <?php echo form_input(array('id' => 'part_4at', 'name' => 'part_4at', 'class' => 'form-control', 'type' => 'text', 'value' => 'Administrator', 'readonly' => FALSE)) ?>&nbsp;&nbsp;&nbsp;<?php echo form_checkbox(array('id' => 'part_4a', 'name' => 'part_4a', 'value' => TRUE)) ?></p>
            <?php echo form_input(array('id' => 'part_5at', 'name' => 'part_5at', 'class' => 'form-control', 'type' => 'text', 'value' => 'Obsługa', 'readonly' => FALSE)) ?>&nbsp;&nbsp;&nbsp;<?php echo form_checkbox(array('id' => 'part_5a', 'name' => 'part_5a', 'value' => TRUE)) ?></p>
            <?php echo form_input(array('id' => 'part_6at', 'name' => 'part_6at', 'class' => 'form-control', 'type' => 'text', 'value' => 'Klient', 'readonly' => FALSE)) ?>&nbsp;&nbsp;&nbsp;<?php echo form_checkbox(array('id' => 'part_6a', 'name' => 'part_6a', 'value' => TRUE)) ?></p>
                </br>
                </br>
                <?php echo form_hidden('part_7a') ?>
            </div>
            <div class="modal-footer">
                <?php echo form_button(array('id' => 'part_8a', 'type' => 'submit', 'class' => 'btn btn-primary', 'content' => 'Edytuj')) ?>
                <?php echo form_button(array('id' => 'part_9a', 'class' => 'btn btn-danger', 'content' => 'Zmiana hasła')) ?>

            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
<?php echo form_open('index.php/EditPasswordAdmin/index'); ?>
<div class="modal" id="myModal1" data-backdrop="static">
    <div class="modal-dialog" style="margin-top:10%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="part_0b">×</button>
                <h4 class="modal-title">Zmiana hasła administratora</h4>
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

</br>


