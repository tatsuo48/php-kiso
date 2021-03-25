<?php
$fp = fopen('bookdata.csv', 'r');
if ($fp === false) {
  echo 'ファイルが開けませんでした';
  exit;
}
var_dump($fp);
