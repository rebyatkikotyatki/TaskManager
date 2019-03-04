<?php
require "db.php";
$id =$_POST["subtaskid"];
$subtask = R::load('subtasks', $id);
R::trash( $subtask );
echo $id;
