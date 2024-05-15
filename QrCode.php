<?php

require_once 'phpqrcode/qrlib.php';



function create_QrCode($name){

$path ='images/QrCodes/';
$name = str_replace(' ', '_', $name);
$file=$path.$name.".png";


$text=$name.uniqid().'Raha_Party';

QRcode::png($text,$file, 10, 5);

return $file;

}

?>