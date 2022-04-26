<?php
require 'openssl_func.php';

$enc = new Encrypt();

$encryptedString = $enc->encrypt('Hanya Tes Aja');

echo $encryptedString . PHP_EOL;

echo $enc->decrypt($encryptedString) . PHP_EOL;