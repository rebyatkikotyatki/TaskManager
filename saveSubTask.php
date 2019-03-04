<?php
require "db.php";
$subtask = R::dispense('subtasks');
$subtask->title=  $_POST["title"];
$taskobj =json_decode($_POST["taskObj"]);
$subtask->taskid_id = $taskobj->id;

R::store($subtask);
echo $subtask->id;