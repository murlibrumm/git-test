<?php

include 'cat.php';

echo Cat::SOUND;

var_dump($name);
$name++;

$name = null;
//$name->toString(); // to produce errors in php_error.log

var_dump($name);

print_r (phpinfo());

// TODO
// git rebase
// git pull request

//Save string to log, use FILE_APPEND to append.
file_put_contents('./log_'.date("j.n.Y").'.txt', 'some log message, yo', FILE_APPEND);

?>
