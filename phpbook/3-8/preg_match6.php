<?php
$str = "12345678";
$rtn = preg_match('/\A\d{7}\z/u', $str, $match);
$str2 = "あいうえお1234567";
$rtn2 = preg_match('/\A\d{7}\z/u', $str2, $match2);
$str3 = "111-1234567";
$rtn3 = preg_match('/\A\d{7}\z/u', $str3, $match3);
$str4 = "1234567";
$rtn4 = preg_match('/\A\d{7}\z/u', $str4, $match4);
var_dump($rtn);
var_dump($rtn2);
var_dump($rtn3);
var_dump($rtn4);
