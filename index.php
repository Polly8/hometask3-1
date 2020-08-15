<?php

require ('src/functions.php');



$users = createUser();


$newFile = 'users.json';



$fp = fopen($newFile, 'w');

$toJson = json_encode($users, JSON_PRETTY_PRINT);

fputs($fp, $toJson);

fclose($fp);



$fp = fopen($newFile, 'r');

$content = file_get_contents($newFile);

$fromJson = json_decode($content, true);




echo '<pre>';

//var_dump($fromJson);

countNames($fromJson);

countAge($fromJson);
