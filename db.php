<?php

require __DIR__ . '/vendor/autoload.php';

$client = new MongoDB\Client("mongodb://127.0.0.1:27017");

// IMPORTANT: use correct DB name
$db = $client->{'student_management'};

$collection = $db->students;

?>