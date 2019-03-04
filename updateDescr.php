<?php
require "db.php";
$loggedUser = $_SESSION['logged_user'];
$taskobj =$_POST["taskObj"];
$task = R::load('tasks', $taskobj->id);
$task->descr = $_POST["descr"];
R::store($task);
echo $taskobj->id;