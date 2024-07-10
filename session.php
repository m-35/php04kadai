<?php
session_start();
// $sid = session_id();
// $_SESSION['name'] = 'jhon Doe';
// echo $sid;

$old_session_id = session_id();

// 
session_regenerate_id(true);

$new_session_id = session_id();

echo $old_session_id;
echo '<br>';
echo $new_session_id;

?>