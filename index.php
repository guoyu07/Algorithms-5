<?php
require './vendor/autoload.php';

$arr = range(1,1000);
shuffle($arr);
$total = count($arr);

$algorithm = BaseSort::getInstance(BaseSort::BUBBLE);
$algorithm->setUnsorted($arr);
$algorithm->sort();
$sorted = $algorithm->getSorted();
print_r($sorted);