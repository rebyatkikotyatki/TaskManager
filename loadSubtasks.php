<?php
require "db.php";
$taskobj =json_decode($_POST["taskObj"]);

//$subtasks = R::find('subtasks','taskid_id=?', array($taskobj->id));
//echo var_dump( $subtasks);
$subtasks = R::getAll( 'SELECT `id`, `title` FROM `subtasks` WHERE `taskid_id` = :id',
    [':id' => $taskobj->id]
);
$str = "";
for($i=0; $i<=count($subtasks); $i++){
    $str .= json_encode(array_shift($subtasks))."-";
}
echo (trim($str, "-"));
