<?php
require_once __DIR__ . '/inc/functions.php';
include __DIR__ . '/inc/error_check.php';
include __DIR__ . '/inc/header.php';
if (empty($_POST['id'])) {
  echo "idを指定してください。";
  exit;
}
if (!preg_match('/\A\d{0,11}\z/', $_POST['id'])) {
  echo "idがただしくありません。";
  exit;
}
try {
  $dbh = db_open();
  $sql = 'UPDATE books SET title = :title, isbn = :isbn, price = :price, publish = :publish, author = :author WHERE id = :id';
  $statement = $dbh->prepare($sql);
  $price = (int) $_POST['price'];
  $id = (int) $_POST['id'];
  $statement->bindParam(":title", $_POST['title'], PDO::PARAM_STR);
  $statement->bindParam(":isbn", $_POST['isbn'], PDO::PARAM_STR);
  $statement->bindParam(":price", $price, PDO::PARAM_INT);
  $statement->bindParam(":publish", $_POST['publish'], PDO::PARAM_STR);
  $statement->bindParam(":author", $_POST['author'], PDO::PARAM_STR);
  $statement->bindParam(":id", $id, PDO::PARAM_INT);
  $statement->execute();
  echo "データが更新されました。";
  echo "<a href='list.php'>リストへ戻る</a>";
} catch (PDOException $e) {
  echo "エラー発生！：" . $e->getMessage() . "<br>";
  exit;
}
?>
<?php include __DIR__ . '/inc/footer.php';
