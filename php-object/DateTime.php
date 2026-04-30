<?php

$dateTime = new DateTime();
$dateTime->setDate(1990, 1, 20);
$dateTime->setTime(10, 10, 10, 0);

$dateTime->add(new DateInterval("P1Y"));
$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = 1;
$dateTime->add($minusOneMonth);
var_dump($dateTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s").PHP_EOL;
echo "Waktu saat ini $string";

$dateParse = DateTime::createFromFormat("Y-m-d H:i:s", "2026-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($dateParse);