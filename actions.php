<?php

use App\DB;

include 'DB.php';

$config = include 'config.php';

$db = new DB(
    $config['host'],
    $config['db'],
    $config['user'],
    $config['passwd']
);

/**
 * @return string
 */
function getContent(DB $db): string {
    $notes = $db->selectAll();
        ob_start();
    ?>

    <?php foreach ($notes as $note) : ?>
        <div class="note-item"><?=$note ?></div>
    <?php endforeach; ?>

    <?php
    return ob_get_clean();
}

$note = $_POST['note'];
$response = [];
if ( $note ) {
    $note = htmlspecialchars($note);
    $res = $db->insertNote($note);
    if (!$res) {
        $response['error'] = 'Ошибка';
        die();
    }
}

$response['data'] = getContent($db);
echo json_encode($response);




