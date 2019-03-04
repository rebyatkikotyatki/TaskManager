<?php
require "db.php";
$taskobj =json_decode($_POST["taskObj"]);
$task = R::load('tasks', $taskobj->id);

$subtasks = R::findAll('subtasks', 'taskid_id=?', array($task->id));

R::trashAll( $subtasks );
R::trash($task);
//echo $taskobj->id;