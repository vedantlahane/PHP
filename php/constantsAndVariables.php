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