<div class="container">
    <div class="row">        
        <div class="twelve">
            <p><h3>Principal</h3></p>
        </div>
    </div>
    
    <div class="row show-on-desktops">
        <div class="twelve columns">
             <?php if(isset($_SESSION['sys_msg']) && $_SESSION['sys_msg']): ?>
            <br>
                <div class="alert-box error">
                    <?php echo $_SESSION['sys_msg']; 
                       unset($_SESSION['sys_msg']); ?>
                </div>
            <?php endif ?>
            <?php if($this->session->flashdata('message')): ?>
            <br>
                <div class="alert-box error">
                 <?php echo $this->session->flashdata('message'); ?>
                </div>
            <?php endif ?>  
        </div>
    <div class="row show-on-desktops">        
            <div class="four columns">
                <a href="<?php echo $base_url_page.'/agendar' ?>" class="nice large radius white button">Agendar una Clase</a>
            </div>
            <div class="four columns">
                <a href="<?php echo $base_url_page.'/salas/hoy' ?>" class="nice large radius blue button">Clases de Hoy</a>
            </div>
            <div class="four columns">
                <a href="<?php echo $base_url_page.'/salas/proximos' ?>" class="nice large radius white button">Proximas Clases </a>
            </div>  
    </div>  
    </div>
</div>	  


<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
