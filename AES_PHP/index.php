<?php
include("Aes.php");
use PhpAes\Aes;

$key = 'abcdefgh01234567';
$data = $_POST['data'];
$mode = 'ECB';
$iv = null;

$aes = new AES($key, $mode, $iv);
$original = $aes->decrypt(hex2bin($data) );
$original2 = $aes->encrypt("The words you sent is : ".$original);
echo bin2hex($original2);

?>
