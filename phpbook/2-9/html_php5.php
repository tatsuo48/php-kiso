<?php
$name = [
  '1' => '佐藤',
  '2' => '高橋',
  '3' => '鈴木',
];

foreach ($name as $key => $value) : ?>
  <p><?php echo $key; ?>人目は<?php echo $value; ?>さんです</p>
<?php endforeach; ?>
