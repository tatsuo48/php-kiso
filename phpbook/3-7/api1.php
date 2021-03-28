<?php
$url = 'https://zipcloud.ibsnet.co.jp/api/search?zipcode=2260027';
$response = file_get_contents($url);
var_dump($response);
