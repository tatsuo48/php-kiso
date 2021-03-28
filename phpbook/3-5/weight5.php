<?php
$height = (float) $_POST['height'];
if (0 < $height) {
  if ($height < 3) {
    echo '適正体重は' . $height * $height * 22 . 'kgです。';
  } else {
    echo '身長は3より小さい値を入力してください。';
  }
} else {
  echo '身長は0より大きい値を入力してください。';
}
