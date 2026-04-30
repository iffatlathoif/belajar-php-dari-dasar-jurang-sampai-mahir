<?php

$matches = [];

$result = (bool) preg_match_all("/muh|iffat/i", "Muhamad Iffatullathoif", $matches);
var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing dan bangsat");
var_dump($result);

$result = preg_split("/[\s,-]/", "Muhamad Iffatullathoif, Jateng");
var_dump($result);
