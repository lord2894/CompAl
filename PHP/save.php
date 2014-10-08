<?php
/**
 * Created by PhpStorm.
 * User: Kir
 * Date: 06.10.2014
 * Time: 14:06
 */

$request = $_POST['request'];
$f = fopen('history.txt','a');
//echo print_r($_POST);
if (!$f)
    echo "<script>alert(\"History.txt не был открыт/создан \");</script>";
else{
    fwrite($f,$request."\t".date('d-m-Y')."\t".date('H:i:s')."\t".$_SERVER['HTTP_CLIENT_IP'].PHP_EOL);
    //fwrite($f,print_r($_POST).PHP_EOL);
//fwrite($f,'\n');
fclose($f);}
