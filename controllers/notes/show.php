<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db

    ->query('select * from notes where  id = :id', [

        'id' => $_GET['id'],
    ])

    ->findOrFail();

authorize($note['user_id'] === $currentUserId);


if ($note['user_id'] !== $currentUserId) {


    abort(Response::FORBIDDEN);
}

view("notes/show.view.php", [

    'heading' => "Note",

    'note' => $note
]);
