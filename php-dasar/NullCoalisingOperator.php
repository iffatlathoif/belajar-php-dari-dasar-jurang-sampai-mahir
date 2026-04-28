<?php
$data = [];
// $data = [
//     "action" => "Create"
// ];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action;

// ini jika menggunakan null coalescing operator
$action = $data["action"] ?? "Nothing";
echo $action;