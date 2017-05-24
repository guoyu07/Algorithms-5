<?php
require './vendor/autoload.php';

$arr = range(1,100);
shuffle($arr);
$total = count($arr);

$algorithm = BaseSort::getInstance(BaseSort::INSERTION);
$algorithm->setUnsorted($arr);
$algorithm->sort();
$sorted = $algorithm->getSorted();
print_r($sorted);