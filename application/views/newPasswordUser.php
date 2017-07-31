<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style type="text/css">
    
    #button_1:hover{
        background-color: white;
        color: black;
    }
    #button_1{
        background-color:#003333;
        color:#D5D4D3;
    }
</style>
<div class="container">
<div class="col-lg-4 col-lg-offset-4"style="margin-top:5%">
    <h2>Zmiana Hasła</h2>
    <h5>Witaj <span>&nbsp;<?php echo $imie;'.' ?>&nbsp;</span></br>Wpisz dwa razy nowe hasło i potwierdz dokonanie zmian hasłem z tokena jaki otrzymasz smsem</h5>     
    <?php
    $fattr = array('class' => 'form-signin');
    echo form_open(site_url() . 'index.php/ResetPassword/zmiana', $fattr);
    ?>
    <div class="form-group">
        <?php echo form_password(array('name' => 'part_1', 'id' => 'part_1', 'placeholder' => 'Hasło', 'class' => 'form-control')); ?>
<?php echo form_error('part_1','<div style="color:red">', '</div>'); ?>
    </div>
    <div class="form-group">
        <?php echo form_password(array('name' => 'part_2', 'id' => 'part_2', 'placeholder' => 'Powtórz Hasło', 'class' => 'form-control')); ?>
<?php echo form_error('part_2','<div style="color:red">', '</div>'); ?>
    </div>
    <div class="form-group">
        <?php echo form_input(array(
          'name'=>'part_3', 
          'id'=> 'part_3', 
          'placeholder'=>'Token', 
          'class'=>'form-control',)); ?>
      <?php echo form_error('part_3','<div style="color:red">', '</div>'); ?>
    </div>

    <?php echo form_submit(array('value' => 'Zmiana hasła','id'=>'button_1', 'class' => 'btn btn-lg btn-primary btn-block')); ?>
<?php echo form_close(); ?>

</div>
</div>
</br></br></br>