<?php
require_once 'data.php';
foreach ($people as $key => $person) {
  echo '名前は' . $person['name'] . '<br>';
}
