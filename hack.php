<?php

require_once "Parsedown.php";

if ( ! is_string($argv[1]) ) die('Missing file name');

$contents = file_get_contents($argv[1]);

if ( $contents == false ) die('No contents');

$Parsedown = new Parsedown();
echo $Parsedown->text($contents);
