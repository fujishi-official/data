<?php

$zipcode1 = '113-1234';
$zipcode2 = '220-601';

$result1 = preg_match('/\A([0-9]{3})-([0-9]{4})\z/',$zipcode1);
$result2 = preg_match('/\A([0-9]{3})-([0-9]{4})\z/',$zipcode2);

var_dump($result1);
var_dump($result2);

$str = 'Hi, I am taro.';
$result = preg_match('/Taro/i', $str);

var_dump($result);

$sentences = <<<EOD
はじめまして。
私のなまえは
ふじしです
休日はジョギングをします
EOD;

$result333 = preg_match('/^休日/', $sentences);

var_dump($result333);


?>