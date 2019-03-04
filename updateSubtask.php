<?php
require "db.php";
$id =$_POST["taskObj"];
$subtask = R::load('subtasks', $id);
$subtask->title = $_POST["title"];
R::store($subtask);
echo $id;