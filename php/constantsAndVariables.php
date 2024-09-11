<?php

//constants
$first_name = 'Joe';
$first_name = 'Bob';

echo $first_name; // Output: Bob

define('FIRST_NAME', 'Joe');//define('CONSTANT_NAME', 'value');
echo defined('FIRST_NAME'); // Output: 1
echo defined('LAST_NAME'); // Output: 0
echo FIRST_NAME; // Output: Joe

const LAST_NAME = 'Smith';

echo LAST_NAME; // Output: Smith

if(true){
    define('MIDDLE_NAME', 'John');
    echo MIDDLE_NAME; // Output: John
    const MIDDLE_NAME = 'Doe'; // Output: Fatal error: Cannot redeclare MIDDLE_NAME
    const lastname = 'Doe'; // Output: Fatal error: Constant name must be a valid identifier
}

$foo = 'bar';
$$foo = 'baz';
echo $bar; // Output: baz