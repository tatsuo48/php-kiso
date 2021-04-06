<?php
session_start();
$token = bin2hex(random_bytes(20));
$_SESSION['token'] = $token;
require_once __DIR__ . '/login_check.php';
include __DIR__ . '/inc/header.php'; ?>
<form action="add.php" method="post">
  <p>
    <label for="title">タイトル</label>
    <input type="text" name="title">
  </p>
  <p>
    <label for="isbn">ISBN</label>
    <input type="text" name="isbn">
  </p>
  <p>
    <label for="price">値段</label>
    <input type="text" name="price">
  </p>
  <p>
    <label for="publish">出版日</label>
    <input type="text" name="publish">
  </p>
  <p>
    <label for="author">著者</label>
    <input type="text" name="author">
  </p>
  <p class="button">
    <input type="hidden" name="token" value='<?php echo $token ?>'>
    <input type="submit" value="送信する">
  </p>
</form>
<?php include __DIR__ . '/inc/footer.php';
