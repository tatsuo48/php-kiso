<?php
$url = 'https://zipcloud.ibsnet.co.jp/api/search?zipcode=' . (int) $_GET['zip'];
$response = file_get_contents($url);
var_dump($response);
