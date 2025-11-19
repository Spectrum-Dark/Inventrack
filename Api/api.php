<?php
require_once(__DIR__ . '/api_json.php');

$DB = new Api_App;

header("Content-Type: application/json; charset=UTF-8");

echo $DB->list_products_json();
