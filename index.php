<?php

// include cat => gets executed!
// funny changes
include 'cat.php';

echo Cat::SOUND;

$name = "catLover";
var_dump($name);
echo '<pre>' . var_export($name, true) . '</pre>';
$name++;

$name = null;
//$name->toString(); // to produce errors in php_error.log

var_dump($name);

echo '<pre>' . var_export($name, true) . '</pre>';

print_r (phpinfo());

// TODO
// git rebase
// git pull request

//Save string to log, use FILE_APPEND to append.
file_put_contents('./log_'.date("j.n.Y").'.txt', 'some log message, yo', FILE_APPEND);

?>
