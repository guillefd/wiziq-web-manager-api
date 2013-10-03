<?php

function xmlToArray($xml,$ns=null)
{
      $a = array();
      for($xml->rewind(); $xml->valid(); $xml->next()) 
      {
        $key = $xml->key();
        if(!isset($a[$key])) { $a[$key] = array(); $i=0; }
        else $i = count($a[$key]);
        $simple = true;
        foreach($xml->current()->attributes() as $k=>$v) 
        {
            $a[$key][$i][$k]=(string)$v;
            $simple = false;
        }
        if($ns) foreach($ns as $nid=>$name) {
          foreach($xml->current()->attributes($name) as $k=>$v) 
          {
             $a[$key][$i][$nid.':'.$k]=(string)$v;
             $simple = false;
          }
        } 
        if($xml->hasChildren()) 
        {
            if($simple) $a[$key][$i] = xmlToArray($xml->current(), $ns);
            else $a[$key][$i]['content'] = xmlToArray($xml->current(), $ns);
        } else {
            if($simple) $a[$key][$i] = strval($xml->current());
            else $a[$key][$i]['content'] = strval($xml->current());
        }
        $i++;
      }
      return $a;
}
//USO
//$xml = new SimpleXmlIterator('./a.xml', null, true);
//$namespaces = $xml->getNamespaces(true);
//$arr = xmlToArray($xml,$namespaces);




/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
