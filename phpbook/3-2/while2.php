<?php
$fp = fopen('bookdata.csv', 'r');
if ($fp === false) {
  echo 'ファイルが開けませんでした';
  exit;
}
while ($row = fgetcsv($fp)) {
  var_dump($row);
}
