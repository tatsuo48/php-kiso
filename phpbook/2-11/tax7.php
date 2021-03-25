<?php
function tax(int $price): float
{
  return $price * 1.1;
}
$sample_price = tax(100);
echo '消費税込みの値段：' . $sample_price . '円';
