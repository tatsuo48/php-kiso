<?php
$fp = fopen('bookdata.csv', 'r');
if ($fp === false) {
  echo 'ファイルが開けませんでした';
  exit;
}
while ($row = fgetcsv($fp)) {
  echo "書籍名" . $row[0] . "<br>";
  echo "著者名" . $row[4] . "<br><br>";
}
