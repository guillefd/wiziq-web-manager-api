<div class="container">
    <div class="row">
        <div class="twelve columns">
            <br>
        </div>        
    </div>
    <div class="row">
            <div class="five columns centered">
                <div class="panel">
                    <h4 class="subheader">Ingresar a la Sala Virtual</h4>
        <? $form_attributes = array('class'=>'nice custom', 'id'=>'form-login') ?>                    
        <?=form_open('room/validar/'.$class_id,$form_attributes) ?>

        <? $data = array('name'=>'email','id'=>'email','class'=>'small input-text','value'=>set_value('titulo'),'placeholder'=>'Email'); ?>
        <label>Email</label>
        <?= form_input($data) ?> 
        <? $data = array('name'=>'clave','id'=>'password','class'=>'small input-text','value'=>set_value('titulo'),'type'=>'password','placeholder'=>'Clave'); ?>
        <label>Clave</label>
        <?= form_input($data) ?>

        <input type="submit" id="boton_submit" class="nice medium radius blue button" value="INGRESAR" >                      

        <? form_close() ?>
                    
                </div>			
            </div>
    </div>
    <div class="row">
        <div class="five columns centered"> 
            <?=validation_errors() ?>
            <? if(isset($_SESSION['login_msg']) && $_SESSION['login_msg']): ?>
                <div class="alert-box warning">
                    <?=$_SESSION['login_msg']; 
                       unset($_SESSION['login_msg']); ?>
                </div>
            <? endif ?>
        </div>
    </div>    

</div>


<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
