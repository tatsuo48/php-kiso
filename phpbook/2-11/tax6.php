<?php
function tax(int $price)
{
  return $price * 1.1;
}
$sample_price = tax('文字列');
echo '消費税込みの値段：' . $sample_price . '円';
