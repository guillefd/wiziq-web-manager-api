<?php
/**
 *Genera codigo para acceso precio
 * @return string 
 */
function generaCodigo()
{
    $chars = array('a','b','c','d','e','1','2','3','4','5','6','7','8','9','0');
    $cod='';
    for($i=0;$i<=5;$i++)
    {
        $j = rand(0,14);
        $cod.= $chars[$j];
    }
    return strtoupper($cod);
    
}

/**
 *genera ID unico para landpage
 * dia del año-año-hora-min-seg
 * @return type 
 */
function generaIdUnico()
{
    return date('WyHis');

}

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */