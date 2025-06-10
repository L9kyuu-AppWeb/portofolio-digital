<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$EMAILJS_PUBLIC_KEY = $_ENV['EMAILJS_PUBLIC_KEY'];
$EMAILJS_SERVICE_ID = $_ENV['EMAILJS_SERVICE_ID'];
$EMAILJS_TEMPLATE_ID = $_ENV['EMAILJS_TEMPLATE_ID'];
?>
