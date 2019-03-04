<?php
require "db.php";
$loggeduser = $_SESSION['logged_user'];
$task = R::dispense('tasks');
$task->title=  $_POST["title"];
$user = R::findOne('users', 'email=?', array($loggeduser['email']));
$task->type = false;
$task->descr = "";
$task->deadline = "";
$task->userid_id = $user->id;

R::store($task);
echo $task;



