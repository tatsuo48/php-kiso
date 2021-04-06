<?php
session_start();
$token = bin2hex(random_bytes(20));
$_SESSION['token'] = $token;
require_once __DIR__ . '/login_check.php';
require_once __DIR__ . '/inc/functions.php';
if (empty($_GET['id'])) {
    echo "idを指定してください";
    exit;
}
if (!preg_match('/\A\d{1,11}+\z/u', $_GET['id'])) {
    echo "idが正しくありません。";
    exit;
}
$id = (int)$_GET['id'];
try {
    $dbh = db_open();
    $sql = "SELECT id, title, isbn, price, publish, author FROM books where id = :id";
    $statement = $dbh->prepare($sql);
    $statement->bindParam(":id", $id, PDO::PARAM_INT);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo "指定したデータはありません。";
        exit;
    }
    $title = str2html($result['title']);
    $isbn = str2html($result['isbn']);
    $price = str2html($result['price']);
    $publish = str2html($result['publish']);
    $author = str2html($result['author']);
    $id = str2html($result['id']);
    $html_form = <<< EOD
    <form action='update.php' method='POST'>
    <p>
        <label for='title'>タイトル</label>
        <input type='text' name='title' value='$title'>
    </p>
    <p>
        <label for='isbn'>ISBN</label>
        <input type='text' name='isbn' value='$isbn'>
    </p>
    <p>
        <label for='price'>価格</label>
        <input type='text' name='price' value='$price'>
    </p>
    <p>
        <label for='publish'>出版日</label>
        <input type='text' name='publish' value='$publish'>
    </p>
    <p>
        <label for='author'>著者</label>
        <input type='text' name='author' value='$author'>
    </p>
    <p class='button'>
        <input type='hidden' name='id' value='$id'>
        <input type='hidden' name='token' value='$token'>
        <input type='submit' value='送信する'>
    </p>
    </form>
    EOD;
    include __DIR__ . '/inc/header.php';
    echo $html_form;
    include __DIR__ . '/inc/footer.php';
} catch (PDOException $e) {
    echo "エラー発生！：" . str2html($e->getMessage()) . "<br>";
    exit;
}
