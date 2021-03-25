<?php
$fp = fopen('bookdata.csv', 'r');
if ($fp === false) {
  echo 'ファイルが開けませんでした';
  exit;
}
$row = fgetcsv($fp);
var_dump($row);
