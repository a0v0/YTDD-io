<?php
$database["host"] = "sql309.epizy.com";
$database["name"] = "epiz_26201140_o";
$database["user"] = "epiz_26201140";
$database["password"] = "4u6amz8c57";
require_once __DIR__ . "/../admin/classes/database.class.php";
database::connect("mysql:host=" . $database["host"] . ";dbname=" . $database["name"] . ";charset=utf8mb4", $database["user"], $database["password"]);