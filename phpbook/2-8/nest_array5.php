<?php
$people[] = ['name' => '佐藤', 'blood' => 'A'];
$people[] = ['name' => '高橋', 'blood' => 'B'];
$people[] = ['name' => '鈴木', 'blood' => 'AB'];
foreach ($people as $people_key => $person) {
  echo 'キーは' . $people_key . '<br>';
  foreach ($person as $person_key => $value) {
    echo 'キーは' . $person_key . '値は' . $value . '<br>';
  }
}
