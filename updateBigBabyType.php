<?php
require "db.php";
$taskobj =json_decode($_POST["taskObj"]);
$task = R::load('tasks', $taskobj->id);
$task->type = true;
R::store($task);
echo $task->type;
