<?php
require "db.php";
$loggedUser = $_SESSION['logged_user'];
$taskobj =json_decode($_POST["taskObj"]);
$task = R::findOne('tasks','id=?', array($taskobj->id));
echo $task;