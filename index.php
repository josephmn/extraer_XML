<?php

$url = "https://sfeintegrador.bizlinks.com.pe/files/x%274F737271735356533449385845734C57596E6B63462B7A5069314E762F4361347671634C737A594E595861507151786B4D5A5355655638735055666E41364876%27";
$xml = file_get_contents($url);

$html = '<pre>' . str_replace('<', '&lt;', $xml) . '</pre>'; // esto te conviente la linea 4 en un formato string, para luego convertirlo en array en la linea 8
// echo $html;
$porciones = explode("ds:DigestValue", $html);
// var_dump($porciones);
echo '<pre>'.$porciones[1].'</pre>'; // Esto es como lo devuelve sin reemplace
echo str_replace(array('\\','&lt;','&gt;','<','>','/'),'',$porciones[1]); // Este de aqui seria tu resultado

?>