<?php

use app\models\User;

$user = new User;
$users =  $user->All();
  
require "../app/views/index.php";

?>

