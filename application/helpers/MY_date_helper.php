<?php

function convierte_a_fecha_unix($fecha)
{
    // formato: aaaa-mm-dd hh:mm)
    $a = substr($fecha,0,4);
    $m = substr($fecha,5,2);
    $d = substr($fecha,8,2);
    $h = substr($fecha,11,2);
    $min = substr($fecha,14,2);
    $unix = mktime($h, $min, 0, $m, $d, $a);
    return $unix;    
}

// Convierte segundos a dias, horas, minutos, segundos
function convierte_sec_a_dias($sec)
{
    if($sec>=86400)
    {
        $dias = round($sec/86400);
        $sec = $sec % 86400;
    }
    if($sec>=3600)
    {            
        $hs = round($sec/3600);
        $sec = $sec%3600;
    }        
    if($sec>=60)
    {
       $min = round($sec/60);
       $sec = $sec%60;
    }
    $dias = (isset($dias))? $dias : 0;
    $hs   = (isset($hs))? $hs : 0;
    $min  = (isset($min))? $min : 0;
    $time = array($dias,$hs,$min,$sec);      
      
    return $time;    
}

/**
 * devuelve diferencia en segundos entre dos fechas
 */
    function diferencia_fechas($fecha_menor, $fecha_mayor)
    {
        $dif = 0;
        $f1_unix = convierte_a_fecha_unix($fecha_menor);
        $f2_unix = convierte_a_fecha_unix($fecha_mayor);
        if($f1_unix < $f2_unix)
        {
            $dif = $f2_unix - $f1_unix;
        }
        return $dif;
    }

/**
 * Devuelve fecha/hora actual en formato Y-m-d H:i:s, en timezone configurado
 */
    function timestamp_actual()
    {
        return date('Y-m-d H:i:s');
    }
    

    function formatoHora_a_minutos($horario)
    {
        $hr = substr($horario,0,2);
        $min = substr($horario,3,2);
        $total = $hr*60 + $min;
        return $total;
    }
    
    
/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
