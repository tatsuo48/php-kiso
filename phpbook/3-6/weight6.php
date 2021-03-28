<?php
$height = (float) $_POST['height'];
$weight = (float) $_POST['weight'];

if (($height <= 0) || (3 <= $height)) {
  echo '身長を正しく入力してください。';
  exit;
}
if (($weight < 30) || (200 < $weight)) {
  echo '体重を正しく入力してください。';
  exit;
}

$goal_weight = $height * $height * 22;
$difference = abs($goal_weight - $weight);

echo '体重' . $weight . 'kg<br>';
echo '理想' . $goal_weight . 'kg<br>';
echo '後' . $difference . 'kgで適正体重です<br>';
