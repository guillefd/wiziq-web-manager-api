  <!-- ZURBar -->
  <div id="zurBar" class="container">
    <div class="row">
      <div class="four columns">        
        <h1><a href="./"><img src="<?=$path ?>images/isala-logo.png" /></a></h1>
      </div>
      <div class="eight columns hide-on-phones" id="menu_header">
      	<strong class="right">
                <a href="<?=$base_url_page.'/' ?>">Inicio</a>      
                <? if(isset($_SESSION['isalas_rol']) && $_SESSION['isalas_rol']==5): ?>
                    <a href="<?=$base_url_page.'/agendar' ?>">Agendar una Clase</a>
                <? endif ?>
                <? if(isset($_SESSION['isalas_logged']) && $_SESSION['isalas_rol']==5): ?>                  
                    <a href="<?=$base_url_page.'/salas' ?>">Mis Clases</a>
                    <a>Hola, <span style="color: #ff0"><?=$_SESSION['isalas_user'] ?></span></a>               
                    <a href="<?=base_url().'login/logout' ?> " class="small blue nice button">Salir</a>
                <? endif ?>
                <? if(isset($_SESSION['isalas_logged']) && $_SESSION['isalas_rol']==1): ?> 
                    <a>Hola, <span style="color: #ff0"><?=$_SESSION['isalas_attendee_name'] ?></span></a>                       
                    <a href="<?=base_url().'room/logout/'.$_SESSION['isalas_class_id']?>" class="small blue nice button">Salir</a>                    
                <? endif ?>                    
      		
      	</strong>
      </div>
    </div>
  </div>
  <!-- /ZURBar -->


<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
