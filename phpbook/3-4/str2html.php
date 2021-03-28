<?php
require_once 'functions.php';
$fp = fopen('bookdata.csv', 'r');
if ($fp === false) {
  echo 'ファイルのオープンに失敗しました。';
  exit;
}
while ($row = fgetcsv($fp)) {
  echo "書籍名" . str2html($row[0]) . "<br>";
  echo "著者名" . str2html($row[4]) . "<br><br>";
}
