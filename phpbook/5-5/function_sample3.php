<?php
$a = 20;
function test()
{
  $a = 10;
  return $a;
}

$b = test();
echo '$a=' . $a . '<br>$b=' . $b;
