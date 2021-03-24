<?php
$people[] = ['name' => '佐藤', 'blood' => 'A'];
$people[] = ['name' => '高橋', 'blood' => 'B'];
$people[] = ['name' => '鈴木', 'blood' => 'AB'];
foreach ($people as $people_key => $person) {
  echo '名前は' . $person['name'] . '<br>';
}
