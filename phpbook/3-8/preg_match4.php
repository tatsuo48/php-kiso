<?php
$str = "1234567";
$rtn = preg_match('/\d{7}/u', $str, $match);
$str2 = "あいうえお";
$rtn2 = preg_match('/\d{7}/u', $str2, $match2);
$str3 = "111-1111";
$rtn3 = preg_match('/\d{7}/u', $str3, $match3);
var_dump($rtn);
var_dump($rtn2);
var_dump($rtn3);
