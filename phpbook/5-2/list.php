<?php
require_once __DIR__ . '/../3-4/functions.php';
try {
  $user = 'root';
  $password = 'test';
  $opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
  ];
  $dbh = new PDO('mysql:host=mysql;dbname=sample_db', $user, $password, $opt);
  $sql = 'SELECT title, author FROM books';
  $statement = $dbh->query($sql);

  while ($row = $statement->fetch()) {
    echo '書籍名' . str2html($row[0]) . '<br>';
    echo '著者名' . str2html($row[1]) . '<br><br>';
  }
  echo "<a href='../5-3/add.html'>書籍を追加する</a>";
} catch (PDOException $e) {
  echo "エラー発生！：" . str2html($e->getMessage()) . "<br>";
  exit;
}
