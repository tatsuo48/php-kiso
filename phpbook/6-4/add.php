<?php
require_once __DIR__ . '/token_check.php';
require_once __DIR__ . '/inc/functions.php';
include __DIR__ . '/inc/error_check.php';
include __DIR__ . '/inc/header.php';
try {
  $dbh = db_open();
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
  echo "<a href='index.php'>リストへ戻る</a>";
} catch (PDOException $e) {
  echo "エラー発生！：" . $e->getMessage() . "<br>";
  exit;
}
?>
<?php include __DIR__ . '/inc/footer.php';
