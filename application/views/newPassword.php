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
<div class="col-lg-4 col-lg-offset-4" style="margin-top:5%">
    <h2>Resetowanie Hasła</h2>
    <p>Proszę podać adres e-mail na który zostanie wysłany link z możliwością zmiany hasła do serwisu</p>
    <?php $fattr = array('class' => 'form-signin');
         echo form_open(site_url().'index.php/NewPassword/email', $fattr); ?>
    <div class="form-group">
      <?php echo form_input(array(
          'name'=>'part_1', 
          'id'=> 'part_1', 
          'placeholder'=>'E-mail:', 
          'class'=>'form-control',)); ?>
      <?php echo form_error('part_1','<div style="color:red">', '</div>'); ?>
    </div>
    <?php echo form_submit(array('value'=>'Wyślij','id'=>'button_1', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>    
</div>
</div>
</br>
</br>
</br>