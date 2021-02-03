<?php
require_once 'config.php';

$db = new DB();

$db->logout();

echo 'Successfully Logout<br> <a href="/">Go Back</a>';