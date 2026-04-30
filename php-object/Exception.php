<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "Iffat";
$loginRequest->password = "Iffat";

try {
    validateLoginRequest($loginRequest);
} catch (ValidationException $exception) {
    echo "Validation error : {$exception->getMessage()}" . PHP_EOL;
} catch (Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
} finally {
    echo "ERROR ATAU ENGGAK AKAN DI EKSEKUSI" . PHP_EOL;
}
echo "VALID" . PHP_EOL;