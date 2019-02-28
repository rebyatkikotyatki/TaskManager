<?php
require "rb-mysql.php";
R::setup( 'mysql:host=127.0.0.1:3307; dbname=taskdb',
    'root', '' ); //for both mysql or mariaDB
session_start();