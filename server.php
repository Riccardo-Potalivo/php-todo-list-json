<?php

$filecontent = file_get_contents("todo-list.json");
$list = json_decode($filecontent, true);

echo json_encode($list);

?>