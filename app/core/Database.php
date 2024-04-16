<?php

$string = 'mysql:hostname=localhost;';
$con =  new PDO($string, 'root');

$something = 'a string';
 show($con);