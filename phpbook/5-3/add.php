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
  $sql = 'insert into books (id,title,isbn,price,publish,author) values (null, :title, :isbn,:price,:publish,:author)';
  $statement = $dbh->prepare($sql);
  $price = (int) $_POST['price'];
  $statement->bindParam(":title", $_POST['title'], PDO::PARAM_STR);
  $statement->bindParam(":isbn", $_POST['isbn'], PDO::PARAM_STR);
  $statement->bindParam(":price", $price, PDO::PARAM_INT);
  $statement->bindParam(":publish", $_POST['publish'], PDO::PARAM_STR);
  $statement->bindParam(":author", $_POST['author'], PDO::PARAM_STR);
  $statement->execute();
  echo "データが追加されました。";
  echo "<a href='../5-2/list.php'>リストへ戻る</a>";
} catch (PDOException $e) {
  echo "エラー発生！：" . $e->getMessage() . "<br>";
  exit;
}
