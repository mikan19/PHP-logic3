<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\OutputSpending;

$dbUserName = "root";
$dbPassword = "password";
$spendingReport = new OutputSpending($dbUserName, $dbPassword);
$spendingReport->printSpendings();
?>







