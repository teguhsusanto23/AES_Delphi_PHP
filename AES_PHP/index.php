<?php
include("Aes.php");
use PhpAes\Aes;

$key = 'abcdefgh01234567';
$data = $_POST['data'];
$mode = 'ECB';
$iv = null;

$aes = new AES($key, $mode, $iv);
echo $aes->decrypt(hex2bin($data) );

?>