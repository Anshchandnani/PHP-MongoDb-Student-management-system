<?php

require __DIR__ . '/vendor/autoload.php';

$client = new MongoDB\Client("mongodb://127.0.0.1:27017");

$db = $client->{'student_management'};

$collection = $db->students;

$data = $collection->find();

foreach($data as $row)
{
    echo $row['name'] . "<br>";
}
?>