<div class="container">
    <div class="row">
        <div class="twelve columns">
            <br>
        </div>        
    </div>
    <div class="row">
            <div class="five columns centered">
                <div class="panel">
                    <h4 class="subheader">Admin Login</h4>
        <?php $form_attributes = array('class'=>'nice custom', 'id'=>'form-login') ?>                    
        <?php echo form_open('login/validar',$form_attributes) ?>

        <?php $data = array('name'=>'usuario','id'=>'usuario','class'=>'small input-text','value'=>set_value('usuario'),'placeholder'=>'Nombre de Usuario'); ?>
        <label>Usuario</label>
        <?php echo  form_input($data) ?> 
        <?php $data = array('name'=>'clave','id'=>'clave','class'=>'small input-text','value'=>set_value('clave'),'type'=>'password','placeholder'=>'Clave'); ?>
        <label>Clave</label>
        <?php echo  form_input($data) ?>

        <input type="submit" id="boton_submit" class="nice medium radius blue button" value="INGRESAR" >                      

        <?php form_close() ?>
                    
                </div>			
            </div>
    </div>
    <div class="row">
        <div class="five columns centered"> 
            <?php echo validation_errors() ?>
            <?php if(isset($_SESSION['login_msg']) && $_SESSION['login_msg']): ?>
                <div class="alert-box error">
                    <?php echo $_SESSION['login_msg']; 
                       unset($_SESSION['login_msg']); ?>
                </div>
            <?php endif ?>
        </div>
    </div>    

</div>


<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
