<?php 

//kalo ga ada session => mulai session
if (!session_id()) session_start();

require_once  '../app/init.php';

$app = new App;