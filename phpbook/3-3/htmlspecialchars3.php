<?php
$fp = fopen('bookdata.csv', 'r');
if ($fp === false) {
  echo 'ファイルが開けませんでした';
  exit;
}
while ($row = fgetcsv($fp)) {
  echo "書籍名" . htmlspecialchars($row[0], ENT_QUOTES, 'UTF-8') . "<br>";
  echo "著者名" . htmlspecialchars($row[4], ENT_QUOTES, 'UTF-8') . "<br><br>";
}
