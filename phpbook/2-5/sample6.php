<?php
$a = $_POST["a"];
if ($a === 'A') {
  echo 'Aです。';
} elseif ($a === 'B') {
  echo 'Bです。';
} elseif ($a === 'O') {
  echo 'Oです。';
} else {
  echo 'A,B,O以外です';
}
