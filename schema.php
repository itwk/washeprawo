<?php

namespace App;

include 'DB.php';

$config = include 'config.php';

$db = new DB(
    $config['host'],
    $config['db'],
    $config['user'],
    $config['passwd']
);

$db->createTableNotes();

for ($i = 1;  $i <= 20; $i++){
    $db->insertNote('Test note ' . $i);
}





