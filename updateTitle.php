<?php
require "db.php";
$loggedUser = $_SESSION['logged_user'];
$taskobj =json_decode($_POST["taskObj"]);
$task = R::load('tasks', $taskobj->id);
$task->title = $_POST["title"];
R::store($task);
echo $task;
