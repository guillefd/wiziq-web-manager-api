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
                    <p>Puede cerrar esta ventana.<br>
                     Para ingresar a una Sala Virtual hágalo desde la invitación enviada por correo.</p>
                </div>			
            </div>
    </div>
    <div class="row">
        <div class="five columns centered"> 
            <?php echo validation_errors() ?>
            <?php if(isset($_SESSION['login_msg']) && $_SESSION['login_msg']): ?>
                <div class="alert-box warning">
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
