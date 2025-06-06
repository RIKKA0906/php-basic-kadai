<?php
$onion_statuses = ['name' => '玉ねぎ', 'price' => 200, 'area' => '北海道'];
$key_japanese = ['name' => '名前', 'price' => '値段', 'area' => '産地'];

foreach ($onion_statuses as $key => $value) {
    $japanese = $key_japanese[$key];
    echo "{$japanese}:{$value} <br>";
}


?>