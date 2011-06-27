<?php

include 'engine/start.php';

$test = array(
	'brett', 'bryan', 'brad'
);

$serialized = serialize($test);

datalist_set('test', $serialized);
var_dump(datalist_get('test'));

var_dump($serialized);

var_dump(sanitise_string($serialized));